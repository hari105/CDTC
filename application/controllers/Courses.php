<?php
/**
 * 
 */
class Courses extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Coursesmodel');
		$this->load->model('Usermodel');

    }

	function index()
	{
		$this->load->view('courses');
	}

	function register()
	{
		$this->Coursesmodel->courseRegister();
		
		if ( ! isset($_SESSION['username']) )
		{
			$_SESSION["error"] = "Please log in !";
			redirect('auth/login','refresh');
		}
		//$data['courses'] = $this->Coursesmodel->getCourses();
		//$data1['user']= $this->Usermodel->getUser();

		$data= array (
			'courses'=> $this->Coursesmodel->getCourses(),
			'user'=> $this->Usermodel->getUser()
			
		);
		
		$this->load->view('courseregister',$data);
	}

	function static()
	{
		$this->load->view('static.php');
	}
	function dynamic()
	{
		$this->load->view('dynamic.php');
	}
	function mobileapp()
	{
		$this->load->view('mobileapp.php');
	}
	function blockchain()
	{
		$this->load->view('blockchain.php');
	}
	function iotapp()
	{
		$this->load->view('iotapp.php');
	}
	function iotCourse()
	{
		$this->load->view('iotCourse.php');
	}
	function malaiCourse()
	{
		$this->load->view('malaiCourse.php');
	}
	

}
?>