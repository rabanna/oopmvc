<?php

namespace Core;
class Config{
    private static $config = [
        'version'              => '0.0.1', //app version
         'root_dir'            => '/oopmvc/', //app dir root
         'default_controller'  => 'Ethuto', //controller
         'default_layout'      => 'default', //degfault layout
         'default_site_title'  => 'Ethuto-app', //site title
         'db_drivers'          => 'mysql', //database drivers
         'db_host'             => '127.0.0.1', //use IP Address not domain
         'db_name'             => 'oopmvc',//database name
         'db_user'             => 'root',//DB user
         'db_password'         => '', //DB password
         'login_cookie_name'   => 'rohkjatb198619942019' //login cookie name

    ];

    public static function get($key){
        return array_key_exists($key, self::$config)? self::$config[$key] : null;
    }
}