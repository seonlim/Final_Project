<?php

class Notice {
    private int $noticeId;
    private string $noticeTitle;
    private string $description;
    private string $writeDate;
    private string $writer;

    public function getNoticeId(){
        return $this->noticeId;
    }
    public function setNoticeId(int $noticeId){
        $this->noticeId = $noticeId;
    }

    public function getNoticeTitle(){
        return $this->noticeTitle;
    }

    public function setNoticeTitle(string $noticeTitle){
        $this->noticeTitle = $noticeTitle;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }

    public function getWriteDate(){
        return $this->writeDate;
    }

    public function setWriteDate(string $writeDate){
        $this->writeDate = $writeDate;
    }

    public function getWriter(){
        return $this->writer;
    }

    public function setWriter(string $writer){
        $this->writer = $writer;
    }

}
