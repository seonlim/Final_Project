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
            <title>Notice Page</title>
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
            <td>'.$notice->getDescription().'</td>
            <td>'.$notice->getWriteDate().'</td>
            <td>'.$notice->getWriter().'</td>

        </tr>
        ';
        return $noticeRow;
    }

    public static function addNotice(Notice $newNotice){
        $sql = "INSERT INTO notice (noticeId, noticeTitle, description, writer, writeDate) 
        VALUES (:noticeId, :noticeTitle, :description, :writer, :writeDate)";
    
        self::$db->query($sql);
    
        self::$db->bind(":noticeId", $newNotice->getNoticeId());
        self::$db->bind(":noticeTitle", $newNotice->getNoticeTitle());
        self::$db->bind(":description", $newNotice->getDescription());
        self::$db->bind(":writeDate", $newNotice->getWriteDate());
        self::$db->bind(":writer", $newNotice->getWriter());
    
        self::$db->execute();
    }
    
    

    public static function newNoticeForm(){
        $newNoticeForm = '
        <section class="noticeSection">
            <form class="noticeForm" method="POST" action="'.$_SERVER["PHP_SELF"].'">
                <article class="title">
                    <h2>Add a New Notice</h2>
                </article>
                <section>
                    <section class="inputs">
                        <article>
                            <label for="noticeTitle">Title</label>
                            <input type="text" name="noticeTitle" placeholder="Title">
                        </article>
                        <article>
                            <label for="description">Description</label>
                            <input type="text" name="description" placeholder="Description">
                        </article>
                        <article>
                            <label for="writer">Writer</label>
                            <input type="text" name="writer" placeholder="Writer">
                        </article>
                    </section>
                </section>
                <section>
                    <input type="submit" name="noticeForm" value="Create a new Notice" class="btnNotice">
                </section>
            </form>
        </section>
        ';
        return $newNoticeForm;
    } 

    public static function successNotice() {
        $message = '
        <section class="notice" role="alert">
            New Notice registered successfully!
        </section>
        ';
        return $message;
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