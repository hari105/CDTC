<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	function index()
	{
		$this->load->view('AdminView');
	}

	function adminLogin()
	{
		$this->load->database();
		$this->load->model('Authmodel');

		$adminUserName = $_POST['adminUserName'];
		$adminPassword = $_POST['adminPassword'];

		$res = $this->Authmodel->adminLogin(array('adminUserName' => $adminUserName,'adminPassword' => $adminPassword ));
		if ($res) {
			$this->session->set_flashdata('adminLoginSuccess','<div class="alert alert-success">Login Success!</div>');
			$_SESSION['admin'] = TRUE;
			$_SESSION['adminUserName'] = $adminUserName;

			redirect('Admin/adminProfile','refresh');
		}
		else{
			$this->session->set_flashdata('adminLoginFailed','<div class="alert alert-danger">Invalid Credentials!</div>');
			redirect('Admin','refresh');
		}
	}

	function adminProfile()
	{
		$this->load->model('Coursesmodel');
		$this->load->view('common/header');
		$this->data['c101'] = $this->Coursesmodel->getRegisteredStudents('101');
		$this->load->view('courses/c101',$this->data);
		$this->data['c102'] = $this->Coursesmodel->getRegisteredStudents('102');
		$this->load->view('courses/c102',$this->data);

		$this->data['c103'] = $this->Coursesmodel->getRegisteredStudents('103');
		$this->load->view('courses/c103',$this->data);
		$this->data['c104'] = $this->Coursesmodel->getRegisteredStudents('104');
		$this->load->view('courses/c104',$this->data);

		$this->data['c105'] = $this->Coursesmodel->getRegisteredStudents('105');
		$this->load->view('courses/c105',$this->data);
		$this->data['c106'] = $this->Coursesmodel->getRegisteredStudents('106');
		$this->load->view('courses/c106',$this->data);

		$this->data['c107'] = $this->Coursesmodel->getRegisteredStudents('107');
		$this->load->view('courses/c107',$this->data);

		$this->load->view('common/footer.php');
		
	}

}

?>