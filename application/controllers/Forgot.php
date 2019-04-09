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


                        $to=$email;
                        $subject = "CDTC Credentials";
                       $message = "HallTicket No : ".$result->rollNum."\nPassword : ".$result->dupPwd;
                        
                        $headers = "From: sainathomdas@gmail.com" ;
                        $headers .= "MIME-Version:1.0". "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";


                        //sending mail 
                        if(mail($to,$subject,$message,$headers ))
                        {
                            $this->session->set_flashdata('pwdSendingSucess','Credentials have been sent to '.$result->email);
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