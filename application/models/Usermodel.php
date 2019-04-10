<?php
class Usermodel extends CI_Model
{
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
        $this->db->where(array('username' => $username));
        $query = $this->db->get();

        return $query;
    }
    function enrolledCourses()
    {

        //sainath
        $this->db->reconnect();
        $query = NULL;
        $roll =  $_SESSION['rollNum'];
        $this->load->database();
        $this->db->select("*");
        $this->db->from('register');
        $this->db->where(array('rollNum' => $roll));
        $query = $this->db->get();
        return $query;
    }

    function getStudentDetails($htno)
    {

        //sainath
        $this->db->reconnect();
        $this->load->database();
        $query = $this->db->query('SELECT * FROM users WHERE `rollNum` = "'.$htno.'"');
        return $query->row();
        
    }


    function updateStudent($htno,$studentName,$studentEmail)
    {
        //sainath
        $this->db->reconnect();
        $this->load->database();

        $data = array(
            'username' => $studentName,
            'email' => $studentEmail
    );
    
    $this->db->where('rollNum', $htno);
    if($this->db->update('users', $data))
        return TRUE;
    return FALSE;
    }

    function disenrollStudent($htno,$cid){
        $sql = "DELETE from register where `rollNum` = '".$htno."' and `courseID` = ".$cid;
        if($this->db->query($sql))
            return TRUE;
        return FALSE;
    }
}
