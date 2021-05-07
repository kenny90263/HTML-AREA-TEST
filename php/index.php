<?php

$isbn = 9789865727659;


// 建立CURL連線
$ch = curl_init();

// 設定擷取的URL網址
curl_setopt($ch, CURLOPT_URL, "https://search.books.com.tw/redirect/move/key/" . $isbn . "/area/mid/item/0010774239/page/1/idx/1/cat/001/pdf/1");
curl_setopt($ch, CURLOPT_HEADER, false);
//將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// 執行
$temp = curl_exec($ch);

// 關閉CURL連線
curl_close($ch);

echo $temp;






//Ref: http://php.net/manual/en/ref.curl.php#93163
// function get_final_url($url, $cookie = "", $timeout = 5) {
//     //$url = str_replace("&amp;", "&", urldecode(trim($url)));
//     //保留餅乾資訊
//     if ($cookie == "") {
//         $cookie = tempnam(sys_get_temp_dir(), "mxp_");
//     }
//     //假一下瀏覽器請求
//     $user_agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
//     //CURL 初始化
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//     curl_setopt($ch, CURLOPT_ENCODING, "");
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
//     curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
//     curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
//     $content = curl_exec($ch);
//     $response = curl_getinfo($ch);
//     curl_close($ch);
//     //設定根層級的假請求
//     ini_set("user_agent", $user_agent);
//     //請求標頭
//     $headers = get_headers($response['url']);
//     //判斷是否有 301, 302 轉址
//     if ($response['http_code'] == 301 || $response['http_code'] == 302) {
//         $location = "";
//         foreach ($headers as $value) {
//             if (substr(strtolower($value), 0, 9) == "location:") {
//                 //取得轉址的連結，遞迴請求
//                 return get_final_url(trim(substr($value, 9, strlen($value))), $cookie);
//             }
//         }
//     }
//     $filename = "";
//     foreach ($headers as $value) {
//         if (substr(strtolower($value), 0, 20) == "content-disposition:") {
//             //如果有檔案名稱資訊，就存下來等等下載用
//             $filename = urldecode(trim(substr($value, 20, strlen($value))));
//         }
//     }
//     //如果不是使用 301, 302 轉址，可能網頁內容會有 JavaScript 或提示轉址資訊，可以在這裡分析
//     // if (preg_match("/window.location.replace('(.*)')/i", $content, $value) ||
//     //  preg_match("/window.location="(.*)"/i", $content, $value)
//     // ) {
//     //  return get_final_url($value[1]);
//     // }
//     //把最後的連結檔案下載回去
//     $filename = explode("''", $filename);
//     $fp = fopen($filename[1], 'w');
//     $ch = curl_init($response['url']);
//     curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
//     curl_setopt($ch, CURLOPT_FILE, $fp);
//     $data = curl_exec($ch);
//     curl_close($ch);
//     fclose($fp);
//     return array("filename" => $filename[1], "url" => $response['url']);
// }
// print_r(get_final_url('https://search.books.com.tw/redirect/move/key/9789865727659/area/mid/item/0010774239/page/1/idx/1/cat/001/pdf/1'));

// $map = htmlspecialchars(file_get_contents('sitemap.xml'));
// // echo "<pre>";
// // print_r($map);
// // echo "</pre>";
// echo '<pre>';
// preg_match_all('#<loc>(.*?)</loc>#', $map, $parts);
// // print_r($parts[1]);
// echo '</pre>';

// foreach($parts[1] as $part){
//     if(substr($part, -1) != '/'){
//         echo $part."<br>";
//     };
// }

// echo "this is index.php";
// phpinfo();
// $a =1 ;
// $a .= 2;

// echo $a;
// //phpinfo();

// $url = 'http://books.google.com/books/content?id=ST-ZDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api';
// $image_data = file_get_contents($url);
// $image = imagecreatefromstring($image_data);
// imagejpeg($image, 'google-chart.jpg');