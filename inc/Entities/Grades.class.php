<?php
class Grades {
    
    private int $gradeId;
    private int $stuId;
    private int $courseId;
    private float $courseWork_1;
    private float $courseWork_2;
    private float $midTerm;
    private float $finalExam;

    public function getGradeId(){
        return $this->gradeId;
    }

    public function setGradeId($gradeId){
        $this->gradeId = $gradeId;
    }

    public function getStudentId(){
        return $this->stuId;
    }

    public function setStudentId(int $stuId){
        $this->stuId = $stuId;
    }

    public function getCourseId(){
        return $this->courseId;
    }

    public function setCourseId(int $courseId){
        $this->courseId = $courseId;
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

    public function getFinalExam(){
        return $this->finalExam;
    }

    public function setFinalExam(float $finalExam){
        $this->finalExam = $finalExam;
    }

    
}