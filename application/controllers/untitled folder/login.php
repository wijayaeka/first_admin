<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['main_content'] = 'login';
		$this->load->view('template', $data);
	}
	public function submit(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		if(!empty($email) && !empty($password)){
				$query = mysql_query("select * from users where email = '$email' and password = '$password'");
				if(mysql_num_rows($query) > 0){
					$userdata = mysql_fetch_array($query);
					$data = array(
						'user_id'     	=> $userdata['id'],
						'email'     	=> $userdata['email'],
						'nama_lengkap'  => $userdata['first_name']." &nbsp;".$userdata['last_name'],
						'gender'     	=> $userdata['gender'],
						'is_logged_in' 	=> true
					);
					$this->session->set_userdata($data);
					redirect('welcome');	
				}else{
					$this->session->set_flashdata('failed', 'Category added');
					redirect('login');	
				}
		}else{
			$this->session->set_flashdata('failed', 'Category added');
			redirect('login');	
		}
	}
	public function logout(){
		
		$this->session->sess_destroy();
		redirect('welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */