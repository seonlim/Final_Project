<?php

require_once("./inc/title.php");
require_once("./inc/Utilities/Home.class.php");
require_once("./inc/homeheader.php");
require_once("./inc/footer.php");

echo Title::htmlTitle("Home page");
echo HomeHeader::homeBanner();
echo Home::homeMain();
echo Footer::pageFooter();
echo Footer::pageEnd();
