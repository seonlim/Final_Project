<?php
// html just like components inside a class
class Home {

    public static function homeStart(){
        $homeStart = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Home Page</title>
            <link rel="stylesheet" href="./css/home-style.css">
        </head>
        <body>';

        return $homeStart;
    }

    public static function homeMain(){
        $main = '
            <article class="Home-image">
                
                    <blockquote class="Home-imageInfo">
                        <h1>
                            Academic Wave
                        </h1>
                        <h3>
                            Academic Wave is a comprehensive Learning Management System (LMS) designed for educational institutions. With Academic Wave, students can access their personalized schedules, view their enrolled courses, communicate with teachers via email, stay updated with important notices, and conveniently track their grades. On the other hand, teachers can efficiently manage their student roster, communicate with individual students via email, create and distribute notices, and easily assign and record grades for a streamlined educational experience.
                        </h3>
                    </blockquote>
            </article>
            ';
        return $main;
    }


    public static function homeEnd(){
        $homeEnd = '
        </body>
        </html>
        ';

        return $homeEnd;
    }

}
