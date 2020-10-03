<?php

/**
 *  上傳檔案後創建獨一無二的檔名 
 *  
 *  檢查是否有檔案重複名字
 * 
 */



$FileName = substr(md5(microtime()), -8);

print_r($FileName);
?>

<form action="" method="post" enctype="multipart/form-data">
    選擇檔案:
    <input type="file" name="file" />
    <input type="submit" name="submit" value="送出" />
</form>


<?php


if (!empty($_FILES["file"])) {
    // step 1 使用 $_FILES["error"] 檢查錯誤
    if ($_FILES["file"]["error"] > 0) {

        switch ($_FILES["file"]["error"]) {
            case 1:
                echo "上傳文件超過了 php.ini 中 upload_max_filesize 限制";
                break;
            case 2:
                echo "上傳文件的大小超過了 HTML 表單中 MAX_FILE_SIZE 選項指定的值";
                break;
            case 3:
                echo "只有部分被上傳";
                break;
            case 4:
                echo "沒有文件上傳";
                break;
            default:
                echo "未知的錯誤";
        }
        exit;
    }

    // step 2 使用 $_FILES["type"] 或是文件的擴展名 限制類型 MIME image/gif image/png

    // 取出文件的後綴以此判斷類型
    $hz = explode(".", basename($_FILES['file']['name']));
    $hz = array_pop($hz);
    // 允許上傳的檔案類型
    $allowtype = array("png", "jpg", "jpeg");

    if (!in_array($hz, $allowtype)) {
        echo "這是不允許的上傳類型";
        exit;
    }

    // step 3 使用 $_FILES["size"] 限制大小 單位字節  2M = 2000000
    $maxsize = 1500000;
    if ($_FILES["file"]["size"] > $maxsize) {
        echo "上傳的文件太大，不能超過{$maxsize}字節";
        exit;
    }

    // step 4 上傳後的文件名一定要設置
    $filepath = __DIR__ . "/uploads/";
    $randname = substr(md5(microtime()), -8) . "." . $hz;

    // 將臨時位置的文件移動到指定目錄即可
    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {

        if (file_exists($filepath . $randname)) {
            $randname = substr(md5(microtime()), -5) . "." . $hz;
        }
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath . $randname)) {
            echo "上傳成功";
        } else {
            echo "上傳失敗";
        }
    } else {
        echo "不是一個上傳文件";
    }
}




?>