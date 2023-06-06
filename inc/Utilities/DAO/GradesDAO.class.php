<?php

class GradesDAO {
    private static $db;

    // initialize database - grades table
    public static function init(){
        self::$db = new PDOServices("Grades");
    }

    public static function getAllStudentsGrades(){
        $sql = "SELECT * FROM grades";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getStudentGrades( $stuId ){
        $sql = "SELECT * FROM grades WHERE stuId = :stuId";

        self::$db->query($sql);
        self::$db->bind(':stuId', $stuId);

        self::$db->execute();

        return self::$db->getResultSet();
    }

    
   
}