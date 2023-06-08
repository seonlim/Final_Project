<?php

    class HomeHeader {

        public static function homeBanner($link01, $link02, $banner) {
            $htmlBanner = '
            <header>
                <section class="homeHeader">
                    <article id="headerLogo">
                        <a href="index.php">                        
                            <img src="./img/logo.jpeg" alt="logo">
                        </a>
                    </article>

                    <section>
                        '.$link01.'
                    </section>

                    <section>
                        '.$link02.'
                    </section>

                    <section>
                        '.$banner.'
                    </section>
                </section>
            </header>
            ';
            return $htmlBanner;
        }

        
    }
        
    
    