<?php

class TeacherDAO{
    private static $db;

    public static function init(){
        self::$db = new PDOServices("teacher");
    }

    public static function getTeacherByUserName($teacherUserName){
        $sql = "SELECT * FROM teacher WHERE teacherUserName = :teacherUser";

        self::$db->query($sql);
        self::$db->bind(':teacherUser', $teacherUserName);

        self::$db->execute();

        return self::$db->singleResult();
    }
}

?>