<?php $this->load->view('common/header.php') ?> 

<style>
html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

h5, {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
    color:black;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
   
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 30%;
    height: 300;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
   
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}
h4 {
    color : black;
}
</style>
<!-- CLub Course -->
<div class="container" id="AndroidCourses">
        <h1 >Android Club</h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Basics of mobile app development </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                        Students will be able to develop mobile application.
                        </div>
                    </div>
                    <div class="card-footer">
                <small>Registered Students : <?php echo $Anum['numrows']; ?></small>
                        <a href="<?php echo base_url() ?>index.php/Courses/mobileapp" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            
      
       </div>
       
      
       </div>
</div>
<!-- /CLub Course -->
<br>
<!-- CLub Course -->
<div class="container" id="MaLaiCourses">
        <h1 >MaLai Club</h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Machine learning & Artificial Intelligence  </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                        Students will be able to apply machine learning and artificial intelligence
algorithms to solve the real world problems.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Registered Students : <?php echo $Mnum['numrows']; ?></small>
                        <a href="<?php echo base_url() ?>index.php/Courses/malaiCourse" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            
      
       </div>
       
      
       </div>
</div>
<!-- /CLub Course -->

<br>
<!-- CLub Course -->
<div class="container" id="IoTCourses">
        <h1 >IoT Club</h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Introduction to Internet of Things(IoT)  </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                        Students will be explored to the interconnection and integration of the
physical world and the cyber space.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Registered Students : <?php echo $I1num['numrows']; ?></small>
                        <a href="<?php echo base_url() ?>index.php/Courses/iotCourse" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Introduction to IoT : Its Applications   </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                            Students will be able to design and develop IoT applications.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Registered Students : <?php echo $I2num['numrows']; ?></small>
                        <a href="<?php echo base_url() ?>index.php/Courses/iotapp" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            
      
       </div>
       
      
       </div>
</div>
<!-- /CLub Course -->


<br>
<!-- CLub Course -->
<div class="container" id="WebCourses">
        <h1 >Web Club</h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Static web design </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                        Students will be able to develop a responsive static web pages.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Registered Students : <?php echo $W1num['numrows']; ?></small>
                        <a href="<?php echo base_url() ?>index.php/Courses/static" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Dynamic web design </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                        Students will be able to develop a dynamic web pages.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Registered Students : <?php echo $W2num['numrows']; ?></small>
                        <a href="<?php echo base_url() ?>index.php/Courses/dynamic" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            
      
       </div>
       
      
       </div>
</div>
<!-- /CLub Course -->

<br>
<!-- CLub Course -->
<div class="container" id="NULLCourses">
        <h1 >NULL Club</h1>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card" data-aos="zoom-out-up">
                
                    <div class="card-block">
                       
                        <h4 class="card-title mt-3">Block Chain  </h4>
                        <div class="meta">
                            <a>Outcome :</a>
                        </div>
                        <div class="card-text">
                        Students will be able to implement block chain principles & practices
in real time.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Registered Students : <?php echo $Nnum['numrows']; ?> </small>
                        <a href="<?php echo base_url() ?>index.php/Courses/blockchain" class="btn btn-info" role="button">Learn More</a>
                    </div>
                </div>
            </div>
            
      
       </div>
       
      
       </div>
</div>
<br>
<!-- /CLub Course -->

<?php $this->load->view('common/footer.php') ?>
