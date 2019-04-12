	<?php $this->load->view('common/header.php') ?>

	<style>
	    *[role="form"] {
	        max-width: 530px;
	        padding: 15px;
	        margin: 0 auto;
	        border-radius: 0.3em;
	        background-color: #f2f2f2;
	    }

	    *[role="form"] h2 {

	        font-size: 40px;
	        font-weight: 600;
	        color: #000000;
	        margin-top: 5%;
	        text-align: center;
	        text-transform: uppercase;
	        letter-spacing: 4px;
	    }
	</style>
    <div class="container" style="margin-bottom: 2%;">
    
    <?php echo $this->session->flashdata('studentProfileUpdateResult');?>
	    <form class="form-horizontal" role="form" action="<?php echo site_url('User/updateStudentDetails');?>" method="POST" >
	        <h2>Profile</h2>
	        <div class="form-group">
	            <label for="studentName" class="col-sm-6 control-label">Student Name</label>
	            <div class="col-sm-9">
                    <input type="text" id="studentName" name="studentName" placeholder="Student Name" class="form-control" autofocus readonly
                    value="<?php echo $studDetails->username;?>" required
                    >
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="studentHtno" class="col-sm-6 control-label">Hallticket No.</label>
	            <div class="col-sm-9">
                    <input type="text" id="studentHtno" name="studentHtno" placeholder="Hallticket Num" class="form-control" autofocus readonly
                    value="<?php echo $studDetails->rollNum;?>"
                    >
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="email" class="col-sm-6 control-label">Email </label>
	            <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email" readonly
                    value="<?php echo $studDetails->email;?> " required
                    >
                    <span style="margin-left: 3%;font-size:14px;display:none;" id="changeMailText">Changing the email includes verification</span>
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="phoneNumber" class="col-sm-6 control-label">Phone number </label>
	            <div class="col-sm-9">
                    <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" name="phone" class="form-control" readonly
                    value="<?php echo $studDetails->phone;?>" required
                    >
	            </div>
            </div>
            <button type="button" class="btn btn-link" onclick="changePassword()" id="changePwdText" style="display:none;">Change Password</button>
            <div style="display: none;" id="passwordDiv">
            <div class="form-group">
	                <label for="password" class="col-sm-6 control-label">Current Password*</label>
	                <div class="col-sm-9">
	                    <input type="password" id="currentPassword" placeholder="Current Password" name="oldPassword" class="form-control" disabled required >
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="newPassword" class="col-sm-6 control-label">Password*</label>
	                <div class="col-sm-9">
	                    <input type="password" id="newPassword" placeholder="New Password" name="newPassword" class="form-control" disabled required>
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="confoPassword" class="col-sm-6 control-label">Confirm Password*</label>
	                <div class="col-sm-9">
	                    <input type="password" id="confoPassword" placeholder="Retype Password" name="confoPassword" class="form-control" disabled required>
	                </div>
	            </div>
	        </div>
           
            <br>
            <div style="margin-left: 3%;"> 
            <button type="button" onclick="cancel()" class="btn btn-warning" id="cancelBtn" style="color:white;float:right;display:none;">Cancel</button>
            <button type="submit" class="btn btn-success" style="display:none" id="submitBtn">Save</button>
            <button type="button" onclick="edit()" class="btn btn-info" id="editBtn">Edit</button>
           
            </div>
	    </form> <!-- /form -->
    </div> <!-- ./container -->
    
    <script type="text/javascript">
    function changePassword(){
        document.getElementById('passwordDiv').style.display = 'block';
        document.getElementById('changePwdText').style.display = 'none';
        document.getElementById('currentPassword').disabled = false;
        document.getElementById('newPassword').disabled = false;
        document.getElementById('confoPassword').disabled = false;
    }

    function edit(){
        document.getElementById('studentName').removeAttribute("readonly");
        document.getElementById('email').removeAttribute("readonly");
        document.getElementById('phoneNumber').removeAttribute("readonly");
        document.getElementById('changeMailText').style.display='block';
        document.getElementById('changePwdText').style.display='block';
        document.getElementById('cancelBtn').style.display='flex';
        document.getElementById('editBtn').style.display='none';
        document.getElementById('submitBtn').style.display='flex';
    }

    function cancel(){
        document.getElementById('studentName').setAttribute("readonly", true);
        document.getElementById('email').setAttribute("readonly", true);
        document.getElementById('phoneNumber').setAttribute("readonly", true);
        document.getElementById('changeMailText').style.display='none';
        document.getElementById('changePwdText').style.display='none';
        document.getElementById('cancelBtn').style.display='none';
        document.getElementById('editBtn').style.display='flex';
        document.getElementById('submitBtn').style.display='none';
        document.getElementById('passwordDiv').style.display = 'none';
        document.getElementById('currentPassword').disabled = true;
        document.getElementById('newPassword').disabled = true;
        document.getElementById('confoPassword').disabled = true;
       location.reload();
    }
    
    </script>

	<?php $this->load->view('common/footer.php') ?>