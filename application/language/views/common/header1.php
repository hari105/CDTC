
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CDTC</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- css links -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/card.css'); ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
   
     <!--FOnt -->
 
   
<style type="text/css">
  ul li  {
    padding: 20px;
    font-size: 14px;
    }
    a{
      /*text-transform: uppercase;*/
    }
    .darknav{
      background-color:rgba(0,0,0,0.9);
    }

  
</style>
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-inverse navbar-dark  darknav fixed-top " id="navbar" >

      
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
<!--
  <ul><li>
        <a href="Home" class="navbar-brand"><img src="<?php echo base_url('assets/images/cdtc.jpeg'); ?>" class="cdtcLogo rounded" alt=""></a>
      </li>
    </ul>
  -->
    <ul class="navbar-nav"  >
      
      <li class="nav-item active">
        <a class="nav-link cool-link" href="Home">Home <span class="sr-only">(current)</span></a>
      </li>
     
      
      <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle " href="<?php echo site_url('Android');?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Android 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Android">About</a>
          <a class="dropdown-item" href="Android#events">Events</a>
          <a class="dropdown-item" href="Android#achievements">Achievements</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
        <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          IoT 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Iot">About</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Achievements</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
        <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MaLai 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Malai">About</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Achievements</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
        <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NULL 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="NullClub">About</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Achievements</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
        <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Web 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Web">About</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Achievements</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
        <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Maven Cognikz 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Maven">About</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Achievements</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link cool-link" href="Achievements">Achievements <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active cool-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Courses">Android</a>
          <a class="dropdown-item" href="Courses#MaLaiCourses">MaLai</a>
          <a class="dropdown-item" href="Courses#IoTCourses">IoT</a>
          <a class="dropdown-item" href="Courses#WebCourses">Web</a>
          <a class="dropdown-item" href="Courses#NULLCourses">NULL</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link cool-link" href="#" id="login">Login <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li>
        <a href="https://anurag.edu.in/"><img src="<?php echo base_url('assets/images/agiLogo.JPG'); ?>"  class="agiLogo rounded" alt=""></a>
      </li>
      </ul>
  </div>

</nav>



<div class="navMargin" style="background-color:rgba(14, 56, 101, 0.9);"></div>

