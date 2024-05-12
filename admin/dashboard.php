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

<div class="container-fluid px-4">


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts/charts.php'; ?>
    <div class="row justify-content-center" style="margin-top:20px;min-height:800px;">
        <div class="col-xl-9 col-lg-10">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Orders
                </div>
                <div class="card-body">
                    <table id="datatables" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Product</th>
                                <th>Reading</th>
                                <th>Initials</th>
                                <th>Color</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Priority</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                        include_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts/orders.php';
                        ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Product</th>
                                <th>Reading</th>
                                <th>Initials</th>
                                <th>Color</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Priority</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer small text-muted"><i class="fa fa-clock" style="margin-right:5px;"></i>Updated
                    <?php echo time_ago(date('F jS, Y, H:i:s')); ?> </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-2">

 

        <div class="chat_box" style="">
        <div class="card mb-4">
                <div class="card-header">
                    <i class="fa fa-comment"></i>
                    Orders Chat
                    <span id="minimizechat" style="float:right;padding-left:10px;padding-right:10px;cursor: pointer;"> <i class="fa fa-times"></i></span>
                    <span id="maximizechat" style="float:right;padding-left:5px;padding-right:5px;cursor: pointer;"> <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="card-body">
                  
                    <div id="talkjs-container" style="margin: 0px; height: 100%; width:100%;">
                        <i>Click on chat ID in table to load it.</i>
                    </div>
                </div>
             
            </div>
        </div>

</div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">

$(document).ready(function(){
    $("#minimizechat").on('click', function(){
          $("#minimizechat").hide();
          $("#maximizechat").show();
          $(".chat_box").addClass("small_chat");
        });

    $("#maximizechat").on('click', function(){
          $("#minimizechat").show();
          $("#maximizechat").hide();
          $(".chat_box").removeClass("small_chat");
    });
});

</script>
<style>
  #maximizechat{
    display:none;
  }
  .chat_box{
    width: 450px; 
    margin: 0px; 
    max-height:80vh; 
    height: 1000px; 
    position:fixed;
    bottom:10px;
    right:10px;
    z-index:999;
  }
  .small_chat{
    height: 42px;
    width:175px;
  }
tr {
vertical-align: middle!important;
text-align: center!important;
}
.card {
    height: 100%;
}
.sbadge{
    border-radius: 0.25rem !important;
    padding: 0.2rem !important;
    text-transform: capitalize!important;
    font-weight:600!important;
    text-align: center;
  }
  
.sbadge-pending{
  color: #9d5228;
  background-color: #fde6d8;
  }
.sbadge-completed{
  color: #00864e;
  background-color: #ccf6e4;
  }
.sbadge-processing{
  color: #1c4f93;
  background-color: #d5e5fa;
  }
.sbadge-canceled{
  color: #7d899b;
  background-color: #e3e6ea;
  }
  
  
.sbadge .svg-inline--fa{
  display:none!important;
  }
.sbadge-completed .fa-check{
  display:inline-block!important;
  }
.sbadge-processing .fa-redo{
  display:inline-block!important;
  }
.sbadge-pending .fa-stream{
  display:inline-block!important;
  }
.sbadge-canceled .fa-ban{
  display:inline-block!important;
  }
</style>
<script>
                    function buttonClicked(conversationId) {
                        var me = new Talk.User("administrator");
                        var other = conversationId;
                        window.talkSession = new Talk.Session({
                            appId: "zQQphoB0",
                            me: me,
                            other: other
                        });
                        var conversation = window.talkSession.getOrCreateConversation(conversationId);
                        const chatbox = talkSession.createChatbox();

                        chatbox.select(conversation);
                        chatbox.mount(document.getElementById('talkjs-container'));
                        conversation.setParticipant(me);
                    };
                    </script>
<script>
$(document).ready(function() {
    $('#datatables').DataTable( {
        "ordering": false,
        "pagingType": "full_numbers",
        "order": [[ 0, "desc" ]]
    } );
} );
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/admin/partials/footer.php';