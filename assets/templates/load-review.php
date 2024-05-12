<?php

if(isset($_GET['page'])) {
$page = $_GET['page'];
}else{
$page = "0";	
}
if(isset($_GET['product'])) {
$product = $_GET['product'];
}else{
$product = "SOULMATE";	
}
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/time.php';
$perpage = 3;
$offset = ($page-1) * $perpage; 
	
$offset = $offset + 9;

$total_pages_sql = "SELECT COUNT(*) FROM reviews WHERE product = '".$product."'";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_rows = $total_rows - 9;
$total_pages = ceil($total_rows / $perpage);

$nextpage = $page + 1;

    $sql = "SELECT * FROM reviews WHERE review_moderated = 'approved' AND product = '".$product."' ORDER BY review_id ASC LIMIT ".$offset.", ".$perpage;

    $result = $conn->query($sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
	$count = $result->num_rows;
    if($result->num_rows != 0) {

      while($row = $result->fetch_assoc()) {
         // echo '<div class="single_review sides"><div class="review_content"><h3><span class="review-name">' . $row["review_name"]. '</span> <span class="verified-badge"><i class="fas fa-user-check"></i> Verfied Purchase</span><time>' . $row["review_date"]. '</time> ago</h3><div class="rating">' . $row["review_rating"]. '</div><div class="testimonial">' . $row["review_text"]. '</div></div></div>';
        $newdate = date('F jS, Y, H:i:s', strtotime($row["review_date"]));
        $time = time_ago($row["review_date"]);
        $filename = $_SERVER['DOCUMENT_ROOT']."/images/reviews/".$row["review_id"].".jpg";
       
        if (file_exists($filename)) {
          $avatar = $row["review_id"].".jpg";
       
        }else{
          $avatar = "default.png";
        }
        echo '


        <div class="item col-lg-4 col-md-6 col-sm-6 col-12 m-auto single_review">
        <div style="margin-bottom:20px;border:0px;background-color:#fff;" class="card">
        <div class="card-image">
                <img style="width:50%;" class="img-fluid img-avatar" src="/images/reviews/' . $avatar. '" alt="alternative">
            </div>
            <div class="card-body">
                <h4 class="card-title-prod">' . $row["review_name"]. '</h4>
           </div>
        <div style="color:#1a9e42;font-weight:500;font-size: 11px;margin-top: -10px;"><span class="review-stars">' . $row["review_rating"]. '</span><i style="margin-left: 15px;" class="fas fa-check-square"></i> Verified</div>
        <p style="font-size: 14px;text-align: left;padding: 10px;line-height: 17px;">' . $row["review_text"]. '</p>
        </div>
        </div>
        
        
        ';
		
		}






    } else {
        echo "No Reviews";
    }
      $conn->close();
	  
	  if($page != $total_pages){
     ?>
	 
	 <div class="pagination">
    <a href="https://<?php echo $domain; ?>/assets/templates/load-review.php?product=<?php echo $product; ?>&page=<?php echo $nextpage; ?>" class="next btn-solid-reg form-control-submit-button">Next</a>
</div>
<?php
} ?>
