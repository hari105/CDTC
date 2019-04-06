  <style>
    .modal {
  display: flex; /* Hidden by default */
  position: fixed; /* Stay in place */
  
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  height : 500px;
}

/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0; 
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
} 
.content
{
    
    background: -webkit-linear-gradient(left, #5F9EA0, #00c6ff);
    padding : 50px;

    
    
}

.register-btn{
    
    align-items:center;
  text-align: center;
}
@media (min-width: 992px) {
  
    .modal {
  display: flex;
    }
     .popPadding{
      padding-left:  10%;
      padding-right: 10%;
      padding-top: 8%;
    }
}



/* Portrait tablets and small desktops */
@media (min-width: 768px) and (max-width: 991px) {

    .modal {
  display: flex;
    }
    .popPadding{
      padding-left:  5%;
      padding-right: 5%;
      padding-top: 5%;
    }
 
}

/* Landscape phones and portrait tablets */
@media (max-width: 767px) {

    .modal {
  display: none;
    }


}

/* Portrait phones and smaller */
@media (max-width: 480px) {

    .modal {
  display: none;
    }

}

    </style>
  
      <!-- Button to open the modal login form -->
    
<!-- The Modal -->
<div id="id01" class="modal">
  

  <!-- Modal Content -->
  <div class="modal-content animate" action="/action_page.php">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>
    
    <div class="container content">
        <h1>Register For the course</h1>
        <p>Center for Development of Technical Competencies (CDTC) offers many courses. Register and avail many advantages </p>
        
    </div>
    <div class="container popPadding" >
      <center>
     <p style="color: black;">CDTC in collaboration with many industries offering finshing school courses to students of all branches.</p>
     </center>
    </div>
   
    <div class="register-btn">
    <a href="<?php echo base_url() ?>index.php/Courses/register" class="btn btn-lg btn-primary" value="Register"  >Register</a>
    </div>
  </div>
  <!-- end modal content -->
</div> 
 
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> 
 