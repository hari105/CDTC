
<?php $this->load->view('common/header.php') ?> 
<style>
.row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
.team-members .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}


           



.team-members{
  /*background: url("#img/right-sider-banner.png") no-repeat center top / cover;*/
  
}
.team-members .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   padding:30px 20px; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.team-members .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.team-members .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.team-members .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
.team-members .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.team-members .cnt-block h3 a:hover{
	color:#337ab7;
}
.team-members .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
   
}
.team-members .cnt-block .follow-us{
	margin:20px 0 0;
}
.team-members .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
	margin:0 5px;
}
.team-members .cnt-block .follow-us li .fab{ 
   font-size:24px; 
   color:#767676;
}
.team-members .cnt-block .follow-us li .fab:hover{ 
   color:#025a8e;
}

</style>          

<section class="padding-lg"  >
          
                    <div class="container text-center black-text  ">
                 

    
    <br>
    <h1>About CDTC</h1>
    <p>
        <b>Center for Development of Technical Competencies (CDTC) </b>  <br>
        To bridge the gap between the needs of the industry and the academic
        curricula Department of Computer Science and Engineering (CSE), Anurag Group of Institution
        , Hyderabad in collaboration with industry introduces finishing school for students of all branches.
    </p>
    <p>
    Through Finishing School, the students of various departments will get an opportunity to acquire and 
        reinforce industry-specific current computer technological knowledge, skills, and competencies delivered by trained faculty and experts from various industry. 
   
    </p>
    <p>Department has initiated various clubs like Web Club, Android Club and others. Interested students are registered through the course in the respective club and 
        through the club training sessions are conducted to the registered students. At the end of the course studenrts are assessed and awarded certificated based on the merit.
    </p>
                    </div>
                   
                </section>

<section class="team-members padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>faculty Coordinator</h2>
    </div>
    <ul class="row justify-content-center">
      <li class="col-12 col-md-6 col-lg-4  text-center">
          <div class="cnt-block equal-hight text-center" style="height: 380px; text-align:center;">
            <figure><img src="#" class="img-responsive" alt=""></figure>
            <h3><a href="#">Mr. Hari Prasad</a></h3>
            <p style="text-align:center;"> Professor</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      
    </ul>
  </div>
</section>

<section class="team-members padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Website Developers</h2>
    </div>
    <ul class="row ">
      <li class="col-12 col-md-6 col-lg-4 text-center">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="<?php echo base_url("assets/images/ourpics/sainath.jpeg") ?>" class="img-responsive" alt=""></figure>
            <h3><a href="#">Sainath Omdas</a></h3>
            <p style="text-align:center;"> Web Developer <br> 16H61A0599</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-4 text-center">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="<?php echo base_url("assets/images/ourpics/manideep.jpg") ?>" class="img-responsive" alt=""></figure>
            <h3><a href="#">Manideep Pasuladi </a></h3>
             <p style="text-align:center;"> Web Developer <br> 16H61A0593</p> 
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-4 text-center">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="<?php echo base_url("assets/images/ourpics/akhil.JPG") ?>" class="img-responsive" alt=""></figure>
            <h3><a href="#">Akhil Ganti </a></h3>
            <p style="text-align:center;"> Web Developer <br> 16H61A0578</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
       </li>
      
    </ul>
  </div>
</section>
<?php $this->load->view('common/footer.php') ?>