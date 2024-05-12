<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
$r = 0;
if(isset($_GET['check_email'])){
    $email = $_GET['check_email'];
$r = 1;
$rlink = "/dologin?email=".$email;
}

if(isset($_GET['autologin'])){
    $userID = $_GET['u'];
    autologin($userID);
    $rlink = "/dashboard";
    header('Location: '.$rlink);
    die();
}
if($r == 1){
    header('Location: '.$rlink);
    die();
}
$title = "User Dashboard | Soulmate Healer";
$description = "Login to your account and access your orders!";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php';
$showerror = 0;

if (isset($_POST['form_submit'])) {
    if(isset($_POST['autologin'])){
        $autologin = $_POST['autologin'];
        $userID = $_POST['userID'];
        if($autologin == "yes"){
            autologin($userID);
        }
    }else{
        $email = $_POST['email'];
        

        $sql2 = "SELECT * FROM users WHERE email = '".$email."'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();

        $row5 = mysqli_num_rows($result2);
        echo $row5;
        if ($row5 > 0){
        // set username in the session
        $_SESSION['login_email'] = $row2['email'];
        $_SESSION['login_id']  = $row2['id'];
        }else{
            $TextError = "Can't find an account with that email";
        }
    } 
}


if (isset($_SESSION['login_id'])) {
    $LoggedIN = 1;
} else {
    $LoggedIN = 0;
}

if (isset($_GET['error'])) {
    $showerror = 1;
    $error = "Can't find an account with that email";
}
?>
<style>
    .col-md-offset-3 {
        margin-left: 25%;
    }

    @media (max-width: 767px) {
        .col-md-offset-3 {
            margin-left: 0%;
        }
    }
</style>

<!-- Header -->
<header class="ex-6-header" style="min-height:80vh">
    <div class="header-content">
        <?php if ($LoggedIN == 0) { ?>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/login-form.php'; ?>
        <?php } else { ?>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/login-dashboard.php'; ?>
        <?php } ?>

        <br clear="all">

    </div>
    </div>
</header>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>