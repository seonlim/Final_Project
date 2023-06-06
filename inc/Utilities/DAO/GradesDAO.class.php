<?php

class GradesDAO {
    private static $db;

    // initialize database - grades table
    public static function init(){
        self::$db = new PDOServices("grades");
    }

    public static function getAllStudentsGrades(){
        $sql = "SELECT * FROM grades";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

   
}