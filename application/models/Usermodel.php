<?php
class Usermodel extends CI_Model {
public function __construct()
    {
        parent::__construct();
       
    }

    function getUser()
    {

//sainath
        $this->db->reconnect();
        $username = $_SESSION['username'];
        $this->load->database();
        $this->db->select("rollNum");
        $this->db->from('users');
        $this->db->where(array('username'=>$username));
        $query = $this->db->get();
        
        return $query;
    }
    function enrolledCourses()
    {
        
//sainath
        $this->db->reconnect();
        $query= NULL;  
        $roll=  $_SESSION['rollNum'];
        $this->load->database();
        $this->db->select("*");
        $this->db->from('register');
        $this->db->where(array('rollNum'=>$roll ));
        $query = $this->db->get();
        return $query;
    }
}    ?>