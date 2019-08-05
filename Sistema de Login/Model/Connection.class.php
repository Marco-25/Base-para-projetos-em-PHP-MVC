<?php
    //session_start();
    class Connection{
        public static $instance;
        public static function get_instance(){
            if(!isset(self::$instance) ){
                self::$instance = new PDO("mysql:host=localhost;dbname=Login_system","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        }
    }
?>