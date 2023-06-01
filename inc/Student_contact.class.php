<?php

class Student_Contact{

    public static function studentHead(){
        $studentHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student Contact</title>
            <link rel="stylesheet" href="./css/contact.css">
        </head>
        <body>
        ';
        return $studentHead;
    }

    public static function studentContact(){
        $studentLogin = '
        <main>
            <section class="student-contact">
                <div class="form-contact">
                    <form action="get">
                        <label for="fname">Student Name</label>
                        <input type="text" id="sname" name="studentname" placeholder="Your name">
                    
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email">
                    
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Message" required></textarea>
                    
                        <input type="submit" value="Submit">
                    </form>
                </div>
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