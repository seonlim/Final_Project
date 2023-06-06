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
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Writer</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach($noticeTable as $notice){
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
            <td>'.$notice->getNoticeId().'</td>
            <td>'.$notice->getNoticeTitle().'</td>
            <td>'.$notice->getNotiContent().'</td>
            <td>'.$notice->getNoticeWriteDate().'</td>
            <td>'.$notice->getNoticeWriter().'</td>

        </tr>
        ';
        return $noticeRow;
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