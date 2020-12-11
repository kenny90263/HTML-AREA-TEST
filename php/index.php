<<<<<<< HEAD
<form method="post" style="text-align: center; margin-top: 150px;">
    <textarea style="height: 200px; width: 500px;" name="texts"><?= $_POST['texts']; ?></textarea>
    <button>送出</button>
</form>
<?php

if (!empty($_POST['texts'])) {
    $post = $_POST['texts'];
    
   var_dump($post);
    
    
    
    //echo $post;
}
=======
<?php

>>>>>>> 22d061a3373a66faf7dfb18bfe66480beb001405





// set the system timezone
date_default_timezone_set("Asia/Taipei");
echo date('Y-m-d');


//phpinfo(8);
//header("Content-type:application/pdf");
// It will be called downloaded.pdf
//header("Content-Disposition:attachment;filename=1090730.pdf");
// The PDF source is in original.pdf
//readfile("uploads/1090730.pdf");
