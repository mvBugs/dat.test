<?php

/*
|--------------------------------------------------------------------------
|  Laravel Variables
|--------------------------------------------------------------------------
|
*/
return [

    'model' => \Fomvasss\Variable\Variable::class,

    'table_name' => 'variables',

    /* -----------------------------------------------------------------
     |  Root key for config, example: 'vars'
     |  Use: config('vars.some_var')
     |  If empty this - option OFF
     | -----------------------------------------------------------------
     */
    'config_key_for_vars' => 'vars',

    /* -----------------------------------------------------------------
     |  Replace configs with variables
     | -----------------------------------------------------------------
     */
    'variable_config' => [
        'app_name' => 'app.name',                   // config('app.name')
        'mail_from_address' => 'mail.from.address',
        'mail_from_name' => 'mail.from.name',
        //'mail_to_address' => 'mail.to.address',
        //'mail_to_name' => 'mail.to.name',
    ],

    /* -----------------------------------------------------------------
     |  Cache settings for vars
     | -----------------------------------------------------------------
     */
    'cache' => [

        'time' => 360,

        'name' => 'laravel.variables.cache',
    ]
];
