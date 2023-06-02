<?php

class StudentsRepository{
    private $studentsList = [];

    public function getStudentsList(){
        return $this->studentsLits;
    }
    public function setStudentsList($studentsList){
        $this->studentsLits = $studentsList;
    }
}
?>