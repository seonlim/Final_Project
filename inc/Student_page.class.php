<?php

class Student_Page{


    public static function studentHead(){
        $studentHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student Login Page</title>
            <link rel="stylesheet" href="./css/style-1.css">
        </head>
        <body>
        ';
        return $studentHead;
    }

    public static function studentLogin(){
        $studentLogin = '
        <main>
            <section class="background">
                <section class="login-button">
                    <section class="login-form">
                        <div class="buttons">
                            <p class="student">Student</p>
                            <a class="teacher" href="teacher_page.php">Teacher</a>
                        </div>
                        <section class="student-login">
                            <article>
                                <h1>Student Login</h1>
                            </article>
                            <form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                                <article>
                                    <label for="name">Your Username</label>
                                    <input type="text" name="usernameStu" id="usernameStu" placeholder="Username">
                                </article>
                                <article>
                                    <label for="password">Your Password</label>
                                    <input type="password" name="passwordStu" id="passwordStu" placeholder="Password">
                                </article>
                                <div class="submiBtn">
                                    <input class="btn" type="submit" value="Login">
                                </div>
                            </form>
                        </section>
                    </section>
                </section>
            </section>
        </main>
        ';
        return $studentLogin;
    }

    public static function studentInfo(Students $nowUser){
        $studentInfo = '
        <section id="studentInfo">
            <table>
                <thead>
                    <tr>
                        <th> Student Name :</th>
                        <th> Age :</th>
                        <th> Country :</th>
                        <th> Username :</th>
                        <th> Email :</th>
                        <th> Course :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'.$nowUser->getStudentName().'</td>
                        <td>'.$nowUser->getStudentAge().'</td>
                        <td>'.$nowUser->getStudentCountry().'</td>
                        <td>'.$nowUser->getStudentUserName().'</td>
                        <td>'.$nowUser->getStudentEmail().'</td>
                        <td>'.$nowUser->getStudentCourse().'</td>
                    </tr>
                <tbody>
            </table>

        </section>

        ';
        return $studentInfo;

    }

    public static function studentFooter(){
        $studentFooter = '
            </body>
        </html>
        ';
        return $studentFooter;
    }
}
?>