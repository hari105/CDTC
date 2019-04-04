<?php $this->load->view('common/header.php') ?> 
  <style>
  .courseBox{
    width:80%;
    height:auto;
    padding:50px;
    background:rgba(255,255,255,0.1);

  }
  .alert {
   width:40%; 
   align :center;   
}
.username {
  text-transform: capitalize ;
}
  
  </style>
  <br><br><br><br>
  <div class="container register rounded">
                <div class="row">
                            <div class="col-md-12 register-left">
                                <h2 class="username" >Welcome <?php echo $_SESSION['username']; ?></h2>
                            </div>
                              
                               
                                <?php echo validation_errors(' <div class="alert alert-danger">','</div>  '); ?>  

                                

                                <br><br>

                </div>
 </div>
  
 <?php if(isset($_SESSION['logged-in'])) { ?>
                                        
                                        <div class="alert alert-success alert-dismissible fade show container" role="alert">
                                          <?php echo $_SESSION['success']; ?>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                    <?php
                                } 
                               ?>

<div class="container">

            <div class="container courseBox">
                                <h1>Courses  Registered :</h1>
                                <div>
                                  
                                  <?php if($courses != NULL) { ?>
                                        <ul class="list-group">
                                            <?php foreach($courses as $course){?>
                                          
                                              <li class="list-group-item " style="color: black;"> <?php echo $course->courseName;?> </li>
                                            
                                            
                                            <?php }?> 
                                        </ul>

                                            <?php } else  { ?>
                                                    <p><b>No Courses registered</b></p>
                                              <?php }  ?>
                                </div>
            </div>
</div>
<br>
<div class="container">
              <div class="container">
                              
                                <h1>Courses  Offered: 
                                <a href="<?php echo base_url() ?>index.php/Courses" class="btn btn-primary">Courses</a></h1>
              </div>
</div>

 <?php $this->load->view('common/footer.php') ?>