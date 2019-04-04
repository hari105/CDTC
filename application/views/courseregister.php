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
  
<style>
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #5F9EA0, #00c6ff);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #00cccc;
    color: #fff;
}
.form {
    text-align:center;
    align-items:center;
}
</style><br><br><br>
<div class="container register-form">
<center>
  <a  href="<?php echo base_url() ?>index.php/Home"><img src="<?php echo base_url('assets/images/cdtc.jpeg'); ?>" class=" rounded loginlogo"  alt=""/></a>
 </center>
            <div class="form">
                <div class="note">
                    <p>Technical Course Registration Form.</p>
                </div>
                <?php if(isset($_SESSION['registered'])) { ?>
                                        <div class="alert alert-success"><?php echo $_SESSION['registered']; ?></div>
                                    <?php
                                }  else if  (isset($_SESSION['error'])) { ?>
                                        <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
                                    <?php
                                } ?>
                <div class="form-content">
                    <div class="row form">
                        <div class="col-md-6 col-sm-6">
                            <center>
                            <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Roll Num *" name="rollNum"
                                value=" <?php foreach($user->result() as $row){ ?>
                                            <?php echo $row->rollNum ?>
                                    <?php } ?>" readonly="readonly" />
                            </div>

                            
                            
                        

                            <div class="form-group">
                                    Select Course:<select class="form-control"  name="courseID"> 
                                    <?php foreach($courses->result() as $row){ ?>
                                            <option value="<?php echo $row->courseID ?>"><?php echo $row->courseID ?>--<?php echo $row->courseName ?></option>
                                    <?php } ?>
                                    </select>
                            </div>

                            
                        </div>
                        
                    </div>
                    <button  class="btn btnSubmit" name="cregister">Submit</button>
                    </form>
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
