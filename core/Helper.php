<?php
namespace Core;

class Helper{

    public static function dnd($data=[], $die = true){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        if($die){
            die;
        }
    }
}