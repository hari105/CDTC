<?php

/**
 * 
 */
class Admin extends CI_Controller
{

	function index()
	{
		$this->load->view('AdminView');
	}

	function adminLogin()
	{
		$this->load->database();
		$this->load->model('Authmodel');

		$adminUserName = $_POST['adminUserName'];
		$adminPassword = $_POST['adminPassword'];

		$res = $this->Authmodel->adminLogin(array('adminUserName' => $adminUserName, 'adminPassword' => $adminPassword));
		if ($res) {
			$this->session->set_flashdata('adminLoginSuccess', '<div class="alert alert-success">Login Success!</div>');
			$_SESSION['admin'] = TRUE;
			$_SESSION['adminUserName'] = $adminUserName;

			redirect('Admin/adminProfile', 'refresh');
		} else {
			$this->session->set_flashdata('adminLoginFailed', '<div class="alert alert-danger">Invalid Credentials!</div>');
			redirect('Admin', 'refresh');
		}
	}

	function adminProfile()
	{

		if (!isset($_SESSION['admin'])) {
			$this->session->set_flashdata('adminLoginFailed', '<div class="alert alert-danger">Please Login!</div>');
			redirect('Admin', 'refresh');
		}
		$this->load->model('Coursesmodel');
		$this->load->view('common/header');
		$this->data['c101'] = $this->Coursesmodel->getRegisteredStudents('101');
		$this->load->view('courses/c101', $this->data);
		$this->data['c102'] = $this->Coursesmodel->getRegisteredStudents('102');
		$this->load->view('courses/c102', $this->data);

		$this->data['c103'] = $this->Coursesmodel->getRegisteredStudents('103');
		$this->load->view('courses/c103', $this->data);
		$this->data['c104'] = $this->Coursesmodel->getRegisteredStudents('104');
		$this->load->view('courses/c104', $this->data);

		$this->data['c105'] = $this->Coursesmodel->getRegisteredStudents('105');
		$this->load->view('courses/c105', $this->data);
		$this->data['c106'] = $this->Coursesmodel->getRegisteredStudents('106');
		$this->load->view('courses/c106', $this->data);

		$this->data['c107'] = $this->Coursesmodel->getRegisteredStudents('107');
		$this->load->view('courses/c107', $this->data);

		$this->load->view('courses/coursesFooter.php');
	}

	function editStudent($htno = 0, $cid = 0)	//htno and courseID are from url
	{

		$this->load->model('Usermodel');
		$this->data['details'] = $this->Usermodel->getStudentDetails($htno);
		$this->load->view('editStudent', $this->data);
	}

	function updateStudentDetails()
	{
		$htno = $_POST['htno'];
		$studentName = $_POST['studentName'];
		$studentEmail = $_POST['studentEmail'];

		$this->load->model('Usermodel');
		$res = $this->Usermodel->updateStudent($htno, $studentName, $studentEmail);
		if ($res) {
			$this->session->set_flashdata('errorInUpdation', '<div class="alert alert-success">Successfully Updated!</div>');
			redirect('Admin/adminProfile', 'refresh');
		} else {
			$this->session->set_flashdata('errorInUpdation', '<div class="alert alert-danger">An unknown error occured!</div>');
			redirect('Admin/editStudent', 'refresh');
		}
	}

	function disenrollStudent($htno = 0, $cid = 0)
	{
		$this->load->model('Usermodel');
		$res = $this->Usermodel->disenrollStudent($htno, $cid);
		if ($res) {
			redirect('Admin/adminProfile', 'refresh');

			$this->session->set_flashdata('errorInDisenrolling', '<div class="alert alert-success">Student has been disenrolled!</div>');
			redirect('Admin/adminProfile', 'refresh');
		} else {

			$this->session->set_flashdata('errorInDisenrolling', '<div class="alert alert-danger">An unknown error occured.Please try after sometime!</div>');
			redirect('Admin/adminProfile', 'refresh');
		}
	}




	function downloadExcel()
	{
		$this->load->model("Coursesmodel");
		$this->load->library("excel");

		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);
		$table_columns = array("S.No", "Student HtNo", "Student Name", "Enrolled on: (yyyy-mm-dd)", "Course ID", "Course Name");
		$column = 0;

		foreach ($table_columns as $field) {
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}
		$object->getActiveSheet()->getColumnDimension('A')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('B')->setWidth(15);
		$object->getActiveSheet()->getColumnDimension('C')->setWidth(25);
		$object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
		$object->getActiveSheet()->getColumnDimension('E')->setWidth(10);
		$object->getActiveSheet()->getColumnDimension('F')->setWidth(50);
		$object->getActiveSheet()->getStyle("A1:F1")->getFont()->setBold(true);


		$crs = $this->Coursesmodel->getCourses();
		$courses = $crs->result();
		$excel_row = 2;
		foreach ($courses as $c) {
			$sno = 1;
			$students = $this->Coursesmodel->getRegisteredStudents($c->courseID);

			foreach ($students as $s) {
				$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $sno);

				$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $s->rollNum);
				$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $s->username);
				$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $s->enrolledDate);
				$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $c->courseID);
				$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $c->courseName);
				$sno++;
				$excel_row++;
			}

			if (sizeof($students) > 0) {

				$excel_row += 1;
			}
		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Registered_Students.xlsx"');
		header('Cache-Control: max-age=0');
		$object_writer->save('php://output');
	}
}
