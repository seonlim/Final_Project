<?php
class Course {
    
    private int $courseId;
    private string $courseName;

    public function getCourseId(){
        return $this->courseId;
    }

    public function setCourseId(int $courseId){
        $this->courseId = $courseId;
    }

    public function getCourseName(){
        return $this->courseName;
    }

    public function setCourseName(string $courseName){
        $this->courseName = $courseName;
    }

   
}