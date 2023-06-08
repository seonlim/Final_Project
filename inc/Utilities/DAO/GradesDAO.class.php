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

        return self::$db->getResultSet();
    }

    public static function insertGrades( Grades $newGrades){
        $sql = "INSERT INTO grades (stuId, courseId, term, courseWork_1, courseWork_2, midTerm, finalExam) VALUES (:stuId, :courseId, :term, :courseWork_1, :courseWork_2, :midTerm, :finalExam)";

        self::$db->query($sql);

        self::$db->bind(":stuId",$newGrades->getStudentId());
        self::$db->bind(":courseId",$newGrades->getCourseId());
        self::$db->bind(":term",$newGrades->getTerm());
        self::$db->bind(":courseWork_1",$newGrades->getCourseWork_1());
        self::$db->bind(":courseWork_2",$newGrades->getCourseWork_2());
        self::$db->bind(":midTerm",$newGrades->getMidTerm());
        self::$db->bind(":finalExam",$newGrades->getFinalExam());


        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getStudentGrades( $stuId ){
        $sql = "SELECT * FROM grades WHERE stuId = :stuId";

        self::$db->query($sql);
        self::$db->bind(':stuId', $stuId);

        self::$db->execute();

        return self::$db->getResultSet();
    }

}