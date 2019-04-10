<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Edit Student</title>
</head>

<body style="background-color: rgba(14, 56, 101, 0.8);">

  <div class="container mx-auto" style="margin-top: 5%;">

    <div class="container" >
      <div class="jumbotron" style="background-color: white;">

        <form class="form-horizontal" method="POST" action = "<?php echo site_url('Admin/updateStudentDetails')?>">
          <fieldset>

            <!-- Form Name -->
            <center>
              <legend style="color: blue;">Edit Student Details</legend>
            </center>

            <?php $this->session->flashdata('errorInUpdation'); ?>
            <!-- Text input-->

            <div class="form-group" >
              <label class="col-md-4 control-label" for="textinput">Student HtNo : </label>
              <div class="col-md-4">

                <input style="color:black;" id="textinput" name="htno" placeholder="htno" class="form-control input-md" value="<?php echo $details->rollNum; ?>" type="text" readonly>

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Student Name :</label>
              <div class="col-md-4">
                <input id="textinput" name="studentName" placeholder="Student Name*" class="form-control input-md" required="" type="text" value="<?php echo $details->username; ?>">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Student email :</label>
              <div class="col-md-4">
                <input id="textinput" name="studentEmail" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $details->email; ?>">

              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
             
              <div class="col-md-8">
                <a class="btn btn-primary" href="<?php echo site_url('Admin/adminProfile');?>">Cancel</a>
                <input type="submit" value="Update" class="btn btn-success">
              </div>
            </div>

          </fieldset>
        </form>
        </form>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>