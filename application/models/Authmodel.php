<?php

class Authmodel extends CI_Model {
    public function __construct() {
        parent:: __construct();
    }


    function adminLogin($data)
    {
    		$res = $this->db->get_where('admins',array('AdminUserName'=>$data['adminUserName'],'password'=>$data['adminPassword']));
    		if(count($res->result_array()) > 0)
				return 1;
			else
				return 0;
    }
}




?>
