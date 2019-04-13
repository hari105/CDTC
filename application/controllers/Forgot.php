<?php 
class Forgot extends CI_Controller 
{
	 function index()
		            {
		            	$this->load->view('forgotPassword');
		            }
	public function sendCredentials()
		            {
		            	$this->load->database();
		            	$htno = $_POST['htno'];
 
    //sainath
    $this->db->reconnect();
            
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('rollNum'=>$htno));
            $query = $this->db->get();
            $result = $query->row();
            $email = $result -> email;


                   
                       
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
                       $mail->Subject = 'CDTC Credentials';
                       $mail->Body =  "HallTicket No : ".$result->rollNum."<br>Password : ".$result->dupPwd;
                        //sending mail 
                        if($mail->send())
                        {
                            $this->session->set_flashdata('pwdSendingSucess','Credentials have been sent to '.$result->email.'Please do check in spam mails also.');
                            //$_SESSION["succes"] = "Your account has been registerd";
                             redirect('Forgot','refresh');
                        }
                    
                    
                   
                
                else
                {
                    $this->session->set_flashdata('pwdSendingError','Something went wrong. Please try after sometime.');


                    //$this->session->set_flashdata('success','Your account has been registered');
                
                     redirect('Forgot','refresh');


                }

		            }	            
}
?>