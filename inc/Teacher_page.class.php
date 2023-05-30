<?php

class Teacher_Page{


    public static function teacherHead(){
        $teacherHead = '
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
        return $teacherHead;
    }

    public static function teacherLogin(){
        $teacherLogin = '
        <main>
            <section class="background">
                <section class="login-button">
                    <section class="login-form">
                        <div class="buttons">
                            <a class="student" href="student_page.php">Student</a>
                            <p class="teacher">Teacher</p>
                        </div>
                        <section class="student-login">
                            <article>
                                <h1>Teacher Login</h1>
                            </article>
                            <form action="get">
                                <article>
                                    <label for="name">Your Username</label>
                                    <input type="text" name="username" placeholder="Username">
                                </article>
                                <article>
                                    <label for="password">Your Password</label>
                                    <input type="password" name="password" placeholder="Password">
                                </article>
                                <div class="submiBtn">
                                    <button class="btn" type="submit">Login</button>
                                </div>
                            </form>
                        </section>
                    </section>
                </section>
            </section>
        </main>
        ';
        return $teacherLogin;
    }

    public static function teacherFooter(){
        $teacherFooter = '
            </body>
        </html>
        ';
        return $teacherFooter;
    }
}
?>