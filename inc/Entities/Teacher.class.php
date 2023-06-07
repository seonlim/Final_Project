<?php

class Teacher {
    private int $teacherId;
    private string $teacherName;
    private string $teacherUserName;
    private string $teacherPassword;
    private int $courseId;
    private string $teacherEmail;
    private string $teacherPhoneNumber;

    public function getTeacherId(){
        return $this->teacherId;
    }
    public function setTeacherId(int $teacherId){
        $this->teacherId = $teacherId;
    }

    public function getTeacherName(){
        return $this->teacherName;
    }
    public function setTeacherName(string $teacherName){
        $this->teacherName = $teacherName;
    }

    public function getTeacherUserName(){
        return $this->teacherUserName;
    }
    public function setTeacherUserName(string $teacherUserName){
        $this->teacherUserName = $teacherUserName;
    }

    public function getTeacherPassword(){
        return $this->teacherPassword;
    }
    public function setTeacherPassword(string $teacherPassword){
        $this->teacherPassword = $teacherPassword;
    }

    public function getCourseId(){
        return $this->courseId;
    }
    public function setCourseId(int $courseId){
        $this->courseId = $courseId;
    }
    
    public function getTeacherEmail(){
        return $this->teacherEmail;
    }
    public function setTeacherEmail(string $teacherEmail){
        $this->teacherEmail = $teacherEmail;
    }
    
    public function getTeacherPhoneNumber(){
        return $this->teacherPhoneNumber;
    }
    public function setTeacherPhoneNumber(string $teacherPhoneNumber){
        $this->teacherPhoneNumber = $teacherPhoneNumber;
    }   

    function checkteaLogin(string $passwordCheck): bool {
        // Return a boolean (true or false) to check if the password given is correct for the now user
        if ($passwordCheck === $this->getTeacherPassword()){
            return true;
        } else {
            return false;
        }
    }
}
?>