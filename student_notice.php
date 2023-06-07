<?php
require_once("inc/Entities/Notice.class.php");
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/DAO/NoticeDAO.class.php");
require_once("inc/config.inc.php");
require_once("inc/Utilities/NoticeRepository.class.php");

date_default_timezone_set("America/Vancouver");

NoticeDAO::startDb();

$noticeList = NoticeDAO::getAllNotices();
$singleNotice = NoticeDAO::getNoticeById(1);

if (!empty($_POST)) {
    if (!empty($_POST["noticeForm"])) {
        $singleNotice->setNoticeTitle($_POST['noticeTitle']);
        $singleNotice->setDescription($_POST['description']);
        $singleNotice->setWriteDate(date('Y-m-d'));
        $singleNotice->setWriter($_POST['writer']);

        NoticeDAO::updateNoticeById($singleNotice);
    } else {
        $newNotice = new Notice();
        $newNotice->setNoticeTitle($_POST['noticeTitle']);
        $newNotice->setDescription($_POST['description']);
        $newNotice->setWriteDate(date('Y-m-d'));
        $newNotice->setWriter($_POST['writer']);

        NoticeDAO::insertNotice($newNotice);
        // echo Page::successNotice();
        unset($_POST);
    }
}

echo Page::getPageHead();
echo Page::noticeTable(NoticeDAO::getAllNotices());
echo Page::newNoticeForm();
echo Page::getPageFooter();
?>
