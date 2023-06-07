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
            <link rel="stylesheet" href="./css/style.css">
            <title>Students Table</title>
        </head>
        <body>
            <main>
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
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach($studentList as $student){
                $stuTable .= self::stuRow($student);
            }
            $stuTable .= '
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
            <td>'.$student->getStudentCourse().'</td>
            <td>'.$student->getStudentEmail().'</td>
            <td>'.$student->getStudentCountry().'</td>
            <td><a href="?editForm=edit&stuId='.$student->getStudentUserName().'">Edit</a></td>
        </tr>
        ';
        return $stuRow;
    }

    public static function newStudentForm(){
        $newStudentForm = '
        <section class="forms">
            <form class="studentForm" method="POST" action="'.$_SERVER["PHP_SELF"].'">
                <article class="title">
                    <h2>Add a New Student</h2>
                </article>
                <section>
                    <section class="inputs">
                        <article>
                        <label for="stuId">ID</label>
                        <input type="text" name="stuId" placeholder="Student ID">
                        </article>
                        <article>
                            <label for="stuName">Name</label>
                            <input type="text" name="stuName" placeholder="Student Name">
                        </article>
                        <article>
                            <label for="stuAge">Age</label>
                            <input type="text" name="stuAge" placeholder="Student Age">
                        </article>
                        <article>
                            <label for="stuUserName">UserName</label>
                            <input type="text" name="stuUserName" placeholder="Student User Name">
                        </article>
                    </section>
                    <section class="inputs">
                        <article>
                            <label for="stuPassword">Password</label>
                            <input type="text" name="stuPassword" placeholder="Student Password">
                        </article>
                        <article>
                            <label for="stuCourse">Course</label>
                            <input type="text" name="stuCourse" placeholder="Student Course">
                        </article>
                        <article>
                            <label for="stuEmail">Email</label>
                            <input type="email" name="stuEmail" placeholder="Student Email">
                        </article>
                        <article>
                            <label for="stuCountry">Country</label>
                            <input type="text" name="stuCountry" placeholder="Student Country">
                        </article>
                    </section>
                </section>
                <section>
                    <input type="submit" value="Create a new Student" class="btnSubmit">
                </section>
            </form>
            <section class="form-contact">
                <article class="title">
                    <h2>Talk to a Student</h2>
                </article>
                <form>
                    <aside>
                        <label for="fname">Teacher Name</label>
                        <input type="text" id="tname" name="teachername" placeholder="Your name">
                    </aside>
                    <aside>
                        <label for="stuUserName">Student Username</label>
                        <input type="text" id="stuUser" name="stuUser" placeholder="Username">
                    </aside>
                    <aside>
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Message" required></textarea>
                    </aside>
                    <input type="submit" value="Submit" class="btnContact">
                </form>
            </section>
        </section>
        ';
        return $newStudentForm;
    }

    public static function editStudentForm($currentUser){
        $newStudentForm = '
        <section class="forms">
            <form class="studentForm" method="POST" action="'.$_SERVER["PHP_SELF"].'">
                <article class="title">
                    <h2>Update a Student</h2>
                </article>
                <section>
                    <section class="inputs">
                        <article>
                        <label for="stuId">ID</label>
                        <input type="text" name="stuId" placeholder="Student ID" value="'.$currentUser->getStudentId().'">
                        </article>
                        <article>
                            <label for="stuName">Name</label>
                            <input type="text" name="stuName" placeholder="Student Name"  value="'.$currentUser->getStudentName().'">
                        </article>
                        <article>
                            <label for="stuAge">Age</label>
                            <input type="text" name="stuAge" placeholder="Student Age" value="'.$currentUser->getStudentAge().'">
                        </article>
                        <article>
                            <label for="stuUserName">UserName</label>
                            <input type="text" name="stuUserName" placeholder="Student User Name" value="'.$currentUser->getStudentUserName().'">
                        </article>
                    </section>
                    <section class="inputs">
                        <article>
                            <label for="stuPassword">Password</label>
                            <input type="password" name="stuPassword" placeholder="Student Password">
                        </article>
                        <article>
                            <label for="stuCourse">Course</label>
                            <input type="text" name="stuCourse" placeholder="Student Course" value="'.$currentUser->getStudentCourse().'">
                        </article>
                        <article>
                            <label for="stuEmail">Email</label>
                            <input type="email" name="stuEmail" placeholder="Student Email" value="'.$currentUser->getStudentEmail().'">
                        </article>
                        <article>
                            <label for="stuCountry">Country</label>
                            <input type="text" name="stuCountry" placeholder="Student Country" value="'.$currentUser->getStudentCountry().'">
                        </article>
                    </section>
                </section>
                <input type="hidden" name="editForm" value="editStudent">
                <section>
                    <input type="submit" value="Update Student" class="btnSubmit">
                </section>
            </form>
        </section>
        ';
        return $newStudentForm;
    }

    public static function successMessage() {
        $message = '
        <section class="message" role="alert">
            New Student included successfully!
        </section>
        ';
        return $message;
    }

    public static function getPageFooter(){
        $pageFooter = '
        </main>
            </body>
        </html>
        ';
        return $pageFooter;
    }
}

?>