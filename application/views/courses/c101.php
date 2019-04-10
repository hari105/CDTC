
<?php $this->session->flashdata('errorInDisenrolling');?>


<div class="container">

  <div class="container courseBox" >
    <h3 style="color: orange;">Basics of mobile app development :</h3>
    <div>
      
      <?php if($c101 != NULL) { 
        $studentCount = 1;
        ?>
        <table class="table table-striped table-bordered container">
          <tr><td><strong>S.No</strong></td><td><strong>Student HtNo.</strong></td><td><strong>Student Name</strong></td><td><b>Enrolled on: (yyyy-mm-dd)</b></td><td><b>Action</b></td></tr>
          <?php foreach($c101 as $c){
            echo '<tr><td>'.$studentCount.'</td><td>'.$c->rollNum.'</td><td>'.$c->username.'</td><td>'.$c->enrolledDate.'</td>
            <td>

            <a class = "btn btn-success" href="'.site_url('').'/101">Add</a>
          <a class = "btn btn-primary" href="'.site_url('Admin/editStudent/'.$c->rollNum).'/101">Edit</a>
          <button type="button" class ="btn btn-danger" onclick = "delete1(\''.$c->rollNum.'\',\'101\')">Disenroll</button>

            </td>
            </tr>';
            $studentCount += 1;
            
            }
          ?> 
           </table>

         <!--  <a class = "btn btn-danger" href="'.site_url('Admin/disenrollStudent/'.$c->rollNum).'/101">DisEnroll</a>-->

      <?php 
    }
      else  { ?>
        <h5>0 students enrolled<h5>
      <?php }  ?>
    </div>
  </div>
</div>
<script type="text/javascript">
  function delete1(htno, cid){
    var url = "<?php echo site_url('Admin/disenrollStudent/')?>";
    if(confirm("Are u sure to disenroll ?"))
      window.location.href = url+htno+"/"+cid;

  }
</script>