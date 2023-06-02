<?php

class LoginHandler{

    private static $login;

    static function checkLogin()   {
        // by default is false
        self::$login = false;

        // if the seession isnt started start it
        if(!isset($_SESSION)){
            session_start();
        }

        
        if(isset($_SESSION['Stulogged'])){
            
            self::$login = true;

        } else {

            session_destroy();
            
            self::$login = false;
            
            header("Location: studentLogin.php");
        }
        //return login Status
        return self::$login;
    }
}