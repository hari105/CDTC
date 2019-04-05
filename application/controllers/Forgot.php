<?php 
class Forgot extends CI_Controller 
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		/*load database libray manually*/
		$this->load->database();
		$this->load->library('session');
		$this->load->library('email');
		$config = array();
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'xxx';
$config['smtp_user'] = 'xxx';
$config['smtp_pass'] = 'xxx';
$config['smtp_port'] = 25;
$this->email->initialize($config);
		/*load Model*/
		$this->load->helper('url');
		//$this->load->model('Hello_model');
	}
	
   public function forgot_pass()
	{
		if($this->input->post('forgot_pass'))
		{
			$email=$this->input->post('email');
			$que=$this->db->query("select password,email from users where email='$email'");
			$row=$que->row();
			$user_email=$row->email;
			if((!strcmp($email, $user_email))){
			$password=$row->password;
				/*Mail Code*/
				$to = $user_email;
				$subject = "Password";
				$txt = "Your password is $password .";
				$headers = "From: 16h61a0593@cvsr.ac.in" . "\r\n" .
				"CC: 16h61a0593@cvsr.ac.in";

				mail($to,$subject,$txt,$headers);
				}
			else{
			$data['error']="
Invalid Email ID !
";
			}
		
	}
	   $this->load->view('forgotpass',@$data);	
   }


	            
}
?>