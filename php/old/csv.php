<?php


//設定系統環境，確保輸出執行環境無礙
set_time_limit(0);
ini_set('memory_limit', '256M');
date_default_timezone_set("Asia/Taipei");

//開始準備一組匯出陣列
$csv_arr = array();

//先放置 CSV 檔案的標頭資料
$csv_arr[] = array('得票數', '系統編號', '報名人', '身分證字號', '信箱', '聯絡電話', '聯絡手機', '聯絡地址', '性別', '年齡', '作品名稱', '作品分類', '拍攝日期', '拍攝地點', '拍攝相機', '拍攝鏡頭', '相片原始檔案', '投稿日期', '審查狀態');
//設定檔案輸出名稱
$filename = $_POST['csv'] . date("Y-m-d-H-i-s") . ".csv";
//設定瀏覽器讀取此份資料為不快取，與解讀行為是下載 CSV 檔案
header('Pragma: no-cache');
header('Expires: 0');
header('Content-Disposition: attachment; filename="' . $filename . '";');
header('Content-Type: text/csv; charset=UTF-8');



// header('Content-Type: text/csv; charset=UTF-8');
// header('vary: Accept-Encoding,User-Agent');

for ($i = 0; $i < 1; $i++) {
    $csv_arr[1] = array(
        //開始根據資料變數組裝後面的陣列資料
        0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '', 11, 12, 13, 14, 15, 16, 17, '妳好'
    );
}

// echo "<pre>";
// print_r($csv_arr);
// echo "</pre>";


//確保輸出內容符合 CSV 格式，定義下列方法來處理
function csvstr(array $fields): string
{
    $f = fopen('php://memory', 'r+');
    if (fputcsv($f, $fields) === false) {
        return false;
    }
    rewind($f);
    $csv_line = stream_get_contents($f);
    return rtrim($csv_line);
}


//正式循環輸出陣列內容
for ($j = 0; $j < count($csv_arr); $j++) {
    if ($j == 0) {
        //檔案標頭如果沒補上 UTF-8 BOM 資訊的話，Excel 會解讀錯誤，偏向輸出給程式觀看的檔案
        echo "\xEF\xBB\xBF";
    }
    //輸出符合規範的 CSV 字串以及斷行
    echo csvstr($csv_arr[$j]) . PHP_EOL;
}
    //跑完這份檔案就會是下載一份完整的 CSV 檔案囉！
