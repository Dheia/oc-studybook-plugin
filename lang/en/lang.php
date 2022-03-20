<?php return [
    'plugin' => [
        'name' => 'Studybook',
        'description' => '',
    ],
    'field' => [
        'price' => 'Price',
        'price_placeholder' => 'Enter price in cents 24.40 EUR = 2440',
        'old_price' => 'Old price',
        'old_price_placeholder' => 'Enter old price in cents 28.40 EUR = 2840',
        'available_seats' => 'Default number of seats/students in course',
        'available_date_available_seats' => 'How many students can reserve spot for this date',
        'available_date_available_seats_description' => 'After reservations reaches this number, this date will be hidden form frontend and future reservations will be disabled',
        'reserved_seats' => 'How many students already have reserved this date',
        'reserved_seats_description' => 'This number is calculated statically - it is not dynamic',
        'available_seats_placeholder' => 'Please enter default number of allowed seats/students in this course',
        'duration_days' => 'Default course duration',
        'duration_days_placeholder' => 'Please enter default course duration in days',
        'additional_settings' => 'Additional settings',
        'lesson_count' => 'Lesson count',
        'practical_lesson_count' => 'Practical lesson count',
        'status' => 'Status',
        'course_name' => 'Course name',
        'course_id' => 'Course ID',
        'active' => 'Active',
        'start_at' => 'Start At',
        'full_name' => 'Student Full Name',
        'student_id' => 'Student ID',
        'student_phone' => 'Client phone',
        'email' => 'Client E-mail',
        'slug' => 'URL',
        'datetime'=> 'Selected date will be available in frontend for reservation',
        'datetime_simple'=> 'Date available for reservation',
        'course_list' => 'Choose courses',
        'course_list_description' => 'Selected date will be available only for selected courses',
        'date_available_seats' => 'Available seats',
        'date_reserved_seats' => 'Reserved seats',
        'reservation_start_at' => 'Reservation date',
        'reservation_select_course' => 'Select course from list',
        'attendance' => 'WIll  attend?',
        'model_status' => 'Should school find client?',
        'health' => 'Green Certificate',
        'payment' => 'Is payment done? - NOT IMPLEMENTED YET    ',
        'information' => 'Is information sent? - NOT IMPLEMENTED YET',
    ],
    'menu' => [
        'main' => 'Studybook',
        'courses' => 'Course list',
        'reservations' => 'Reservation list',
        'availabledates' => 'AvailableDate list',
    ],
    'tab' => [
        'permissions' => 'Studybook',
    ],
    'comment' => [
    ],
    'message' => [
    ],
    'button' => [
        'add' => 'Add new',
        'create' => 'Create new',
        'link' => 'Link existing',
        'unlink' => 'Unlink selected',
    ],
    'component' => [
        'course_page_name' => 'Course Page',
        'course_page_description' => 'Get course page data',
        'course_data_name' => 'Course Data',
        'course_data_description' => 'Get course by ID',
        'course_list_name' => 'Course List',
        'course_list_description' => 'Get course list',
        'reservation_page_name' => 'Reservation Page',
        'reservation_page_description' => 'Get reservation page data',
        'reservation_data_name' => 'Reservation Data',
        'reservation_data_description' => 'Get reservation by ID',
        'reservation_list_name' => 'Reservation List',
        'reservation_list_description' => 'Get reservation list',
    ],
    'permission' => [
        'course' => 'Manage course',
        'reservation' => 'Manage reservation',
        'availabledate' => 'Manage availabledate',
    ],
    'course' => [
        'name' => 'Course',
        'list_title' => 'Course list',
        'commentAbove' => 'Manage single Course all available dates for reservation in frontend',
        'tab' => 'Available dates',
    ],
    'reservation' => [
        'name' => 'Reservation',
        'list_title' => 'Reservation list',
        'tab' => 'Student'
    ],
    'availabledate' => [
        'name' => 'availabledate',
        'list_title' => 'AvailableDate list',
        'titleCreateForm' => 'Create New Date for current Course and make it available for reservations in Frontend',
        'titleLinkForm' => 'Link selected date from list to current Course',
        'confirmUnlink' => 'Unlink selected date from current Course?',
        'flashUnlink' => 'Selected date Unlinked from current Course and is not available for booking in Frontend!',
        'excludeExpiredDates' => 'Exclude old dates',
    ],
];
