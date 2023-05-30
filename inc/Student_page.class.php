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
        return $studentLogin;
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