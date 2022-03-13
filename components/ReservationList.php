<?php namespace Logingrupa\Studybook\Components;

use Cms\Classes\ComponentBase;
use Logingrupa\Studybook\Classes\Collection\ReservationCollection;

/**
 * Class ReservationList
 * @package Logingrupa\Studybook\Components
 */
class ReservationList extends ComponentBase
{
    /**
     * Component details
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'logingrupa.studybook::lang.component.reservation_list_name',
            'description' => 'logingrupa.studybook::lang.component.reservation_list_description',
        ];
    }

    /**
     * Make element collection
     * @param array $arElementIDList
     * @return ReservationCollection
     */
    public function make($arElementIDList = null)
    {
        return ReservationCollection::make($arElementIDList);
    }

    /**
     * Method for ajax request with empty response
     * @return bool
     */
    public function onAjaxRequest()
    {
        return true;
    }
}
