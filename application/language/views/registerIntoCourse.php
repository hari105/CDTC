<!DOCTYPE html>
<html>
<head>
  <title>CDTC Course Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CDTC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/loginlogo.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/backToTop.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/cdtcNavbarText.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">

  <!--logo at tab -->
  <link rel="icon" href="<?=base_url()?>/cdtc.jpeg" type="image/gif">
  <style type="text/css">
    *{
      font-family: 'Philosopher', sans-serif;
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
  <style>
    .note {
      text-align: center;
      height: 80px;
      background: -webkit-linear-gradient(left, #5F9EA0, #00c6ff);
      color: #fff;
      font-weight: bold;
      line-height: 80px;
    }


    .btnSubmit {
      border: none;
      border-radius: 1.5rem;
      padding: 1%;
      width: 25%;
      cursor: pointer;
      background: #00cccc;
      color: #fff;
    }

    div input{
      border-radius: 5px; 
    }


  </style>


</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-inverse navbar-light bg-light justify-content-center sticky-top " id="navbarlinks">
    <a class="navbar-brand" href="<?php echo base_url() ?>index.php/Home"  title="AGI"><img class="rounded cdtcLogo" src="<?php //echo base_url('assets/images/cdtc.jpeg');?>"></a>
    <a class="navbar-brand cdtcText" href="<?php echo base_url() ?>index.php/Home"><b>CDTC</b></a>
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
<!---NavBar-->



<div class="container">
  <div class="note mx-auto" style="padding-top: 2%;margin-bottom: 3%;">
    Technical Course Registration Form
  </div>
  <div class="container">

 
    <?php echo $this->session->flashdata('enrollmentSuccess'); ?>
  

  <?php echo $this->session->flashdata('enrollmentFailed'); ?>


  <form method="POST" action="enrollIntoCourse">

    <div class="row">
      <label class="col-md-2 offset-md-3 col-sm-12" >Hallticket No:</label>
      <input class="col-md-3 col-sm-9 offset-sm-3" style="margin-top: 2px;margin-left: 2px;margin-right: 2px;margin-bottom: 2px;background-color: rgba(240,240,240,0.6);" type="text" name="htno" readonly=""
      value="<?php echo $_SESSION['rollNum']; ?>"  >
    </div>


    <br>
    <div class="row" >
      <label class="col-md-2 offset-md-3 col-sm-12" >Course Name:</label>
      <select class="col-md-3 col-sm-9 offset-sm-3" style="padding-top: 3px;margin-left: 2px;margin-right: 2px;margin-bottom: 2px;background-color: rgba(240,240,240,0.6);" name="courseID">

        <?php foreach($courses->result() as $row){ ?>
          <option value="<?php echo $row->courseID ?>"><?php echo $row->courseID ?>--<?php echo $row->courseName ?></option>
        <?php } ?>


      </select>
    </div>
    <br>
    <div class="row">
      <label class="col-md-2 offset-md-3 col-sm-12" >Password:</label>
      <input class="col-md-3 col-sm-9 offset-sm-3" style="padding-top: 3px;margin-left: 2px;margin-right: 2px;margin-bottom: 2px;" type="Password" name="password" required="" placeholder="Enter your Password">
    </div>
    <br>
    <center>
      <input type="submit" value="Register" class="btn btnSubmit">
    </center>
  </form>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>