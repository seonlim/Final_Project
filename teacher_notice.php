<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/NoticeDAO.class.php");
require_once("inc/Utilities/NoticeRepository.class.php");
require_once("inc/Entities/Notice.class.php");
require_once("inc/Utilities/Notice_Page.class.php");

NoticeDAO::startDb();


if (isset($_POST['noticeForm'])) {
    $newNotice = new Notice();
    $newNotice->setNoticeTitle($_POST['noticeTitle']);
    $newNotice->setDescription($_POST['description']);
    $newNotice->setWriteDate(date('Y-m-d'));
    $newNotice->setWriter($_POST['writer']);

    NoticeDAO::insertNotice($newNotice);
    // var_dump(NoticeDAO::getAllNotices());
    unset($_POST['noticeForm']);
}



echo Page::getPageHead();
echo Page::noticeTable(NoticeDAO::getAllNotices());
echo Page::newNoticeForm();
echo Page::getPageFooter();
?>
