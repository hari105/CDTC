<?php
class User extends CI_Controller {

        public function __construct()
        {
            parent:: __construct();
            if(!isset($_SESSION['user-logged']))
            {
                $this->session->set_flashdata('error','Please log in ! ');
                //$_SESSION["error"] = "Please log in !";
                redirect('auth/login');
            }
            $this->load->database();
           
        }

    
    
        public function profile()
        {
            $this->load->model('Coursesmodel');
            $this->data['courses']= $this->Coursesmodel->enrolledCourses();
            
            
            $this->load->view('profile',$this->data);
        }

      
}

?>