<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/NoticeDAO.class.php");
require_once("inc/Utilities/NoticeRepository.class.php");
require_once("inc/Entities/Notice.class.php");
require_once("inc/Utilities/Page.class.php");

NoticeDAO::startDb();

echo Page::getPageHead();
echo Page::noticeTable(NoticeDAO::getAllNotices());
echo Page::getPageFooter();
?>
