<div class="container">

  <div class="container courseBox">
    <h3 style="color: orange;">Introduction to Internet of Things(IoT):</h3>
    <div>
      
      <?php if($c103 != NULL) {   //change for new course
        $studentCount = 1;
        ?>
        <table class="table table-striped table-bordered container">
          <tr><td><strong>S.No</strong></td><td><strong>Student HtNo.</strong></td><td>Enrolled on:(yyyy-mm-dd)</td></tr>
          <?php foreach($c103 as $c){     //change for new course
            echo '<tr><td>'.$studentCount.'</td><td>'.$c->rollNum.'</td><td>'.$c->enrolledDate.'</td></tr>';
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