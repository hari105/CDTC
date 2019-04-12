<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user-logged'])) {
                $this->session->set_flashdata('error', 'Please log in ! ');
                //$_SESSION["error"] = "Please log in !";
                redirect('auth/login');
            }
        $this->load->database();
    }



    public function registeredCourses()
    {
        $this->load->model('Coursesmodel');
        $this->data['courses'] = $this->Coursesmodel->enrolledCourses();


        $this->load->view('registeredCourses', $this->data);
    }

    function studentProfile()
    {
        $htno = $_SESSION['rollNum'];
        $this->load->model('Usermodel');
        $this->data['studDetails'] = $this->Usermodel->getStudentDetails($htno);
        $this->load->view('studentProfile', $this->data);
    }

    function updateStudentDetails()
    {
        $studName = $_POST['studentName'];
        $htno = $_SESSION['rollNum'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $this->load->model('Usermodel');


        $res = $this->Usermodel->updateStudentDetails($htno, $studName, $phone);
        if ($res) {
            $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-success">Profile Updated</div>');
            //      redirect('user/studentProfile','refresh');
        } else {
            $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-danger">An unknown error occured</div>');
            //     redirect('user/studentProfile','refresh');
        }

        $studDetails = $this->Usermodel->getStudentDetails($htno);

        if (!($email == $studDetails->email)) {
            $vkey = md5(time() . $_POST['rollNum']);
            $emailUpdateResult = $this->Usermodel->updateStudentemail($htno, $email, $vkey);
            if ($emailUpdateResult) {

                //mail
                $to = $email;
                $subject = "CDTC email Verification";
                $message = '<a href="https://cdtccvsr.000webhostapp.com/index.php/Auth/Verify?vkey=' . $vkey . '">Click here</a> to activate your account';
                $headers = "From: sainathomdas@gmail.com";
                $headers .= "MIME-Version:1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                if (mail($to, $subject, $message, $headers)) {
                    $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-success">Profile Updated and a verification mail has been sent to ' . $email . '</div>');
                    //        redirect('user/studentProfile','refresh');
                }
            } else {
                $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-danger">An unknown error occured</div>');
                //      redirect('user/studentProfile','refresh');
            }
        }


      
           

            if(isset($_POST['oldPassword']) and isset($_POST['newPassword']) and isset($_POST['confoPassword'])){
            $oldPassword = $_POST['oldPassword'];
            $newPassword = $_POST['newPassword'];
            $confoPassword = $_POST['confoPassword'];

        if ($newPassword != $confoPassword) {
            $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-danger">New and Confirm Passwords did not match!</div>');
            redirect('user/studentProfile', 'refresh');
        }

        $actualPassword = $studDetails->password;   //actual password is in md5 format
        if (!($actualPassword == md5($oldPassword))) {
            $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-danger">Incorrect Current password!</div>');
            redirect('user/studentProfile', 'refresh');
        }
        if ($actualPassword == md5($oldPassword)) {
            $oldPasswordUpdateResult = $this->Usermodel->updateStudentPassword($htno, $confoPassword);
            if ($oldPasswordUpdateResult) {
                $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-success">Profile Updated.</div>');
            } else
                $this->session->set_flashdata('studentProfileUpdateResult', '<div class="alert alert-danger">An unknown error occured!</div>');

        }
    }


        redirect('user/studentProfile', 'refresh');
    }
}
