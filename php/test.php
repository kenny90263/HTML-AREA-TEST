<?php



/*
function httpcode($url, $timeout)
{
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_exec($ch);

  return curl_getinfo($ch, CURLINFO_HTTP_CODE);


  curl_close($ch);
}

$htttcode = httpcode('https://803.mnd.gov.tw', 3);

if ($htttcode == 200) {
  echo "運作正常";
} else {


  echo "網站怪怪的，最好檢查一下";
}*/

ini_set('SMTP', 'msa.hinet.net'); 
ini_set('smtp_port', 25); 

$to = "support@ateam.tw";
$subject = "網站監測中心";
$txt = "Hello world!";
$headers = "From: kennycomputer@ateam.tw";

mail($to, $subject, $txt, $headers);


/*
//創建一個新cURL資源
$ch  =  curl_init();

//設置URL和相應的選項
curl_setopt($ch,  CURLOPT_URL,  "https://yahoo.com.tw");
curl_setopt($ch,  CURLOPT_HEADER,  0);

//抓取URL並把它傳遞給瀏覽器
curl_exec($ch);

//關閉cURL資源，並且釋放系統資源
curl_close($ch);
*/


/*
$domain1 = "https://kingchin.com.tw";

get_http_response_code($domain1);

var_dump(http_response_code());



$url = 'https://google.com.tw/';

echo "<pre>";
print_r(get_headers($url,1));
echo "</pre>";



/*
 * Created on 2016-9-4
 *
 *//*
function httpcode($url)
{
  $ch = curl_init();
  
  $timeout = 3;
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_exec($ch);

  return $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


  curl_close($ch);
}
echo "判斷網管之家的鏈接：" . httpcode('https://yahoo.com.tw');
?>
<br />
如果顯示為200則正常，如果顯示其它值表示不正常；$timeout後面的3是設置超時秒數。




<?php
/*
$test = $_GET['test'];

echo "這是妳搜尋的東西".$test."<br><br><br>";

if ($test) {


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tyvh_medicine";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  //$sql = "SELECT * FROM `medicine_info` WHERE `med_kind` = 'HEMATOPOIETIC'";
  $sql = "SELECT * FROM `medicine_info` WHERE `med_kind` = '" . $test . "'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo $row["prod_name"] . "<br>" . $row["en_name"] . "<br>" . $row["sci_name"] . "<br>" . $row["med_file2"] . "<br>" . $row["med_file1"];
    }
  } else {


    echo "0 results";
  }




  $conn->close();
}



?>


<form method="get" action="test.php">


  <input type="text" name="test">
  <input type="submit">
</form>








<?php
/*
$test = "我 是 天 才 1 2 5 5 5 25";

echo "<pre>";
print_r(explode(" ",$test,0));
echo "</pre>";







function test(){
  return "<h2>Welcome %s Wibibi.%f is float of %u.</h2>";
}

echo test();
printf(test(),8,8);
?>



<!--<form action="test.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>



<?php
/*
if (!file_exists('basename(uploads)')) {
  mkdir('uploads', 0777, true);
}



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
/*if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



/*
function callback($buffer){ 
    // Return Everything in CAPS. 
    return $buffer . 123; 
} 
  
ob_start("callback"); 
echo "avc!"; 
ob_end_flush(); 
  
*/
/*
ob_start();
echo("Hello there!"); //would normally get printed to the screen/output to browser
$output = ob_get_contents();
ob_end_clean();
*/
