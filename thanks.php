<?php
$title = "Grazie per il tuo ordine! | Soulmate Healer";
$description = "Hai completato il processo di ordine!";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; ?>

<?php
if (isset($_GET['c'])) {
    $c = $_GET['c'];
} else {
    $c = "none";
}

if ($c == "[CUSTOM]") {
    $thankyou = 1;
} else {
    if (isset($_GET['o'])) {
        $o = $_GET['o'];
    } else {
        $o = "none";
    }

    if (isset($_GET['t'])) {
        $t = $_GET['t'];
    } else {
        $t = "no";
    }

    //After form is saved
    if (isset($_POST['form_submit'])) {
        $userID = $_POST['userID'];
        $gender = $_POST['gender'];
        $pgender = $_POST['pgender'];
        $genderAcc = '101';

        $sql12 = "UPDATE `orders` SET `gender`='$gender',`partner_gender`='$pgender',`genderAcc`='$genderAcc' WHERE `user_id`='$userID'";
        $sql13 = "UPDATE `users` SET `gender`='$gender',`partner_gender`='$pgender',`genderAcc`='$genderAcc' WHERE `id`='$userID'";

        if ($conn->query($sql12) === TRUE) {
        }

        if ($conn->query($sql13) === TRUE) {
        }

        $thankyou = 1;
    }


    if ($t == "yes") {
        $thankyou = 1;
    } else {

        if ($c != "none") {
            $sql5 = "SELECT * FROM orders WHERE order_id = '" . $c . "'";
            $result5 = $conn->query($sql5);
            $row5 = mysqli_num_rows($result5);
            if ($row5 > 0) {
                $row5 = $result5->fetch_assoc();
                $userID = $row5['user_id'];
                $orderType = $row5['order_product'];
            } else {
                $userID = $_SESSION['UserID'];
                $orderType = "unknown";
            }

            $sql2 = "SELECT * FROM users WHERE id = '" . $userID . "'";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();

            $genderAcc = $row2['genderAcc'];
            $UserGender = $row2['gender'];
            $PartnerGender = $row2['partner_gender'];

            if ($genderAcc >= 101) {
                $thankyou = 1;
            } else {

                $thankyou = 0;
            }

            if($orderType == "futurebaby"){
                $thankyou = 1;
            }else {

                $thankyou = 0;
            }
        } else {
            $thankyou = 1;
        }
    }
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

    .navbar {
        display: none;
    }
</style>

<!-- Header -->
<header class="ex-6-header" style="min-height:80vh">
    <div class="header-content">
        <div class="container" style="max-width:600px;">
            <!-- Begin of Digistore24 Trusted Badge Code -->
            <script type="text/javascript" src="https://www.digistore24.com/trusted-badge/27640/WE0tDCkF5Vsgf4I/thankyoupage"></script>
            <!-- End of Digistore24 Trusted Badge Code -->
            <div style="margin-top:0px;">

                <?php if ($thankyou == 1) { ?>
                    <div class="p-4" style="border:2px solid orange; border-radius:0.5rem;background-color: rgba(242, 236, 231, 0.9);">
                        <div class="wrap-white">
                            <h1 style="margin:0;padding-top:10px;padding-bottom:10px;">Grazie per il tuo ordine!</h1>
                            <h6 style="display:none;">Inserisci l'email che hai utilizzato per l'acquisto e ti faremo accedere!</h6>
                        </div>
                        <div class="wrap-white" style="padding-top:30px;padding-bottom:40px;">

                            <h3 id="finalnotice">Riceverai il tuo ordine entro 1-48 ore a seconda della priorità che hai scelto e sarà consegnato via email!<br></h3>
                            <h3 id="finalnoticeinfo">Se hai bisogno di aiuto o supporto con il tuo ordine, ti preghiamo di contattarci cliccando <a href="/contact">qui</a><br></h3>
                            <?php if ($c != "none") { ?>
                                <form id="autologin" data-toggle="validator" data-focus="false" action="/dashboard" method="GET">
                                    <input class="orderID" type="hidden" name="autologin" value="yes">
                                    <input class="orderID" type="hidden" name="u" value="<?php echo $c; ?>">
                                    <button style="margin-top:15px; padding:15px; width:100%; font-size:100%; text-decoration: none;border-radius:0.25rem;" class="btn form-control-submit-button"><i class="fa fa-user"></i> Accedi al Pannello Utente!</button>
                                <?php } else { ?>
                                    <a href="/dashboard" style="margin-top:15px; padding:15px; width:100%; font-size:100%; text-decoration: none;border-radius:0.25rem;" class="btn form-control-submit-button"><i class="fa fa-user"></i> Accedi al Pannello Utente!</a>
                                <?php } ?>

                        </div>
                        <h4>Il pagamento sarà effettuato da Digistore24.com</h4>
                    </div>

                <?php } else { ?>
                    <div class="p-4" style="border:2px solid orange; border-radius:0.5rem;background-color: rgba(242, 236, 231, 0.9);">
                        <div class="wrap-white">
                            <h1 style="margin:0;padding-top:10px;padding-bottom:10px;">Ultimo Passo!</h1>
                            <h6>Per favore, verifica il tuo e il sesso preferito del tuo partner!</h6>
                            <form id="switch-gender" data-toggle="validator" data-focus="false" action="?t=yes&c=<?php echo $c; ?>" method="post">
                                <div class="form-group">
                                    <select class="form-control-input" id="SelectGender" aria-label="SelectGender" required="" name="gender">
                                        <option <?php if ($UserGender == "male") echo 'selected=""'; ?> value="male"><span class="fa fa-user"></span> Maschio</option>
                                        <option <?php if ($UserGender == "female") echo 'selected=""'; ?>value="female"><span class="fa fa-user"></span>Femmina</option>
                                    </select>
                                    <label class="label-control" for="SelectGender">Il tuo sesso</label>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <select class="form-control-input" id="SelectGender" aria-label="SelectGender" required="" name="pgender">
                                        <option <?php if ($PartnerGender == "male") echo 'selected=""'; ?> value="male"><span class="fa fa-user"></span> Maschio</option>
                                        <option <?php if ($PartnerGender == "female") echo 'selected=""'; ?>value="female"><span class="fa fa-user"></span> Femmina</option>
                                    </select>
                                    <label class="label-control" for="SelectGender">Sesso preferito del partner</label>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <input class="orderID" type="hidden" name="userID" value="<?php echo $userID; ?>">
                                <button style="margin-top:15px; padding:15px; width:100%; font-size:130%; font-weight:bold;border-radius:0.25rem;" id="SaveChanges" type="submit" name="form_submit" class="btn form-control-submit-button" value="Conferma!"><i class="fa fa-square-check"></i> Conferma</button>
                            </form>
                        </div>
                    </div>






                <?php } ?>
            </div>
        </div>

        <style>
            #finalnotice {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #0000;
                border-radius: 6px;
                text-align: center;
                font-weight: bold;
                font-size: 105%;
            }

            #finalnoticeinfo {
                color: #004085;
                background-color: #cce5ff;
                border-color: #b8daff;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #0000;
                border-radius: 6px;
                text-align: center;
                font-weight: bold;
                font-size: 105%;
            }

            .label-control {
                top: 0.125rem !important;
                opacity: 1 !important;
                font-size: 0.75rem !important;
                font-weight: 700 !important;
            }
        </style>


        <br clear="all">

    </div>
    </div>
</header>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>