<?php

class LogHandlerDAO{

    private static $teaLogin;

    public static function checkteaLogin()   {
        // by default is false
        self::$teaLogin = false;

        // if the seession isnt started start it
        if(!isset($_SESSION)){
            session_start();
        }

        
        if(isset($_SESSION['Teacherlogged'])){
            
            self::$teaLogin = true;

        } else {

            session_destroy();
            
            self::$teaLogin = false;
            
            header("Location: teacherLogin.php");
        }
        //return teaLogin Status
        return self::$teaLogin;
    }
}