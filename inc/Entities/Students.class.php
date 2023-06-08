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
        return $this->stuId;
    }
    public function setStudentId(int $stuId){
        $this->stuId = $stuId;
    }
    public function getStudentName(){
        return $this->stuName;
    }
    public function setStudentName(string $stuName){
        $this->stuName = $stuName;
    }
    public function getStudentAge(){
        return $this->stuAge;
    }
    public function setStudentAge(int $stuAge){
        $this->stuAge = $stuAge;
    }
    public function getStudentUserName(){
        return $this->stuUserName;
    }
    public function setStudentUserName(string $stuUserName){
        $this->stuUserName = $stuUserName;
    }
    public function getStudentPassword(){
        return $this->stuPassword;
    }
    public function setStudentPassword(string $stuPassword){
        $this->stuPassword = $stuPassword;
    }
    public function getStudentCourse(){
        return $this->stuCourse;
    }
    public function setStudentCourse(string $stuCourse){
        $this->stuCourse = $stuCourse;
    }
    public function getStudentEmail(){
        return $this->stuEmail;
    }
    public function setStudentEmail(string $stuEmail){
        $this->stuEmail = $stuEmail;
    }
    public function getStudentCountry(){
        return $this->stuCountry;
    }
    public function setStudentCountry(string $stuCountry){
        $this->stuCountry = $stuCountry;
    }


    function checkPassword(string $passwordCheck): bool {
        $equal = false;
        // Return a boolean (true or false) to check if the password given is correct for the now user
        if (password_verify($passwordCheck,$this->getStudentPassword()) ) {
            $equal = true;
        } else {
            $equal = false;
        }

        return $equal;
    }
}
