<?php

require_once("./inc/title.php");
echo Title::htmlTitle("Home page");

// require_once("./inc/homeheader.php");
// echo HomeHeader::homeBanner();
require_once("./inc/userheader.php");
echo UserHeader::userBanner("Lim");

require_once("./inc/footer.php");
echo Footer::pageFooter();
echo Footer::pageEnd();