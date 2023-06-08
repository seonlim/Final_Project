<?php

class GradesRepository{
    private $gradesList = [];

    public function getGradesList(){
        return $this->gradesList;
    }

    public function setGradesList($gradesList){
        $this->gradesList = $gradesList;
    }
}

?>