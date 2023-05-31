<?php

require_once("./inc/title.php");
require_once("./inc/Utilities/Home.class.php");
require_once("./inc/userheader.php");
require_once("./inc/footer.php");

echo Title::htmlTitle("Home page");
echo UserHeader::userBanner("Lim");
echo Home::homeMain();
echo Footer::pageFooter();
echo Footer::pageEnd();
