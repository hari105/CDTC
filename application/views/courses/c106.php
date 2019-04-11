<div class="container">

  <div class="container courseBox">
    <h3 style="color: orange;">Dynamic web design:</h3>
    <div>
      
      <?php if($c106 != NULL) {   //change for new course
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
          <?php foreach ($c106 as $c) { #106 is the courseID
            echo '<tr><td>' . $studentCount . '</td><td>' . $c->rollNum . '</td><td>' . $c->username . '</td><td>' . $c->enrolledDate . '</td>
            <td>

            
          <a class = "btn btn-primary" href="' . site_url('Admin/editStudent/' . $c->rollNum) . '/106">Edit</a>
          <button type="button" class ="btn btn-danger" onclick = "delete1(\'' . $c->rollNum . '\',\'106\')">Disenroll</button>

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