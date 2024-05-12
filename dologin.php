<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';

$email = $_GET['email'];
$sql2 = "SELECT * FROM users WHERE email = '".$email."'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        
        $row5 = mysqli_num_rows($result2);
        if ($row5 > 0){
        // set username in the session
        $_SESSION['login_email'] = $row2['email'];
        $_SESSION['login_id']  = $row2['id'];
        $newURL = "/dashboard";
        header('Location: '.$newURL);
        }else{
            $TextError = "Can't find an account with that email";
            $newURL = "/dashboard?error=notfound";
            header('Location: '.$newURL);
        }


?>