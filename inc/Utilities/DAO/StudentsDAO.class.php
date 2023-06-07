<?php

class StudentsDAO{
    private static $db;

    public static function init(){
        self::$db = new PDOServices("students");
    }

    public static function getAllStudents(){
        $sql = "SELECT * FROM students";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->getResultSet();
    }

    public static function getStudentByUserName( $stuUserName ){
        $sql = "SELECT * FROM students WHERE stuUserName = :stuUser";

        self::$db->query($sql);
        self::$db->bind(':stuUser', $stuUserName);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertStudents( Students $newStudent){
        $sql = "INSERT INTO students (stuId, stuName, stuAge, stuUserName, stuPassword, stuCourse, stuEmail, stuCountry) 
        VALUES (:stuId, :stuName, :stuAge, :stuUserName, :stuPassword, :stuCourse, :stuEmail, :stuCountry)";

        self::$db->query($sql);

        self::$db->bind(":stuId", $newStudent->getStudentId());
        self::$db->bind(":stuName", $newStudent->getStudentName());
        self::$db->bind(":stuAge", $newStudent->getStudentAge());
        self::$db->bind(":stuUserName", $newStudent->getStudentUserName());
        self::$db->bind(":stuPassword", $newStudent->getStudentPassword());
        self::$db->bind(":stuCourse", $newStudent->getStudentCourse());
        self::$db->bind(":stuEmail", $newStudent->getStudentEmail());
        self::$db->bind(":stuCountry", $newStudent->getStudentCountry());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }
    
    public static function updateStudentById( Students $newStudent){
        $sql = "UPDATE students SET stuName = :stuName, stuAge = :stuAge, stuUserName = :stuUserName, stuPassword = :stuPassword, stuCourse = :stuCourse, stuEmail = :stuEmail, stuCountry = :stuCountry WHERE stuId = :stuId";

        self::$db->query($sql);
        self::$db->bind(":stuId", $newStudent->getStudentId());
        self::$db->bind(":stuName", $newStudent->getStudentName());
        self::$db->bind(":stuAge", $newStudent->getStudentAge());
        self::$db->bind(":stuUserName", $newStudent->getStudentUserName());
        self::$db->bind(":stuPassword", $newStudent->getStudentPassword());
        self::$db->bind(":stuCourse", $newStudent->getStudentCourse());
        self::$db->bind(":stuEmail", $newStudent->getStudentEmail());
        self::$db->bind(":stuCountry", $newStudent->getStudentCountry());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function deleteStudentById( $stuId){
        $sql = "DELETE FROM students WHERE stuId = :stuId";

        self::$db->query($sql);
        self::$db->bind(":stuId", $stuId);

        self::$db->execute();

        return self::$db->rowCount();
    }
}
?>