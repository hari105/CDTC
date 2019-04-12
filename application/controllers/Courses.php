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

		if (!isset($_SESSION['user-logged'])) {

			$_SESSION["error"] = "Please log in !";
			redirect('auth/login', 'refresh');
		}

		$data = array('courses' => $this->Coursesmodel->getCourses());

		$this->load->view('registerIntoCourse', $data);
	}


	function enrollIntoCourse()
	{
		$htno = $_POST['htno'];
		$courseID = $_POST['courseID'];
		$password = $_POST['password'];

		//sainath
		$this->db->reconnect();
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('rollNum' => $htno));
		$query = $this->db->get();
		$res = $query->row();



		if (md5($password) === $res->password) {
			$status = $this->Coursesmodel->checkStatus(array('htno' => $htno, 'courseID' => $courseID));
			if ($status) {
				$this->session->set_flashdata('enrollmentFailed', '<div class="alert alert-danger">Already registered</div>');
				redirect('Courses/register', 'refresh');
			} else {
				$res = $this->Coursesmodel->enroll(array('htno' => $htno, 'courseID' => $courseID));
				if ($res) {
					$this->session->set_flashdata('enrollmentSuccess', '<div class="alert alert-success">You have been registered successfully!</div>');


					$this->db->select('*');
					$this->db->from('users');
					$this->db->where(array('rollNum' => $htno));
					$query = $this->db->get();
					$result = $query->row();
					$email = $result->email;

					$this->db->select('*');
					$this->db->from('courses');
					$this->db->where(array('courseID' => $courseID));
					$q = $this->db->get();
					$r = $q->row();
					$courseName = $r->courseName;

					require_once('PHPMailer/PHPMailerAutoload.php');
					$mail = new PHPMailer;
					$mail->isSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 587;
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = 'tls';
					$mail->Username = 'dummysainath@gmail.com';
					$mail->Password = 'trend123';
					$mail->setFrom('dummysainath@gmail.com', 'CDTC-AGI');
					$mail->addAddress($email);
					$mail->isHTML(true);
					$mail->Subject = 'CDTC Course Enrollment';
					$mail->Body = 'Thank you for getting enrolled into "' . $courseName.'"';

					$mail->send();


					redirect('Courses/register', 'refresh');
				} else {
					$this->session->set_flashdata('enrollmentFailed', '<div class="alert alert-danger">An unknown error occured.Please try after sometime</div>');
					redirect('Courses/register', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('enrollmentFailed', '<div class="alert alert-danger">Incorrect Password</div>');
			redirect('Courses/register', 'refresh');
		}
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
