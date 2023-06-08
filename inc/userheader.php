<?php

    class UserHeader {

        public static function userBanner( string $username ) : string {
            $htmlBanner = '
            <header>
                <section class="userHeader">
                    <article>
                        <img src="./img/logo.jpeg" alt="logo">
                    </article>
                    <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#logout">Log out</a></li>
                    </ul>
                    <a href="#">
                        '.$username.'
                    </a>
                </section>
            </header>
            ';
            return $htmlBanner;
        }
        
    }