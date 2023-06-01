<?php

class Teacher_Contact{


    public static function teacherHead(){
        $teacherHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Teacher Contact</title>
            <link rel="stylesheet" href="./css/contact.css">
        </head>
        <body>
        ';
        return $teacherHead;
    }

    public static function teacherContact(){
        $teacherLogin = '
        <main>
            <section class="teacher-contact">
                <div class="form-contact">
                    <form action="get">
                        <label for="fname">Teacher Name</label>
                        <input type="text" id="tname" name="teachername" placeholder="Your name">
                    
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