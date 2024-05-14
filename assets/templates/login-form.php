<div class="container" style="max-width:600px;">


    <div style="margin-top:0px;">


        <div style="border:2px solid orange; border-radius:0.5rem;background-color: rgba(242, 236, 231, 0.9);">
            <div class="wrap-white">


                <h1>Pannello di controllo</h1>
                <h6>Inserisci l'email che hai utilizzato per l'acquisto e ti faremo accedere!</h6>


            </div>
            <div class="wrap-white p-4">
                <div class="contact_form">
                    <img id="profile-img" class="profile-img-card img-thumbnail m-4" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    <?php if($showerror == 1){ ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                        </div>
                    <?php } ?>
                    <form id="loginForm" data-toggle="validator" data-focus="false" action="/dologin" method="GET">

                        <div class="form-group">
                            <input type="email" class="form-control-input" id="semail" name="email" required>
                            <label class="label-control" for="semail">Email*</label>
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group">
                            <button id="submitbtn" name="form_submit" type="submit" class="form-control-submit-button">Accedi <i class="fa-solid fa-arrow-right"></i></button>
                        </div>


                    </form>
                </div>
            </div>
        </div>



    </div>
</div>