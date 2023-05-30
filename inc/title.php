<?php

    class Title {

        public static function htmlTitle( string $title ) : string{
            $htmlHeader = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
                <link rel="stylesheet" href="./css/headerfooter.css">
            </head>
            <body>
            ';
            return $htmlHeader;
        }

    }