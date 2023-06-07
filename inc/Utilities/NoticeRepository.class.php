<?php

class NoticeRepository{
    private $noticeList = [];

    public function getNoticeList(){
        return $this->noticeList;
    }
    public function setNoticeList($noticeList){
        $this->noticeList = $noticeList;
    }
}
?>