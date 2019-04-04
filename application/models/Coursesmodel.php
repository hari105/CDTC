<?php
class Coursesmodel extends CI_Model {
public function __construct()
    {
        parent::__construct();
    }

    function getCourses()
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from('courses');
        $query = $this->db->get();
        return $query;
    }
    function courseRegister()
    {
        if(isset($_POST['cregister']))
        {
			
			$this->form_validation->set_rules('rollNum', 'Roll No', 'trim|required');
			$this->form_validation->set_rules('courseID', 'courseID', 'trim|required');  
		
			
			if( $this->form_validation->run() ==TRUE)
           {
				//echo 'form validated';
				$cData= array (

					'rollNum'=> $_POST['rollNum'],
					'courseID'=> $_POST['courseID'],
					'enroll'=>date('y-m-d')
					
					
				);
				$val=$this->Coursesmodel->checkCourse($cData);
				if($val) {
					$this->db->insert('register',$cData); 

					//$_SESSION["registered"] = "You have been registerd";
					$this->session->set_flashdata('registered','You have been registerd');
					redirect('Courses/register','refresh');
				}
			}
		}
    }
    function checkCourse($cdata)
    {
       
         $query = null; 
         $query = $this->db->get_where('register', array(//making selection
             'rollNum' => $cdata['rollNum'],
             'courseID'=>$cdata['courseID']
         ));
 
         $count = $query->num_rows(); 
 
         if ($count > 0) {
            //$_SESSION["error"] = "already registered";
            $this->session->set_flashdata('error','Already registered');
             return false;
         }
 

        return true;
    }
    function enrolledCourses()
    {
        $query= NULL;  
        $roll=  $_SESSION['rollNum'];
        $this->load->database();
        $this->db->select("courses.courseName");
        $this->db->from(array('courses'));
        $this->db->where(array('register.rollNum'=>$roll ));
        $this->db->join('register ','courses.courseID=register.courseID');

        $query = $this->db->get();
        return $query->result();
    }
   

}    ?>