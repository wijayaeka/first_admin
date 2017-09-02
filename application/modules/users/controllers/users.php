<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $data = array(
				 'list_level'        =>$this->list_level()
			 );
			 $this->load->view('index', $data);
	 }
	 public function list_level(){
		$data = array();
		$query = $this->db->query("select * from adm_jabatan order by jbt_nama asc");
		foreach($query->result() as $x){
				$data[] = $x;
		}
		return $data;
		}

	 public function listUser(){
        $table = 'adm_login';
        $primaryKey = 'id';
        $columns = array(
        	array( 'db' => '`id`', 'dt' => 0, 'field' => 'id' ),
					array( 'db' => '`nama_lengkap`', 'dt' => 1, 'field' => 'nama_lengkap' ),
					array( 'db' => '`email`', 'dt' => 2, 'field' => 'email' ),
					array( 'db' => '`username`', 'dt' => 3, 'field' => 'username' ),
					array( 'db' => '`jbt_nama`', 'dt' => 4, 'field' => 'jbt_nama' ),
        );
		$joinQuery  = " from adm_login LEFT JOIN adm_jabatan on adm_login.userlevel = adm_jabatan.idx";
        $extraWhere = "";
				$orderBy = " id asc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $orderBy)
        );
    }


		/* Add New */
		public function add_new() {
				 $data = array('list_level'        => $this->list_level());
				 $this->load->view('add_new', $data);
		 }
		 public  function upload_gambar($img,$new_name,$url){
					$config['file_name'] = $new_name;
					$config['upload_path'] = $url;
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->upload->initialize($config);
					if($this->upload->do_upload($img)){
						return true;
					}else{
						 echo $this->upload->display_errors();
					}
				}
				public function getExtension($str) {

																 $i = strrpos($str,".");
																 if (!$i) { return ""; }
																 $l = strlen($str) - $i;
																 $ext = substr($str,$i+1,$l);
																 return $ext;
									}
		 public function save_new(){
			 $fullname = $this->security->sanitize_filename($this->input->post('fullname'), TRUE);
			 $email = $this->security->sanitize_filename($this->input->post('email'), TRUE);
			 $address = $this->security->sanitize_filename($this->input->post('address'), TRUE);
			 $phone = $this->security->sanitize_filename($this->input->post('phone'), TRUE);
			 $username = $this->security->sanitize_filename($this->input->post('username'), TRUE);
			 $password = md5($this->security->sanitize_filename($this->input->post('password'), TRUE));
			 $userlevel = $this->security->sanitize_filename($this->input->post('userlevel'), TRUE);
			 $foto = $username.'-'.rand(1,2);
			 $ext = $this->getExtension($_FILES['foto']['name']);
			 $data = array(
						'userid'	=> $username,
						'password'	=> $password,
						'email'	=> $email,
						'userlevel'	=> $userlevel,
						'userid'	=> $username,
						'username'	=> $username,
						'status'		=> 'active',
						'nama_lengkap'	=> $fullname,
						'no_tlp'	=> $phone,
						'alamat'	=> $address,
				);
				if($this->getExtension($_FILES['foto']['name']) != ''){
 				$ext = array("img" => "$foto.$ext");
 				$data = array_merge($data,$ext);
 				$this->upload_gambar('foto',$foto,'assets/usr_img');
 			}
			echo $this->db->insert('adm_login',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('id',$id);
			 echo $this->db->delete('adm_login',$data);
			 //echo $id;
		 }



		 /* Add New */
		 public function edit_user() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'list_level'        => $this->list_level(),
						'detil_user'        => $this->detil_user($id),
					);
					$this->load->view('edit_user', $data);
			}

			public function detil_user($id){
				$data = array();
				$query = $this->db->query("select * from adm_login inner join adm_jabatan on adm_login.userlevel = adm_jabatan.idx and adm_login.id = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_user(){
 			 $fullname = $this->security->sanitize_filename($this->input->post('fullname'), TRUE);
 			 $email = $this->security->sanitize_filename($this->input->post('email'), TRUE);
 			 $address = $this->security->sanitize_filename($this->input->post('address'), TRUE);
 			 $phone = $this->security->sanitize_filename($this->input->post('phone'), TRUE);
 			 $username = $this->security->sanitize_filename($this->input->post('username'), TRUE);
			 $userlevel = $this->security->sanitize_filename($this->input->post('userlevel'), TRUE);
 			 $foto = $username.'-'.rand();
 			 $ext = $this->getExtension($_FILES['foto']['name']);
 			 $data = array(
 						'userid'	=> $username,
 						'email'	=> $email,
 						'userlevel'	=> $userlevel,
 						'userid'	=> $username,
 						'username'	=> $username,
 						'status'		=> 'active',
 						'nama_lengkap'	=> $fullname,
 						'no_tlp'	=> $phone,
 						'alamat'	=> $address,
 				);
 			 $password = $this->security->sanitize_filename($this->input->post('password'), TRUE);
			 if($password != ""){
				 		$password = md5($password);
						$pass = array("password" => $password);
				 		$data = array_merge($data,$pass);
			 }

 				if($this->getExtension($_FILES['foto']['name']) != ''){
  				$ext = array("img" => "$foto.$ext");
  				$data = array_merge($data,$ext);
  				$this->upload_gambar('foto',$foto,'assets/usr_img');
  			}
				$id = $this->security->sanitize_filename($this->input->post('id_user'), TRUE);
				$this->db->where('id',$id);
 				echo $this->db->update('adm_login',$data);
 		 }

}
