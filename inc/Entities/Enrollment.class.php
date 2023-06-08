<?php

class Enrollment {

    private int $enrollmentId;
    private int $stuId;
    private int $courseId;

    public function getEnrollmentId(){
        return $this->enrollmentId;
    }

    public function setEnrollmentId(int $enrollmentId){
        $this->enrollmentId = $enrollmentId;
    }

    public function getStuId(){
        return $this->stuId;
    }

    public function setStuId(int $stuId){
        $this->stuId = $stuId;
    }

    public function getCourseId(){
        return $this->courseId;
    }

    public function setCourseId(int $courseId){
        $this->courseId = $courseId;
    }

}