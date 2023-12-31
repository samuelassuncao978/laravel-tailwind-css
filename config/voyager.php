<?php

use App\Widgets\TotalSalesWidget;
use App\Widgets\TodayCountOrdersWidget;
use App\Widgets\TodayAmountOrdersWidget;

return [
    /*
    |--------------------------------------------------------------------------
    | User config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager user configs
    |
    */

    'user' => [
        'add_default_role_on_register' => true,
        'default_role'                 => 'admin',
        'default_avatar'               => 'users/default.png',
        'redirect'                     => '/fme-admin',
    ],

    'default_admins' => [
        [
            'name'      => 'Judd Franklin',
            'email'     => 'judd@fountainheadme.com',
            'password'  => 'makemoney1'
        ],
        [
            'name'      => 'Carlos Gomez',
            'email'     => 'carlos@fountainheadme.com',
            'password'  => 'makemoney1'
        ],
        [
            'name'      => 'Ryan Blackman',
            'email'     => 'ryan@fountainheadme.com',
            'password'  => 'makemoney1'
        ],
        [
            'name'      => 'Marvin Morales',
            'email'     => 'marvin@greenworldrecycling.net',
            'password'  => 'GreenWorld2020!'
        ],
        [
            'name'      => 'Ernesto Romero',
            'email'     => 'ernesto@gwcopierservices.com',
            'password'  => 'GreenWorld2020!'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        
        // default nested controller
        'nested' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerNestedController',

        'namespace' => 'TCG\\Voyager\\Http\\Controllers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Models config
    |--------------------------------------------------------------------------
    |
    | Here you can specify default model namespace when creating BREAD.
    | Must include trailing backslashes. If not defined the default application
    | namespace will be used.
    |
    */

    'models' => [
        //'namespace' => 'App\\',
    ],

    /*
    |--------------------------------------------------------------------------
    | Storage Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify attributes related to your application file system
    |
    */

    'storage' => [
        'disk' => env('FILESYSTEM_DRIVER', 'public'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Media Manager
    |--------------------------------------------------------------------------
    |
    | Here you can specify if media manager can show hidden files like(.gitignore)
    |
    */

    'hidden_files' => false,

    /*
    |--------------------------------------------------------------------------
    | Database Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager database settings
    |
    */

    'database' => [
        'tables' => [
            'hidden' => [
                'migrations', 
                'data_rows', 
                'data_types', 
                'menu_items', 
                'password_resets', 
                'permission_role', 
                'settings',
                'jobs',
                'failed_jobs',
            ],
        ],
        'autoload_migrations' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Multilingual configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify if you want Voyager to ship with support for
    | multilingual and what locales are enabled.
    |
    */

    'multilingual' => [
        /*
         * Set whether or not the multilingual is supported by the BREAD input.
         */
        'enabled' => false,

        /*
         * Select default language
         */
        'default' => 'en',

        /*
         * Select languages that are supported.
         */
        'locales' => [
            'en',
            //'pt',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard config
    |--------------------------------------------------------------------------
    |
    | Here you can modify some aspects of your dashboard
    |
    */

    'dashboard' => [
        // Add custom list items to navbar's dropdown
        'navbar_items' => [
            'voyager::generic.profile' => [
                'route'      => 'voyager.profile',
                'classes'    => 'class-full-of-rum',
                'icon_class' => 'voyager-person',
            ],
            'voyager::generic.home' => [
                'route'        => '/',
                'icon_class'   => 'voyager-home',
                'target_blank' => true,
            ],
            'voyager::generic.logout' => [
                'route'      => 'voyager.logout',
                'icon_class' => 'voyager-power',
            ],
        ],

        'widgets' => [
            TodayAmountOrdersWidget::class
        ],

        'data_tables' => [
            'dom' => "
                    <'row'<'col-12 text-left d-flex align-items-center justify-content-end'f>>
                    <'row'<'col-sm-12'tr>>
                    <'row'<'col-6 text-left d-flex align-items-center'i><'col-6 text-left d-flex align-items-center justify-content-end'p>>
                ",
            'pageLength' => 50
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Automatic Procedures
    |--------------------------------------------------------------------------
    |
    | When a change happens on Voyager, we can automate some routines.
    |
    */

    'bread' => [
        // When a BREAD is added, create the Menu item using the BREAD properties.
        'add_menu_item' => true,

        // which menu add item to
        'default_menu' => 'admin',

        // When a BREAD is added, create the related Permission.
        'add_permission' => true,

        // which role add premissions to
        'default_role' => 'admin'
    ],

    /*
    |--------------------------------------------------------------------------
    | UI Generic Config
    |--------------------------------------------------------------------------
    |
    | Here you change some of the Voyager UI settings.
    |
    */

    'primary_color' => '#47754f',

    'show_dev_tips' => false, // Show development tip "How To Use:" in Menu and Settings

    // Here you can specify additional assets you would like to be included in the master.blade
    'additional_css' => [
        'admin/css/admin.css?v=3.3.6',
    ],

    'additional_js' => [
        //'js/custom.js',
    ],

    'googlemaps' => [
        'key'    => env('GOOGLE_MAPS_KEY', ''),
        'center' => [
            'lat' => env('GOOGLE_MAPS_DEFAULT_CENTER_LAT', '32.715738'),
            'lng' => env('GOOGLE_MAPS_DEFAULT_CENTER_LNG', '-117.161084'),
        ],
        'zoom' => env('GOOGLE_MAPS_DEFAULT_ZOOM', 11),
    ],

    /*
    |--------------------------------------------------------------------------
    | Model specific settings
    |--------------------------------------------------------------------------
    |
    | Here you change some model specific settings
    |
    */

    'settings' => [
        // Enables Laravel cache method for
        // storing cache values between requests
        'cache' => false,
    ],

    // Activate compass when environment is NOT local
    'compass_in_production' => false,

    'media' => [
        // The allowed mimetypes to be uploaded through the media-manager.
        'allowed_mimetypes' => '*', //All types can be uploaded
        /*
        'allowed_mimetypes' => [
          'image/jpeg',
          'image/png',
          'image/gif',
          'image/bmp',
          'video/mp4',
        ],
        */
        //Path for media-manager. Relative to the filesystem.
        'path'                => '/',
        'show_folders'        => true,
        'allow_upload'        => true,
        'allow_move'          => true,
        'allow_delete'        => true,
        'allow_create_folder' => true,
        'allow_rename'        => true,
        /*'watermark'           => [
            'source'         => 'watermark.png',
            'position'       => 'bottom-left',
            'x'              => 0,
            'y'              => 0,
            'size'           => 15,
       ],
       'thumbnails'          => [
           [
                'type'  => 'fit',
                'name'  => 'fit-500',
                'width' => 500,
                'height'=> 500
           ],
       ]*/
    ],
];
