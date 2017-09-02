<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('encryption');
	}
	public function index(){
		$this->load->view('login');
	}

	public function submit_login(){
		$username = $this->input->post("username");
		$password =  $this->encryption->decode_x($this->input->post("password"));
		$query = $this->db->query("select * from adm_login where username = '$username'  ");
		if($query->num_rows() > 0){
			foreach($query->result() as $userdata) {
				$data = array(
						'user_id'     	=> $userdata->id,
						'email'     	=> $userdata->email,
						'username'  	=> $userdata->username,
						'nama_lengkap'  	=> $userdata->nama_lengkap,
						'userlevel'     => $userdata->userlevel,
						'img'     => $userdata->img,
					);
					$this->session->set_userdata($data);
					//$this->db->close();
					$_SESSION['KCFINDER']=array();
				  $_SESSION['KCFINDER']['disabled'] = false;
				  $_SESSION['KCFINDER']['uploadURL'] = "http://localhost/pht/image_property";
				  $_SESSION['KCFINDER']['uploadDir'] = "http://localhost/pht/image_property";
					echo '1';
			}
		}else{
			//$this->session->set_flashdata('failed','ok');
			echo '0';
		}
	}

	public function logout(){
		echo $this->session->sess_destroy();
		//header('location:index.php');
		$this->load->view('logout');
	}
}
