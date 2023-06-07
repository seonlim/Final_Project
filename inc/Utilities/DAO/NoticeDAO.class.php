<?php

class NoticeDAO {
    private static $db;

    public static function startDb(){
        self::$db = new PDOService("notice");
    }

    public static function getAllNotices(){
        $sql = "SELECT * FROM notice";

        self::$db->query($sql);

        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getNoticeById($noticeId){
        $sql = "SELECT * FROM notice WHERE noticeId = :noticeId";

        self::$db->query($sql);
        self::$db->bind(':noticeId', $noticeId);

        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertNotice(Notice $newNotice){
        $sql = "INSERT INTO notice (noticeId,noticeTitle, description, writer) VALUES (:noticeId, :noticeTitle, :description, :writer)";

        self::$db->query($sql);

        self::$db->bind(":noticeId,", $newNotice->getNoticeId());
        self::$db->bind(":noticeTitle", $newNotice->getTitle());
        self::$db->bind(":description", $newNotice->getDescription());
        self::$db->bind(":writer", $newNotice->getWriter());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }
    
    public static function updateNoticeById(Notice $newNotice){
        $sql = "UPDATE notice SET title = :title, description = :description, writer = :writer WHERE noticeId = :noticeId";

        self::$db->query($sql);
        self::$db->bind(":noticeId", $newNotice->getNoticeId());
        self::$db->bind(":title", $newNotice->getTitle());
        self::$db->bind(":description", $newNotice->getDescription());
        self::$db->bind(":writer", $newNotice->getWriter());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function deleteNoticeById($noticeId){
        $sql = "DELETE FROM notice WHERE noticeId = :noticeId";

        self::$db->query($sql);
        self::$db->bind(":noticeId", $noticeId);

        self::$db->execute();

        return self::$db->rowCount();
    }
}
?>
