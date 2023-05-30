<?php

    class HomeHeader {

        public static function homeBanner() : string {
            $htmlBanner = '
            <header>
                <section class="homeHeader">
                    <article>
                        <img src="./img/logo.png" alt="logo">
                    </article>
                    <section>
                        <a href="#">
                            Login
                        </a>
                    </section>
                </section>
            </header>
            ';
            return $htmlBanner;
        }
        
    }