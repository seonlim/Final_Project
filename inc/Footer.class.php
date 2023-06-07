<?php

    class Footer {
        
        public static function pageFooter() : string {
            $htmlFooter = '
            <footer>
                <p>
                    Copyright &copy; 2030 Academic Wave
                </p>
                <a href="#">
                    BACK TO TOP
                </a>
            </footer>
            ';
            return $htmlFooter;
        }

        public static function pageEnd() : string {
            $htmlPageEnd = '
                </body>
            </html>
            ';
            return $htmlPageEnd;
        }
        
    }