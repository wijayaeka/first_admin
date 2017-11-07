<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class list_client extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function listClient(){
        $table = 'client';
        $primaryKey = 'id';
        $columns = array(
        	array( 'db' => '`id`', 'dt' => 0, 'field' => 'id' ),
					array( 'db' => 'client_name', 'dt' => 1, 'field' => 'client_name' ),
					array( 'db' => 'official_email', 'dt' => 2, 'field' => 'official_email' ),
					array( 'db' => 'no_telp', 'dt' => 3, 'field' => 'no_telp' ),
					array( 'db' => 'status_client', 'dt' => 4, 'field' => 'status_client' ),
        );

		$joinQuery  = " from client ";
        $extraWhere = "";
				$groupBy = " id";
				$orderBy = " id desc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
        );
    }


		/* Add New */
		public function add_new() {
				$data = array(
					
				);
				 $this->load->view('add_new',$data);
		 }
		
		public function save_new(){
			 $client_name= $this->security->sanitize_filename($this->input->post('client_name'), TRUE);
			 $email = $this->security->sanitize_filename($this->input->post('email'), TRUE);
			 $alamat = $this->input->post('address');
			 $foto = $this->library_function->genCode();
			 $no_telp = $this->security->sanitize_filename($this->input->post('no_telp'), TRUE);
			 $description = $this->input->post('description');
			 $ext = $this->library_function->getExtension($_FILES['foto']['name']);
				if($this->library_function->getExtension($_FILES['foto']['name']) != ''){
		 				//$ext = array("gambar" => "$foto.$ext");
				 				//$data = array_merge($data,$ext);
				 				$this->upload_gambar('foto',$foto.".".$ext,'assets/article_content');
								$foto = $foto.".".$ext;
								$image_clause = "gambar	,";
								$image_value = "'$foto',";
								 $data = array(
										'client_name'	=> $client_name,
										'official_email'	=> $email,
										'alamat'	=> $alamat,
										'no_telp'	=> $no_telp,
										'logo_client'	=> $image_value,
										'description'	=> $description,
										'status_client'	=>'Y'
								);
 				}else{
								$image_clause = "";
								$image_value = "";
								 $data = array(
											'client_name'	=> $client_name,
											'official_email'	=> $email,
											'alamat'	=> $alamat,
											'no_telp'	=> $no_telp,
											'description'	=> $description,
											'status_client'	=>'Y'
									);
				}
			
			echo $this->db->insert('client',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('id',$id);
			 echo $this->db->delete('client',$data);
			 //echo $id;
		 }



		 /* Edit */
		 public function edit_client() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_client'        => $this->detil_client($id),
					);
					$this->load->view('edit_client', $data);
			}

			public function detil_client($id){
				$data = array();
				$query = $this->db->query("select
												*
												from client
												where id = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_client(){
				 $client_name= $this->security->sanitize_filename($this->input->post('client_name'), TRUE);
				 $email = $this->security->sanitize_filename($this->input->post('email'), TRUE);
				 $alamat = $this->input->post('address');
				 $foto = $this->library_function->genCode();
				 $no_telp = $this->security->sanitize_filename($this->input->post('no_telp'), TRUE);
				 $description = $this->input->post('description');
					 $ext = $this->library_function->getExtension($_FILES['foto']['name']);
					if($this->library_function->getExtension($_FILES['foto']['name']) != ''){
			 						//$ext = array("gambar" => "$foto.$ext");
					 				//$data = array_merge($data,$ext);
					 				$this->upload_gambar('foto',$foto.".".$ext,'assets/article_content');
									$fotox = $foto.".".$ext;
									$data = array(
										'client_name'	=> $client_name,
										'official_email'	=> $email,
										'alamat'	=> $alamat,
										'no_telp'	=> $no_telp,
										'logo_client'	=> $fotox,
										'description'	=> $description,
										'status_client'	=>'Y'
								);
	 				}else{
									$image_clause = "";
									$fotox = "";
									$data = array(
										'client_name'	=> $client_name,
										'official_email'	=> $email,
										'alamat'	=> $alamat,
										'no_telp'	=> $no_telp,
										'description'	=> $description,
										'status_client'	=>'Y'
								);
					}
				 
				//echo json_encode($data);
				$id = $this->security->sanitize_filename($this->input->post('id_client'), TRUE);
				$this->db->where('id',$id);
 				echo $this->db->update('client',$data);
 		 }
 		public  function upload_gambar($img,$new_name,$url){
	 		$this->load->helper(array('form', 'url'));
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
			/*Preview rProfile */
			
			public function get_prev(){
				$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
				$profile = $this->detil_client($id);
				foreach($profile as $p){
					echo '
					 <div class="card card-stats">
						                                <div class="card-header" >
						                                    <img src="'.base_url().'assets/article_content/'.$p->logo_client.'"  style="max-width:103px;max-height:40px;" class="picture-src" id="wizardPicturePreview" title="">
						                                </div>
						                                <div class="card-content">
						                                    <h3 class="card-title">'.$p->client_name.'</h3>
						                                    <p class="category">'.$p->description.'</p>
						                                </div>
						                                <div class="card-footer">
						                                    <div class="stats">
						                                        <i class="material-icons">local_offer</i>'.$p->alamat.'
						                                    </div>
						                                </div>
						                            </div>
					';
				}
			}
			
		/* DETAIL */
		 public function detail() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_client'        => $this->detil_client($id),
					);
					$this->load->view('detail', $data);
			}
		 public function detail_content() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_client'        => $this->detil_client($id),
					);
					$this->load->view('edit_client', $data);
			}
			
			
	/*============================== TENANT ====================================*/
	
	/* Add New */
		public function add_new_tenant() {
				$data = array(
					
				);
				 $this->load->view('add_new_tenant',$data);
		 }
		
		public function save_new_tenant(){
			 $client_name= $this->security->sanitize_filename($this->input->post('client_name'), TRUE);
			 $email = $this->security->sanitize_filename($this->input->post('email'), TRUE);
			 $alamat = $this->input->post('address');
			 $foto = $this->library_function->genCode();
			 $no_telp = $this->security->sanitize_filename($this->input->post('no_telp'), TRUE);
			 $description = $this->input->post('description');
			 $ext = $this->library_function->getExtension($_FILES['foto']['name']);
				if($this->library_function->getExtension($_FILES['foto']['name']) != ''){
		 				//$ext = array("gambar" => "$foto.$ext");
				 				//$data = array_merge($data,$ext);
				 				$this->upload_gambar('foto',$foto.".".$ext,'assets/article_content');
								$foto = $foto.".".$ext;
								$image_clause = "gambar	,";
								$image_value = "'$foto',";
								 $data = array(
										'client_name'	=> $client_name,
										'official_email'	=> $email,
										'alamat'	=> $alamat,
										'no_telp'	=> $no_telp,
										'logo_client'	=> $image_value,
										'description'	=> $description,
										'status_client'	=>'Y'
								);
 				}else{
								$image_clause = "";
								$image_value = "";
								 $data = array(
											'client_name'	=> $client_name,
											'official_email'	=> $email,
											'alamat'	=> $alamat,
											'no_telp'	=> $no_telp,
											'description'	=> $description,
											'status_client'	=>'Y'
									);
				}
			
			echo $this->db->insert('client',$data);
		 }
}
