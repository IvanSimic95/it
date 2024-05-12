<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';

$sql = "SELECT * FROM review_total";
$result = $conn->query($sql);
while($row = mysqli_fetch_array ($result)) {
    $id = $row['id'];
    $product = $row['product'];
    $reviews = $row['reviews'];

    $multi = rand(1, 6);
    $multi = $multi / 10000;

    $newreviews = round($reviews * $multi);
    $totalnew = $reviews + $newreviews;
    #echo $newreviews;
    #echo "<br>";

    $sql = "UPDATE `review_total` SET `reviews`='$totalnew' WHERE id='$id'";
    $result5 = $conn->query($sql);
    if ($result5){
        #echo "added new reviews <br>";
    }
    //echo $id."<br>".$product."<br>".$reviews."<br>";

}
?>