<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class not_found extends CI_Controller {
	public function index() {
			 $data = array();
			 $this->load->view('admin/404', $data);
	 }
}
