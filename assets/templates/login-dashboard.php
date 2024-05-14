<style>
    .card-body {
        padding: 0.8rem;
        background-color: white;
        border-radius: 0.5rem;
    }

    .textbelow {
        font-size: 16px;
        line-height: 16px;
        margin-top: 5px;
        margin-bottom: 10px;
    }

    .order-status {
        font-weight: bold;
    }

    .chat_box {
    display: none;
}
.chat_box .fas {
    cursor: pointer;
    position: absolute;
    z-index: 999;
    right: 20px;
    top: 20px;
    color: #666;
    font-size: 20px;
}
</style>
<script>
    (function(t,a,l,k,j,s){
    s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
    ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
    .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>
<div class="container" style="max-width:900px;">


    <div style="margin-top:0px;">


        <div style="border:2px solid orange; border-radius:0.5rem;background-color: rgba(242, 236, 231, 0.9);">
            <div class="wrap-white">


                <h1>Pannello di controllo</h1>
                <h6>Sei collegato come <?php echo $_SESSION['login_email']; ?></h6>


            </div>
    

            


            <div class="wrap-white row p-4">


            <?php
            $userID = $_SESSION['login_id'];
            $sql = "SELECT * FROM orders WHERE (user_id = '$userID' && order_status = 'processing') OR (user_id = '$userID' && order_status = 'shipped') ORDER BY order_id DESC";
            $result = $conn->query($sql);  
            $countorders = mysqli_num_rows($result);      
            if($countorders > 0){
          while($row = $result->fetch_assoc()) {
            $product = $row["order_product_nice"];
            $prodimg = $row["order_product"];
            $orderID = $row["order_id"];
            $priority = $row["order_priority"];
            if($row["order_status"]=="shipped"){$status="completed";}else{$status = $row["order_status"];}
            $status = ucfirst($status);
              echo '
              <div class="col-sm-6 col-md-4 col-12" style="margin-bottom:20px;">
                    <div class="card-body">
                        <h4 class="card-title-prod" style="margin:0;">'.$product.' <br><span style="font-size:90%;">#'.$orderID.'</span></h4>


                        <div style="background-color: #fff;" class="card-image">
                            <img class="img-fluid" src="/images/products/'.$prodimg.'.png" alt="alternative">
                            <div style="padding:5px;margin-bottom:0px;">
                                <p class="textbelow">Order Status: <span class="order-status">'.$status.'</span></p>
                                <button id="talkjs-'.$orderID.'" style="border-radius: 0.25rem;height: 2rem;" class="chat form-control-submit-button">View Order</button>
                            </div>
                        </div>
                    </div>
                </div>
              ';
              ?>
              <div class="chat_box" style="width: 420px; margin: 0px; height: 80vh; position:fixed;bottom:0;right:0;z-index:999;max-width:100%">
                <i class="fas fa-times"></i>
                <div class="chat_loader" id="talkjs-container-<?php echo $orderID; ?>" style="width: 420px; margin: 0px; height: 80vh;max-width:100%">
                    <i>Loading chat...</i>
                </div>
              </div>

              <script>
                  Talk.ready.then(function() {
                    var me = new Talk.User("administrator");
                    var other = new Talk.User(<?php echo $userID; ?>);
                    window.talkSession = new Talk.Session({
                        appId: "zQQphoB0",
                        me: other
                    });
                    var conversation = talkSession.getOrCreateConversation("<?php echo $orderID; ?>");

                    conversation.setParticipant(other);
                    conversation.setParticipant(me);
                      var chatbox = window.talkSession.createChatbox(conversation);
                    chatbox.mount(document.getElementById("talkjs-container-<?php echo $orderID; ?>"));
                  })
              </script>

              <?php
            }
        }else{?>
            <div class="alert alert-primary" role="alert" style="width:100%;">
  You have no orders yet!
</div>
     <?php   }

           ?>




                





            </div>
            
<div class="wrap-white">
                <a href="/logout/">Logout</a>
            </div>

        </div>



    </div>
</div>