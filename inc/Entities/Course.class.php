<?php
class Course {
    
    private int $courseId;
    private string $courseName;
    private float $courseWork_1;
    private float $courseWork_2;
    private float $midTerm;
    private float $finalExam;

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

    public function getCourseWork_1(){
        return $this->courseWork_1;
    }

    public function setCourseWork_1(float $courseWork_1){
        $this->courseWork_1 = $courseWork_1;
    }

    public function getCourseWork_2(){
        return $this->courseWork_2;
    }

    public function setCourseWork_2(float $courseWork_2){
        $this->courseWork_2 = $courseWork_2;
    }

    public function getMidTerm(){
        return $this->midTerm;
    }

    public function setMidTerm(float $midTerm){
        $this->midTerm = $midTerm;
    }
    
}