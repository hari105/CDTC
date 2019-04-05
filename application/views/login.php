<!doctype html>
<html lang="en">
  <head>
    <title>CDTC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/loginlogo.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/forgotPasswordModel.css">
  
  <!--logo at tab -->
  <link rel="icon" href="<?=base_url()?>/cdtc.jpeg" type="image/gif">
    <style>


/*---------  inside modal content view -------- */
.register{
    background: -webkit-linear-gradient(left, #5F9EA0, #00c6ff);
    margin-top: 2%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #87CEFA	;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #87CEFA	;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #000000;
    border: 2px solid #87CEFA;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

/*---------  /inside modal content view -------- */

/* navbar */
.navbar-nav {
    width: 100%;
    text-align: center;
    > li {
      float: none;
      display: inline-block;
    }
  }



</style>


  </head>
  <body>
  <!-- nav bar -->
 <center>
  <a  href="<?php echo base_url() ?>index.php/Home"><img src="<?php echo base_url('assets/images/cdtc.jpeg'); ?>" class=" rounded loginlogo"  alt=""/></a>
 </center>

<!-- login section -->
  <div class="container register rounded">
                <div class="row">
                    <div class="col-md-3 register-left">
                    <a  href="<?php echo base_url() ?>index.php/Home"><img src="<?php echo base_url('assets/images/cdtc.jpeg'); ?>" class=" rounded"alt=""/></a>
                        <h3>Welcome.</h3>
                        
                    </div>

                    <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login</h3>
                                <?php if(isset($_SESSION['success'])) { ?>
                                        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                                    <?php
                                }  else if  (isset($_SESSION['error'])) { ?>
                                        <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
                                    <?php
                                } ?>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Roll Num *" name="rollNum" id="rollNum" required style="text-transform: uppercase;" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password" id="password "   required />
                                        </div>
                                        <div style="float: right;color: #5F9EA0;font-size: 14px;margin-right:8%;">
                                        <a href="<?php echo site_url('Forgot') ?>">Forgot Password*</a>

                                        </div>




                                        
                                        <button class="btn btnRegister btn-info" name="login" >Login</button>
                                       
                                        
                                        </form>
                                        </div>
                                        <p>Not registered? <a href="<?php echo base_url() ?>index.php/auth/register">Register now</a></p>
                                </div>
                            </div>
                        </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      

  </body>
</html>

 
      

        
  

          
