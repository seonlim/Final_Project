<?php


class Page{
    public static function getPageHead(){
        $pageHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Students Table</title>
        </head>
        <body>
        ';
        return $pageHead;
    }

    public static function stuTable($studentList){
        $stuTable = '
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>UserName</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach($studentList as $student){
                $studentTable .= self::stuRow($student);
            }
            $studentTable .= '
            </tbody>
        </table>
        ';
        return $stuTable;
    }

    public static function stuRow($student){
        $stuRow = '
        <tr>
            <td>'.$student->getStudentId().'</td>
            <td>'.$student->getStudentName().'</td>
            <td>'.$student->getStudentAge().'</td>
            <td>'.$student->getStudentUserName().'</td>
            <td>'.$student->getCourse().'</td>
            <td>'.$student->getEmail().'</td>
            <td>'.$student->getCountry().'</td>
        </tr>
        ';
        return $stuRow;
    }

    public static function getPageFooter(){
        $pageFooter = '
            </body>
        </html>
        ';
        return $pageFooter;
    }
}

?>