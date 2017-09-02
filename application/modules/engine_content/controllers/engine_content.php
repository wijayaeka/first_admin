<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class engine_content extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('encryption');
		$this->load->library('phpmailer');
	}

	/*public function index(){
		if(empty($this->session->userdata('user_id'))){
                       		redirect("login");
                       	}else{
		//$data['main_content'] = 'artikel';
		$data['artikel'] = $this->get_artikel();
		$this->load->view('admin/template', $data);
						}
	}*/
	public function index() {
			 $data = array();
			// $data['mainContent']    = 'index';
			 $this->load->view('admin/template', $data);
	 }

}
