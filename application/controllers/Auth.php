<?php

class Auth extends CI_Controller 
{

    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        /*load database libray manually*/
        $this->load->database();
        $this->load->library('session');
        $this->load->library('email');
        
        /*load Model*/
        $this->load->helper('url');
        //$this->load->model('Hello_model');
    }
    
    public function logout(){
        //unset($_SESSION);
        session_destroy();
        redirect('auth/login','refresh');   
    }

    public function register()
    {
        //view
        /*load database libray manually*/

    //sainath
    $this->db->reconnect();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('email');
        
        /*load Model*/
        $this->load->helper('url');

        if(isset($_POST['register']))
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');   
            $this->form_validation->set_rules('rollNum', 'Roll No', 'trim|required|is_unique[users.rollNum]');   
            $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');   
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');  
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');


            if( $this->form_validation->run() ==TRUE)
            {
                    //echo 'form validated';
                $roll = $_POST["rollNum"];
                if (!preg_match("/^[0-9][0-9][h,H][0-9][0-9][a,A][0-9][0-9][0-9A-za-z][0-9]+$/",$roll)) {
                    $this->session->set_flashdata('error','Incorrect Roll No.');
                    redirect('auth/register','refresh');
                } 

                $vkey= md5(time().$_POST['rollNum']);
                $user_email = $_POST['email'];

                $data= array (
                    'rollNum'=> $_POST['rollNum'],
                    'username'=> $_POST['username'],
                    'email'=> $_POST['email'],
                    'password'=> md5($_POST['password']),
                    'gender'=> $_POST['gender'],
                    'createdDate'=>date('y-m-d'),
                    'phone'=> $_POST['phone'],
                    'vkey' => md5(time().$_POST['rollNum']),
                    'verified' => '0',
                    'dupPwd' => $_POST['password']
                );  

                $this->db->insert('users',$data); 

                $to=$user_email;
                $subject = "CDTC email Verification";
                $message ="Click on the following link to activate your account:: ";
                $message .= "https://cdtccvsr.000webhostapp.com/index.php/Auth/Verify?vkey=$vkey";
                $headers = "From: sainathomdas@gmail.com" ;
                $headers .= "MIME-Version:1.0". "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";


                        //sending mail 
                if(mail($to,$subject,$message,$headers ))
                {
                    $this->session->set_flashdata('success','Thank you for registration. We have sent you a verification link.');
                            //$_SESSION["succes"] = "Your account has been registerd";
                    redirect('auth/register','refresh');
                }



            }
            else
            {
                $this->session->set_flashdata('error','User already exists!');

                
                redirect('auth/register','refresh');


            }


        }
        if ( isset($_SESSION['user-logged']) )
        {
            redirect('user/profile','refresh');
        }
        $this->load->view("register");



    }

    public function Verify()
    {
        if(isset($_GET['vkey'])) {
            $vkey= $_GET['vkey'];

    //sainath
    $this->db->reconnect();

            $que=$this->db->query("SELECT verified,vkey from users where verified = 0 and vkey='$vkey' LIMIT 1");
            $row=$que->row();
            if($row)
            {
                $user_vkey=$row->vkey;
                if((!strcmp($vkey, $user_vkey)))
                {
                 $update = $this->db->query("UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
                 if($update)
                 {
                    $this->session->set_flashdata('success','Your Account is Verified, Please Login now');

                    redirect('auth/login','refresh');
                }
                else
                {
                    $this->session->set_flashdata('error','Unknown error occured.Please try again!');
                    //$_SESSION["succes"] = "Your account has been registerd";
                    redirect('auth/login','refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('error','The link was expired!');
                    
                redirect('auth/register','refresh');
            }
        }
        else{
             $this->session->set_flashdata('error','This Account is invalid or already Verified.');
                    //$_SESSION["succes"] = "Your account has been registerd";
                redirect('auth/register','refresh');
            }
        }
    
    else
    {
        $this->session->set_flashdata('error','Something Went Wrong');
                    //$_SESSION["succes"] = "Your account has been registerd";
        redirect('auth/register','refresh');
    }
}

public function login()
{

   $this->load->view("login");

   $this->form_validation->set_rules('rollNum', 'RollNum', 'trim|required');   
   $this->form_validation->set_rules('password', 'password', 'required');

   if( $this->form_validation->run() ==TRUE)
   {
    $rollNum = $_POST['rollNum'];
    $password = md5($_POST['password']);

    //sainath
    $this->db->reconnect();

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where(array('rollNum'=>$rollNum));
    $query = $this->db->get();
    $user = $query->row();



    if($user != NULL ){

        $que=$this->db->query("SELECT * from users where rollNum = '$rollNum' ");
        $row=$que->row();
        $verified=$row->verified;
        if($user -> email){

            if( $password === $user->password) 
            {

                if($verified) {

                    $_SESSION["success"] = "You're logged in";
                    $_SESSION['user-logged'] = TRUE ;
                    $_SESSION['username'] = $user->username;
                    $_SESSION['rollNum'] = $user->rollNum;

                    if($user != NULL )
                    {
                        if($user -> email){
                    // $this->session->set_flashdata('success','YOure logged in' );
                            if( $password === $user->password) 
                            {
                                $_SESSION["success"] = "You're logged in";
                                $_SESSION['user-logged'] = TRUE ;
                                $_SESSION['username'] = $user->username;
                                $_SESSION['rollNum'] = $user->rollNum;


                                redirect('user/profile','refresh');
                            }
                            else {
                                $this->session->set_flashdata('error', 'InCorrect password');
                                                //$_SESSION["error"] = "No account Found.";
                                redirect('auth/login','refresh');
                            }
                        }


                    }
                    else{
                       $this->session->set_flashdata('error','Incorrect Credentials');

                       redirect('auth/login','refresh');
                   }
               }
               else {  
                $roll = $_POST['rollNum'];
                $query=$this->db->query("SELECT createdDate from users where verified = 0 and rollNum='$roll' LIMIT 1");
                $r=$query->row();
                $this->session->set_flashdata('error','Your Account is not Verified Yet.Please click on the link which was sent to your mail on '.$r->createdDate.' (yy-mm-dd)');

                redirect('auth/login','refresh');
            }


            if ( isset($_SESSION['user-logged']) )
            {
                redirect('user/profile','refresh');
            }


        }
        else{
            $this->session->set_flashdata('error', 'Incorrect password');
                                                //$_SESSION["error"] = "No account Found.";
            redirect('auth/login','refresh');
        }

    }


}
else{
  $this->session->set_flashdata('error','No Account found.');

  redirect('auth/login','refresh');
}
}
}
}



?>
