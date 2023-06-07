<?php

require_once("./inc/Title.class.php");
require_once("./inc/Utilities/Home.class.php");
require_once("./inc/HomeHeader.class.php");
require_once("./inc/Footer.class.php");


echo Title::htmlTitle("Home page");
echo HomeHeader::homeBanner();
echo Home::homeMain();
echo Footer::pageFooter();
echo Footer::pageEnd();
