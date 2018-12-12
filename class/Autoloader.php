<?php 

class Autoloader{

    static function register(){

        spl_autoload_register(array(__CLASS__,'autoload'));

    }

    static function autoload($class){

        if(file_exists('models/'.$class.'.php')){
            require 'models/'.$class.'.php';
        }

        if(file_exists('class/'.$class.'.php')){
            require 'class/'.$class.'.php';
        }

        if(file_exists('controlers/'.$class.'.php')){
            require 'controlers/'.$class.'.php';
        }

    }

}




