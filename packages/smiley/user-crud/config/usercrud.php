<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Admin App Layouts [default value = "admin.layouts.app"]
    |--------------------------------------------------------------------------
    |
    | This view path is used to extends the view. 
    | for example: you set path as like "admin.layouts.app" then it means app.blade.php exists at "resources/views/admin/layouts" directory
    |
    */

    'admin_app_layouts' => 'admin.layouts.app',

    /*
    |--------------------------------------------------------------------------
    | Route Urls 
    |--------------------------------------------------------------------------
    |
    | using that URLs you can access particular web page. 
    | for example: you set path as like "admin.layouts.app" then it means app.blade.php exists at "resources/views/admin/layouts" directory
    |
    |----- WARNING-NOTICE | CAUTION -------------------------------------------
    | if you are changing "Route Name", it will be affected to all over web functionality. So, Please Be Carefull
    |--------------------------------------------------------------------------
    |
    */
    'urls' => [
        'user-list' => 'admin/user',
        'user-create' => 'admin/user/create',
        'user-edit' => 'admin/user/edit/{id}'
    ],

    'table_names' => [
        'users' => 'users',
    ],
    'column_names' => [
        'contact_number' => 'contact_number',
    ],
    'models' => [
        'user' => '\Smiley\UserCrud\Models\User'
    ]
];