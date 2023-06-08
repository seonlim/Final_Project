<?php


class Notice_Page{
    public static function getPageHead(){
        $pageHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Notice Page</title>
            <link rel="stylesheet" href="./css/notice.css">
        </head>
        <body>
        ';
        return $pageHead;
    }

    public static function noticeTable($noticeList){
        $noticeTable = '
        <main>
        <section class="notice-section">
            <section class="notice-table">
                <article class="notice-title">
                    <h2>Notice</h2>
                </article>
                <table>
                    <tbody>
                    ';
                    foreach($noticeList as $notice){
                        $noticeTable .= self::noticeRow($notice);
                    }
                    $noticeTable .= '
                    </tbody>
                </table>
            </section>
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

    public static function newNoticeForm(){
        $newNoticeForm = '
        <section class="notice-add">
            <article class="notice-title">
                <h2>Add a New Notice</h2>
            </article>
            <form class="newNoticeForm" method="POST" action="'.$_SERVER["PHP_SELF"].'">
                <section>
                    <section class="notice-inputs">
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
    </section>
    </main>
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