
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CDTC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- css links -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/card.css'); ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/backToTop.css'); ?>">
   <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
   
     <!--logo at tab -->
     <link rel="icon" href="<?=base_url()?>/cdtc.jpeg" type="image/gif">
   
<style type="text/css">
  *{
    font-family: 'Philosopher', sans-serif;
  }
  ul li  {
    
    padding: 10px 30px 10px 30px;
    font-size: 14px;
    }
    li a{
      /*text-transform: uppercase;*/
      font-size:18px;
    }
    .darknav{
      background-color:rgba(0,0,0,0.9);
    }
    .username {
  text-transform: capitalize ;
  
}

  #navbar {
  
  background-color: #fff;
  padding: 10px 10px; 
  align-items:center;
  text-align: center;
  width: 100%;
  top: 0; /* At the top */
  
}
@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important; /* Use !important to make sure that JavaScript doesn't override the padding on small screens */
  }
 
  
} 


</style>
 
</head>
<body>
<div id="navbar" class="">
  <a href="<?php echo base_url() ?>index.php/Home" id="logo"><img class="rounded cdtcLogo mx-auto d-block" src="<?php echo base_url('assets/images/cdtc.jpeg');?>  "></a>
  <h3><i><b>Center for Development of Technical Competencies</b></i></h3>
</div> 
<nav class="navbar navbar-expand-sm navbar-inverse navbar-light bg-light justify-content-center sticky-top " id="navbarlinks">
 
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon ml-auto"></span>
  </button> 

 
  <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarNavDropdown">
   
    <ul class="navbar-nav mx-auto text-center">

      <li class="nav-item active  cool-link">
        <a class="nav-link py-0" href="<?php echo base_url() ?>index.php/Home">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle py-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Technical Clubs 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/Android">Android</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/Malai">MaLai</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/Iot">IoT</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/Web">Web</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/NullClub">NULL</a>
        </div>
      </li>
      
       
      <li class="nav-item active">
        <a class="nav-link cool-link py-0" href="<?php echo base_url() ?>index.php/Achievements">Achievements <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle py-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Technical Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url() ?>index.php/Courses">Android</a>
          <a class="dropdown-item closeMenu" href="<?php echo base_url() ?>index.php/Courses#MaLaiCourses">MaLai</a>
          <a class="dropdown-item closeMenu" href="<?php echo base_url() ?>index.php/Courses#IoTCourses">IoT</a>
          <a class="dropdown-item closeMenu" href="<?php echo base_url() ?>index.php/Courses#WebCourses">Web</a>
          <a class="dropdown-item closeMenu" href="<?php echo base_url() ?>index.php/Courses#NULLCourses">NULL</a>
        </div>
      </li>
      <li class="nav-item active">
                 <a class="nav-link cool-link py-0" href="<?php echo base_url() ?>index.php/About" id="">About us</a>
      </li>
      <?php if(isset($_SESSION['success'])) 
              { 
                    echo   '<li class="nav-item dropdown active cool-link">
                            <a class="nav-link dropdown-toggle username py-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                                   $_SESSION['username'].' 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="'.base_url().'index.php/user/profile">Profile</a>
                              <a class="dropdown-item" href="'. base_url().'index.php/auth/logout ">Logout</a>
                            </div>
                          </li>';
                                      



      
              } 
              else 
              {
             echo        '<!-- from here -->
            <li class="nav-item active">
                 <a class="nav-link cool-link py-0" href="'. base_url() .'index.php/auth/login" id="login">Login</a>
               </li>';

      
               } 
        ?>
    </ul>


  </div>

  
</nav>
<marquee behavior=" " direction="right"><a href="<?php echo base_url() ?>index.php/Courses/register" style="color:white;">Click here to register into technical courses</a></marquee>


<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up" ></i></a>
