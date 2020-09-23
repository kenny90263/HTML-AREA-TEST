<?php

if ($_FILES["file"]["error"] > 0) {
    echo "錯誤：" . $_FILES["file"]["error"] . "<br>";
} else {
    echo "上傳文件名: " . $_FILES["file"]["name"] . "<br>";
    echo "文件類型: " . $_FILES["file"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "文件臨時存儲的位置: " . $_FILES["file"]["tmp_name"] . "<br>";

    // 判断当前目录下的 upload 目录是否存在该文件
    // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"] . " 文件已经存在。 ";
    } else {
        // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        print_r(dirname(__FILE__));
        $fileName = dirname(__FILE__) . '/uploads/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES["file"]["tmp_name"], $fileName);
        echo "文件存储在: " . dirname(__FILE__) . '\uploads/' . $_FILES["file"]["name"];
    }
}







/**
 *  1. 單個文件上傳
 *  2. 多個文件上傳
 * 
 *  一、PHP配置文件中和上傳文件有關的選項
 * 
 *      file_uploads = on
 *      upload_max_filesize =   最大不要超過服務器的內存
 *      upload_tem_dir = 
 * 
 * 
 *  二、上傳表單需要的注意事項
 * 
 * 
 * 
 *  三、PHP處理上傳的數據
 * 
 * 
 *  
 * 
 * 
 * 
 */
