<?php
session_start();
$email_address= !empty($_SESSION['email'])?$_SESSION['email']:'';
if(empty($email_address))
{
  header("location:index.php");
}
include_once $_SERVER['DOCUMENT_ROOT'].'/admin/partials/head.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/admin/partials/navbar.php';
?>
<script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
<div class="container-fluid px-4">


    <div class="row justify-content-center" style="margin-top:20px;">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Abandoned Email Log
                </div>
                <div class="card-body">
                <?php
                $file = $_SERVER['DOCUMENT_ROOT'].'/logs/abandon.log';
                $f = fopen($file, "r");
                while ($line = fgets($f) ) {
                    print $line . "<br/>";
                }
                ?>
                </div>
            </div>
        </div>

        
    </div>
</div>
</div>
</div>
<style>
.card {
    height: 100%;
}
</style>


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/admin/partials/footer.php';