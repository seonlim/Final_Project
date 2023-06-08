<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/NoticeDAO.class.php");
require_once("inc/Utilities/NoticeRepository.class.php");
require_once("inc/Entities/Notice.class.php");
require_once("inc/Utilities/Notice_Page.class.php");

NoticeDAO::startDb();

echo Notice_Page::getPageHead();
echo Notice_Page::noticeTable(NoticeDAO::getAllNotices());
echo Notice_Page::getPageFooter();
?>
