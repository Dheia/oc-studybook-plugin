<?php namespace Logingrupa\Studybook\Models;

use Backend\Models\ImportModel;
use Illuminate\Support\Carbon;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use Kharanenka\Scope\ActiveField;
use Kharanenka\Scope\NameField;
use Kharanenka\Scope\SlugField;
use Kharanenka\Scope\CodeField;
use Kharanenka\Scope\ExternalIDField;
use Lovata\Toolbox\Traits\Helpers\TraitCached;

/**
 * Class Reservation
 * @package Logingrupa\Studybook\Models
 *
 * @mixin \October\Rain\Database\Builder
 * @mixin \Eloquent
 *
 * @property integer $id
 * @property bool $active
 * @property string $name
 * @property string $slug
 * @property string $code
 * @property string $external_id
 * @property string $preview_text
 * @property string $description
 * @property int $view_count
 * @property \October\Rain\Argon\Argon $created_at
 * @property \October\Rain\Argon\Argon $updated_at
 * @property \System\Models\File $file
 * @property \System\Models\File $preview_image
 * @property \October\Rain\Database\Collection|\System\Models\File[] $images
 */
class Reservation extends ImportModel
{
    use Sluggable;
    use Validation;
    use ActiveField;
    use NameField;
    use SlugField;
    use CodeField;
    use ExternalIDField;
    use TraitCached;

    /** @var string */
    public $table = 'logingrupa_studybook_reservations';
    /** @var array */
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    /** @var array */
    public $translatable = [
        'name',
        'preview_text',
        'description',
    ];
    /** @var array */
    public $attributeNames = [
        'name' => 'lovata.toolbox::lang.field.name',
        'slug' => 'lovata.toolbox::lang.field.slug',
    ];
    /** @var array */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|unique:logingrupa_studybook_reservations',
    ];
    /** @var array */
    public $slugs = [
        'slug' => 'name'
    ];
    /** @var array */
    public $jsonable = [];
    /** @var array */
    public $fillable = [
        'active',
        'name',
        'slug',
        'code',
        'external_id',
        'preview_text',
        'description',
    ];
    /** @var array */
    public $cached = [
        'id',
        'active',
        'name',
        'slug',
        'code',
        'external_id',
        'view_count',
        'preview_text',
        'description',
        'preview_image',
        'file',
        'images',
    ];
    /** @var array */
    public $dates = [
        'created_at',
        'updated_at',
    ];
    /** @var array */
    public $casts = [];
    /** @var array */
    public $visible = [];
    /** @var array */
    public $hidden = [];
    /** @var array */
    public $hasOne = [];
    /** @var array */
    public $hasMany = [];
    /** @var array */
    public $belongsTo = [];
    /** @var array */
    public $belongsToMany = [];
    /** @var array */
    public $morphTo = [];
    /** @var array */
    public $morphOne = [];
    /** @var array */
    public $morphMany = [];
    /** @var array */
    public $attachOne = [
        'preview_image' => 'System\Models\File',
        'file' => 'System\Models\File',
        'import_file' => [\System\Models\File::class, 'public' => false],
        ];
    /** @var array */
    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    public function listReservationDates(): array
    {
        return $this->where('start_at', '>=', Carbon::yesterday())
                    ->groupBy('start_at')
                    ->pluck('start_at', 'start_at')
                    ->toArray();
    }

    /**
     * Parse CSV file
     * @param array $arResults
     * @param null|string $sSessionKey
     */
    public function importData($arResults, $sSessionKey = null)
    {
        if (empty($arResults)) {
            return;
        }

        foreach ($arResults as $sRow => $arData) {
            try {
                $obReservation = new Reservation();
                $obReservation->fill($arData);
                $obReservation->save();
                $this->logCreated();
            } catch (\Exception $obException) {
                $this->logError($sRow, $obException->getMessage());
            }
        }
    }
}
