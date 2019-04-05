<?php

class Auth extends CI_Controller 
{


    public function logout(){
        //unset($_SESSION);
        session_destroy();
        redirect('auth/login','refresh');   
    }

    public function register()
    {
        //view
     

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
                    if (!preg_match("/^[0-9][0-9]H[0-9][0-9]A[0-9][0-9][0-9A-za-z][0-9]+$/",$roll)) {
                        $this->session->set_flashdata('error','incorrect Rol');
                        redirect('auth/register','refresh');
                    } 
                    $data= array (
                        'rollNum'=> $_POST['rollNum'],
                        'username'=> $_POST['username'],
                        'email'=> $_POST['email'],
                        'password'=> md5($_POST['password']),
                        'gender'=> $_POST['gender'],
                        'createdDate'=>date('y-m-d'),
                        'phone'=> $_POST['phone']
                        
                        
                    );
                    $this->db->insert('users',$data); 

                    $this->session->set_flashdata('success','Your account has been registerd');
                    //$_SESSION["succes"] = "Your account has been registerd";
                    redirect('auth/register','refresh');
                }


                }
                    if ( isset($_SESSION['user-logged']) )
                    {
                        redirect('user/profile','refresh');
                    }
                $this->load->view("register");
       

    
    }

    public function login()
    {

        
        $this->form_validation->set_rules('rollNum', 'RollNum', 'trim|required');   
        $this->form_validation->set_rules('password', 'password', 'required');

        if( $this->form_validation->run() ==TRUE)
           {
            $rollNum = $_POST['rollNum'];
            $password = md5($_POST['password']);
            
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('rollNum'=>$rollNum));
            $query = $this->db->get();
            $user = $query->row();
                if($user != NULL )
                {
                    if($user -> email){
                    // $this->session->set_flashdata('success','YOure logged in' );
                        if( $password === $user->password) 
                        {
                            $_SESSION["success"] = "YOure logged in";
                            $_SESSION['user-logged'] = TRUE ;
                            $_SESSION['username'] = $user->username;
                            $_SESSION['rollNum'] = $user->rollNum;

                            redirect('user/profile','refresh');
                        }
                        else
                        {
                            $this->session->set_flashdata('error','Incorrect Password.');
                            //$_SESSION["error"] = "Incorrect Password.";
                            redirect('auth/login','refresh');
                        }
                    }
                   }
                      else {
                    $this->session->set_flashdata('error','No account Found.');
                        //$_SESSION["error"] = "No account Found.";
                        redirect('auth/login','refresh');
                    }
                
                    if ( isset($_SESSION['user-logged']) )
                    {
                        redirect('user/profile','refresh');
                    }
                
           }
           
        $this->load->view("login");
    }
}

?>
