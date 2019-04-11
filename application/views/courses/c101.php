<?php $this->session->flashdata('errorInDisenrolling'); ?>


<style type="text/css">
  /* default styles here for older browsers. 
       I tend to go for a 600px - 960px width max but using percentages
    */
  @media only screen and (min-width: 960px) {
    /* styles for browsers larger than 960px; */
  }

  @media only screen and (min-width: 1440px) {
    /* styles for browsers larger than 1440px; */
  }

  @media only screen and (min-width: 2000px) {
    /* for sumo sized (mac) screens */

  }

  @media only screen and (max-device-width: 480px) {

    /* styles for mobile browsers smaller than 480px; (iPhone) */
    table {
      overflow-x: auto;
      display: block;
    }

  }

  @media only screen and (device-width: 768px) {

    /* default iPad screens */
    table {
      overflow-x: auto;
      display: block;
    }
  }

  /* different techniques for iPad screening */
  @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {

    /* For portrait layouts only */
    table {
      overflow-x: auto;
      display: block;
    }
  }

  @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {

    /* For landscape layouts only */
    table {
      overflow-x: auto;
      display: block;
    }
  }
</style>

<div class="container">
  <a class="btn-success btn" style="float:right;" href="<?php echo site_url('Admin/downloadExcel')?>">Export</a>  
</div>


<div class="container">

  <div class="container courseBox">
    <h3 style="color: orange;">Basics of mobile app development :
    </h3>
    

    <div>

      <?php if ($c101 != NULL) {
        $studentCount = 1;
        ?>
        <table class="table table-striped table-bordered container">
          <tr>
            <td><strong>S.No</strong></td>
            <td><strong>Student HtNo.</strong></td>
            <td><strong>Student Name</strong></td>
            <td><b>Enrolled on: (yyyy-mm-dd)</b></td>
            <td><b>Action</b></td>
          </tr>
          <?php foreach ($c101 as $c) {
            echo '<tr><td>' . $studentCount . '</td><td>' . $c->rollNum . '</td><td>' . $c->username . '</td><td>' . $c->enrolledDate . '</td>
            <td>

            
          <a class = "btn btn-primary" href="' . site_url('Admin/editStudent/' . $c->rollNum) . '/101">Edit</a>
          <button type="button" class ="btn btn-danger" onclick = "delete1(\'' . $c->rollNum . '\',\'101\')">Disenroll</button>

            </td>
            </tr>';
            $studentCount += 1;
          }
          ?>
        </table>

        

      <?php
    } else { ?>
        <h5>0 students enrolled<h5>
          <?php }  ?>
    </div>
  </div>
</div>
