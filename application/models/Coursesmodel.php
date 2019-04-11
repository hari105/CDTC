<?php
class Coursesmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getCourses()
    {
        //sainath
        $this->db->reconnect();
        $this->load->database();

        $this->db->select("*");
        $this->db->from('courses');
        $query = $this->db->get();
        return $query;
    }

    function checkStatus($data)
    {
        //sainath
        $this->db->reconnect();
        $query = $this->db->get_where('register', array( //making selection
            'rollNum' => $data['htno'],
            'courseID' => $data['courseID']
        ));
        $count = $query->num_rows();
        if ($count > 0)
            return true;
        return false;
    }

    function enroll($data)
    {




        date_default_timezone_set('Asia/Kolkata');
        $d = array(
            'rollNum' => $data['htno'],
            'courseID' => $data['courseID'],
            'enrolledDate' => date('y-m-d')
        );
        $res = $this->db->insert('register', $d);
        if ($res)
            return true;
        return false;
    }

    function enrolledCourses()
    {
        $query = NULL;
        $roll =  $_SESSION['rollNum'];

        //sainath
        $this->db->reconnect();
        $this->load->database();
        $this->db->select("courses.courseName");
        $this->db->from(array('courses'));
        $this->db->where(array('register.rollNum' => $roll));
        $this->db->join('register ', 'courses.courseID=register.courseID');
        $query = $this->db->get();
        return $query->result();
    }

    function getRegisteredStudents($cid)
    {
        $this->db->reconnect();
        $this->load->database();
        $query = $this->db->query('select register.rollNum,register.enrolledDate,users.username from register,users,courses where courses.courseID = ' . $cid . ' and courses.courseID = register.courseID and register.rollNum = users.rollNum');
        return $query->result();
    }
}
