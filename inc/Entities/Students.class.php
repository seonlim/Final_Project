<?php

class Students{
    private int $stuId;
    private string $stuName;
    private int $stuAge;
    private string $stuUserName;
    private string $stuPassword;
    private string $stuCourse;
    private string $stuEmail;
    private string $stuCountry;
    
    public function getStudentId(){
        return $this->studentId;
    }
    public function setStudentId(int $studentId){
        $this->studentId = $studentId;
    }
    public function getStudentName(){
        return $this->studentName;
    }
    public function setStudentName(string $studentName){
        $this->studentName = $studentName;
    }
    public function getStudentAge(){
        return $this->studentAge;
    }
    public function setStudentAge(int $studentAge){
        $this->studentAge = $studentAge;
    }
    public function getStudentUserName(){
        return $this->studentUserName;
    }
    public function setStudentUserName(string $studentUserName){
        $this->studentUserName = $studentUserName;
    }
    public function getStudentPassword(){
        return $this->studentPassword;
    }
    public function setStudentPassword(string $studentPassword){
        $this->studentPassword = $studentPassword;
    }
    public function getStudentCourse(){
        return $this->studentCourse;
    }
    public function setStudentCourse(string $studentCourse){
        $this->studentCourse = $studentCourse;
    }
    public function getStudentEmail(){
        return $this->studentEmail;
    }
    public function setStudentEmail(string $studentEmail){
        $this->studentEmail = $studentEmail;
    }
    public function getStudentCountry(){
        return $this->studentCountry;
    }
    public function setStudentCountry(string $studentCountry){
        $this->studentCountry = $studentCountry;
    }
}
?>