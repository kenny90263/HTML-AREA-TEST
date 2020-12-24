<?php


// compare which date is bigger
$TodayDate = date("Ymd");
$Deadline = "2020-12-20";

if (strtotime($TodayDate) > strtotime($Deadline))
    echo "還沒有過期";
else
    echo "過期了";


// set the system timezone
//date_default_timezone_set("Asia/Taipei");
//echo date('Y-m-d');
//phpinfo(8);
//header("Content-type:application/pdf");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename=1090730.pdf");
// The PDF source is in original.pdf
//readfile("uploads/1090730.pdf");
