<?php

class StudentsDAO{
    private static $db;

    public static function startDb(){
        self::$db = new PDOService("students");
    }

    public static function getAllStudents(){
        $sql = "SELECT * FROM students";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getStudentByUserName( $stuUserName ){
        $sql = "SELECT * FROM students WHERE stuUserName = :stuUser";

        self::$db->query($sql);
        self::$db->bind(':stuUser', $stuUserName);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertStudents( Students $newStudent){
        $sql = "INSERT INTO students (stuName, stuAgem, stuUserName, stuPassword, stuCourse, stuEmail, stuCountry) VALUES (:stuUserName, :stuName)";
    }
}
?>