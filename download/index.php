<?php
$i = 0;

$path =$_SERVER['DOCUMENT_ROOT']."/download/dl";
$num = count(glob($path . "/*"));
$i = $num;
$maxi = $i + 50;

if($i >= 3000){
    echo "done";
    die();
}else{

while($i < $maxi) {
    $content = file_get_contents('https://thispersondoesnotexist.com/');
    file_put_contents('dl/'.$i.'.jpg', $content);
    $i++;
  }
 
}
?>

<meta http-equiv="refresh" content="0; url=index.php">

Refreshing...