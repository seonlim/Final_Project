<?php
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOServices.class.php");
require_once("inc/Entities/Notice.class.php");
require_once("inc/Utilities/DAO/NoticeDAO.class.php");
require_once("inc/config.inc.php");

NoticeDAO::startDb();

$noticeList = NoticeDAO::getAllNotices();
$singleNotice = NoticeDAO::getNoticeById(1);

if (!empty($_POST)) {
    $newNotice = new Notice();
    $newNotice->setTitle($_POST['title']);
    $newNotice->setContent($_POST['content']);
    $newNotice->setWriter("Teacher Name"); 
    
    NoticeDAO::insertNotice($newNotice);
    // echo Page::successMessage();
    unset($_POST);
}

echo Page::getPageHead();
echo Page::noticeTable(NoticeDAO::getAllNotices());
echo Page::newNoticeForm();
echo Page::getPageFooter();
?>
