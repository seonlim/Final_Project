<?php

class Notice {
    private string $noticeTitle;
    private string $description;
    private string $writeDate;
    private string $writer;

    public function getNoticeId(): int {
        return $this->noticeId;
    }

    public function setNoticeId(int $noticeId): void {
        $this->noticeId = $noticeId;
    }

    public function getNoticeTitle(): string {
        return $this->noticeTitle;
    }

    public function setNoticeTitle(string $noticeTitle): void {
        $this->noticeTitle = $noticeTitle;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getWriteDate(): string {
        return $this->writeDate;
    }

    public function setWriteDate(string $writeDate): void {
        $this->writeDate = $writeDate;
    }

    public function getWriter(): string {
        return $this->writer;
    }

    public function setWriter(string $writer): void {
        $this->writer = $writer;
    }
}
