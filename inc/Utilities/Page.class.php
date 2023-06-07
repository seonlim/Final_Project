<?php


class Page{
    public static function getPageHead(){
        $pageHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Notice Table</title>
        </head>
        <body>
        ';
        return $pageHead;
    }

    public static function noticeTable($noticeList){
        $noticeTable = '
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Writer</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach($noticeList as $notice){
                $noticeTable .= self::noticeRow($notice);
            }
            $noticeTable .= '
            </tbody>
        </table>
        ';
        return $noticeTable;
    }

    public static function noticeRow($notice){
        $noticeRow = '
        <tr>
            <td>'.$notice->getNoticeTitle().'</td>
            <td>'.$notice->getNotiDescription().'</td>
            <td>'.$notice->getNoticeWriteDate().'</td>
            <td>'.$notice->getNoticeWriter().'</td>

        </tr>
        ';
        return $noticeRow;
    }

    public static function addNotice(Notice $newNotice){
        $sql = "INSERT INTO notice (noticeId, noticeTitle, description, writer) 
        VALUES (:noticeId, :noticeTitle, :description, :writer)";

        self::$db->query($sql);

        self::$db->bind(":noticeId", $newNotice->getNoticeId());
        self::$db->bind(":noticeTitle", $newNotice->getTitle());
        self::$db->bind(":description", $newNotice->getDescription());
        self::$db->bind(":writer", $newNotice->getWriter());

        self::$db->execute();

    }

    public static function getPageFooter(){
        $pageFooter = '
            </body>
        </html>
        ';
        return $pageFooter;
    }
}

?>