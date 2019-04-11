<div class="container">

  <div class="container courseBox">
    <h3 style="color: orange;">Machine learning & Artificial Intelligence:</h3>
    <div>
      
      <?php if($c102 != NULL) {   //change for new course
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
          <?php foreach ($c102 as $c) {
            echo '<tr><td>' . $studentCount . '</td><td>' . $c->rollNum . '</td><td>' . $c->username . '</td><td>' . $c->enrolledDate . '</td>
            <td>

            
          <a class = "btn btn-primary" href="' . site_url('Admin/editStudent/' . $c->rollNum) . '/102">Edit</a>
          <button type="button" class ="btn btn-danger" onclick = "delete1(\'' . $c->rollNum . '\',\'102\')">Disenroll</button>

            </td>
            </tr>';
            $studentCount += 1;
          }
          ?>
        </table>



      <?php 
    }
      else  { ?>
        <h5>0 students enrolled<h5>
      <?php }  ?>
    </div>
  </div>
</div>