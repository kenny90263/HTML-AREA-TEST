<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).on('click', '#add_files', function() {
        var html = '<input type="file" name="file[]"><br>';
        $('#upload-photos').append(html);
    });
</script>
<?php

/**
 *  多個文件上傳
 * 
 * 
 * 
 */
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name"><br><br>
    選擇檔案:<br><input type="hidden" name="MAX_FILE_SIZE" value="100000000"> <!-- 君子的提示 -->
    <div id="upload-photos">
        <input type="file" name="file[]"><br>

    </div>
    <br><br><button type="button" id="add_files">增加上傳</button><br><br>
    <br>
    <input type="submit" name="submit" value="送出" />
</form>


<?php

$test = array("a", "b", "c");
if (in_array("c", $test)) {
    echo "c有在數組裡面";
} else {
    echo "c沒有在數組裡面";
}

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$num = count($_FILES['file']['name']); // 計算總共有多少個上傳的檔案
echo $num;

for ($i = 0; $i < $num; $i++) {

    if (!empty($_FILES["file"])) {
        // step 1 使用 $_FILES["error"] 檢查錯誤
        if ($_FILES["file"]["error"][$i] > 0) {

            switch ($_FILES["file"]["error"][$i]) {
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
            // 上傳多個檔案 如果有一個檔案不合法，那依然可以繼續上傳後續的檔案
            continue;
        }

        // step 2 使用 $_FILES["type"] 或是文件的擴展名 限制類型 MIME image/gif image/png

        // 取出文件的後綴以此判斷類型
        $hz = explode(".", basename($_FILES['file']['name'][$i]));
        $hz = array_pop($hz);
        // 允許上傳的檔案類型
        $allowtype = array("png", "jpg", "jpeg");

        if (!in_array($hz, $allowtype)) {
            echo "這是不允許的上傳類型";
            // 上傳多個檔案 如果有一個檔案不合法，那依然可以繼續上傳後續的檔案
            continue;
        }

        // step 3 使用 $_FILES["size"] 限制大小 單位字節  2M = 2000000
        $maxsize = 1500000;
        if ($_FILES["file"]["size"][$i] > $maxsize) {
            echo "上傳的文件太大，不能超過{$maxsize}字節";
            continue;
        }

        // step 4 上傳後的文件名一定要設置
        $filepath = __DIR__ . "/uploads/";
        $randname = uniqid() . "." . $hz;

        // 將臨時位置的文件移動到指定目錄即可
        if (is_uploaded_file($_FILES["file"]["tmp_name"][$i])) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $filepath . $randname)) {
                echo "上傳" . $_FILES["file"]["name"][$i] . "成功<br>";
            } else {
                echo "上傳" . $_FILES["file"]["name"][$i] . "失敗<br>";
            }
        } else {
            echo "不是一個上傳文件";
        }
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