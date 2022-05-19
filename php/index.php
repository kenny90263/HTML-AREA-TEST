<?php

$str = "王康齡";

// echo urldecode($str);

$test =  base64_encode($str);


if ($test == 'qJrD5rxmauILPMSOpAZekA==') {
    echo "比對成功";
} else {
    echo "失敗";
}


// // + final 不能被重寫

// class Father
// {
//     public function jump()
//     {
//         echo "I can jump";
//     }
// }


// class Son extends Father
// {
//     public function jump()
//     {
//         parent::jump();
//         echo "I can fucking jump";
//     }
// }


// $test = new son;

// $test->jump();

?>
<!-- <!DOCTYPE html>
<html style="margin-top: 0 !important" lang="en-US">

<head>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>

<body>


    <video id="preview"></video>

    
    <script type="text/javascript">
        let scanner = new Instascan.Scanner({
            continuous: true, // 連續掃描
            video: document.getElementById('preview'), // 預覽
            facingMode: {
                exact: "environment"
            }
        });
        scanner.addListener('scan', function(content) {

            console.log(content);
            getConfirmation();

            function getConfirmation() {
                var retVal = confirm("掃描結果：" + content); // 掃描結果顯示
                if (retVal == true) {
                    var checkurl = /^((https?|http?|file):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/; // 檢查是否為網址
                    if (checkurl.test(content)) {
                        window.open(content, "_self"); // 開啟網址
                    }
                    return true;
                } else {
                    return false;
                }
            }


        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[1]); // [0] 前鏡頭 [1] 後鏡頭 
            } else {
                console.error('沒有找到相機');
            }
        }).catch(function(e) {
            console.error(e);
        });
    </script>

</body>

</html> -->

<?php

// require __DIR__ . '/vendor/autoload.php';



// use Endroid\QrCode\Builder\Builder;
// use Endroid\QrCode\Encoding\Encoding;
// use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
// use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
// use Endroid\QrCode\Label\Font\NotoSans;
// use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
// use Endroid\QrCode\Writer\PngWriter;

// $result = Builder::create()
//     ->writer(new PngWriter())
//     ->writerOptions([])
//     ->data('姓名：蔡立寧')
//     ->encoding(new Encoding('UTF-8'))
//     ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
//     ->size(300)
//     ->margin(10)
//     ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
//     //->logoPath(__DIR__ . '/assets/logo.png')
//     ->labelText('我是Qr-Code 119')
//     ->labelFont(new NotoSans(20))
//     ->labelAlignment(new LabelAlignmentCenter())
//     ->build();


// // Directly output the QR code
// header('Content-Type: ' . $result->getMimeType());
// echo $result->getString();

// // Save it to a file
// $result->saveToFile(__DIR__ . '/qrcode.png');

// // Generate a data URI to include image data inline (i.e. inside an <img> tag)
// $dataUri = $result->getDataUri();
