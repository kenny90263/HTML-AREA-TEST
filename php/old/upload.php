<?php

/**
 *  1. 單個文件上傳
 *  2. 多個文件上傳
 * 
 *  一、PHP配置文件中和上傳文件有關的選項
 * 
 *      file_uploads = on
 *      upload_max_filesize =   最大不要超過服務器的內存
 *      post_max_size
 *      upload_tem_dir =
 * 
 * 
 *  二、上傳表單需要的注意事項
 * 
 *      1. 如果有文件上傳操作，表單的提交方法必須 HTTP post
 *      2. 表單上傳需要使用 type 為 file 的表
 *      3. enctype="multipart/form-data"  只有文件上傳時才使用這個值，用來指定表單編碼的數據方式
 *         讓服務器知道我們要傳遞一個文件並帶有常規的表單信息
 *      4. 建議添加一個 MAX_FILE_SIZE 隱藏表單，值得單位也是字節
 * 
 *  三、PHP處理上傳的數據
 * 
 *      $_POST 接收非上傳的數據
 *      
 *      如果是文件上傳的數據則使用 $_FILES處理上傳的文件
 * 
 * 
 * 
 */
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name"><br><br>
    選擇檔案:<input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <!-- 君子的提示 -->
    <input type="file" name="file" />
    <input type="submit" name="submit" value="送出" />
</form>

<?php

$test =  explode(".", "test.jpg");
$test = array_pop($test);
print_r($test);

/*
$Arr = array('A', 'B', 'C', 'D');
$Str = array_pop($Arr);

print_r($Str . "<br>");
echo "<pre>";
print_r($Arr);
echo "</pre>";*/
?>

<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

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
    $randname = uniqid() . "." . $hz;

    // 將臨時位置的文件移動到指定目錄即可
    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath . $randname)) {
            echo "上傳成功";
        } else {
            echo "上傳失敗";
        }
    } else {
        echo "不是一個上傳文件";
    }
}



/*
if (!empty($_FILES)) {

    // __DIR__ 是此檔當前的路徑
    $tmpfile = $_FILES['file']['tmp_name'];
    $srcname = __DIR__ . "/uploads/" . $_FILES['file']['name'];

    // 將臨時目錄下的上傳文件拷貝到自訂的路徑
    if (move_uploaded_file($tmpfile, $srcname)) {
        echo "上傳成功";
    } else {
        echo "上傳失敗";
    }
}
*/