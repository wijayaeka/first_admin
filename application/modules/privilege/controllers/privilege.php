<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class privilege extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function listCategory(){
        $table = 'adm_kategori_page';
        $primaryKey = 'id_kategori_page';
        $columns = array(
        	array( 'db' => '`id_kategori_page`', 'dt' => 0, 'field' => 'id_kategori_page' ),
					array( 'db' => '`jenis_page`', 'dt' => 1, 'field' => 'jenis_page' ),
					array( 'db' => '`inisial`', 'dt' => 2, 'field' => 'inisial' ),
        );
				$joinQuery  = " from adm_kategori_page ";
        $extraWhere = "";
				$groupBy = " id_kategori_page ";
				$orderBy = " id_kategori_page desc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
        );
    }
		public function listModul(){
				$id  = $_GET['id'];
				 $table = 'adm_modul';
				 $primaryKey = 'id';
				 $columns = array(
					 array( 'db' => '`id`', 'dt' => 0, 'field' => 'id' ),
					 array( 'db' => '`module_name`', 'dt' => 1, 'field' => 'module_name' ),
					 array( 'db' => '`urutan_module`', 'dt' => 2, 'field' => 'urutan_module' ),
					 array( 'db' => '`status_module`', 'dt' => 3, 'field' => 'status_module' ),
					 array( 'db' => '`jenis_page`', 'dt' => 4, 'field' => 'jenis_page' ),
				 );

		 $joinQuery  = " from adm_modul
										 left join adm_kategori_page on adm_modul.id_kategori_page = adm_kategori_page.id_kategori_page
										 ";
				 $extraWhere = " adm_kategori_page.id_kategori_page = '$id' ";
				 $groupBy = " id";
				 $orderBy = " id desc";
				 echo json_encode(
						 ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
				 );
		 }
		 public function listPage(){
			 $id  = $_GET['id'];
					$table = 'adm_page';
					$primaryKey = 'adm_page.id_page';
					$columns = array(
					 array( 'db' => '`id_page`', 'dt' => 0, 'field' => 'id_page' ),
					 array( 'db' => '`nama_page`', 'dt' => 1, 'field' => 'nama_page' ),
					 array( 'db' => '`link`', 'dt' => 2, 'field' => 'link' ),
					 array( 'db' => '`jenis_page`', 'dt' => 3, 'field' => 'jenis_page' ),
					 array( 'db' => '`module_name`', 'dt' => 4, 'field' => 'module_name' ),
					 array( 'db' => 'adm_page.`urutan`', 'dt' => 5, 'field' => 'urutan' ),
					 array( 'db' => 'adm_page.`status_page`', 'dt' => 6, 'field' => 'status_page' ),
					 array( 'db' => 'adm_page.`icon`', 'dt' => 7, 'field' => 'icon' ),
					);

		 $joinQuery  = " from adm_page
										 left join adm_kategori_page on adm_kategori_page.id_kategori_page = adm_page.id_kategori_page
										 left join adm_modul on adm_page.id_modul = adm_modul.id";
					$extraWhere = "  adm_modul.id = '$id'";
				 $groupBy = "";
				 $orderBy = " id_page desc";
					echo json_encode(
							ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
					);
			}
			public function listSubpage(){
					 $id  = $_GET['id'];
	         $table = 'adm_sub_page';
	         $primaryKey = 'id_subpage';
	         $columns = array(
	         	array( 'db' => '`id_subpage`', 'dt' => 0, 'field' => 'id_subpage' ),
	 					array( 'db' => '`nama_subpage`', 'dt' => 1, 'field' => 'nama_subpage' ),
	 					array( 'db' => '`link_subpage`', 'dt' => 2, 'field' => 'link_subpage' ),
	 					array( 'db' => 'adm_sub_page.`urutan_subpage`', 'dt' => 3, 'field' => 'urutan_subpage' ),
	 					array( 'db' => 'adm_sub_page.`status_subpage`', 'dt' => 4, 'field' => 'status_subpage' ),
	 					array( 'db' => 'adm_sub_page.`subpage_icon`', 'dt' => 5, 'field' => 'subpage_icon' ),
	 					array( 'db' => '`nama_page`', 'dt' => 6, 'field' => 'nama_page' ),
	         );

	 		$joinQuery  = " from adm_sub_page
	 										left join adm_page on adm_page.id_page = adm_sub_page.id_page";
	         $extraWhere = " adm_page.id_page = '$id'";
	 				$groupBy = "";
	 				$orderBy = " id_subpage desc";
	         echo json_encode(
	             ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
	         );
	     }

			 	/*===================================================================*/
				public function list_prev_module(){

						 $modul_id = $this->security->sanitize_filename($this->input->post('modul_id'), TRUE);
						 $modul_name = $this->security->sanitize_filename($this->input->post('modul_name'), TRUE);
						 $data = array(
							 "title" => "Modul",
							 "id" => $modul_id,
							 "destination" => $modul_name,
						 );
						 $this->load->view('list_prev_module',$data);
				}



						public function update_data_modul($data, $id_modul){
							$dat =  json_encode($data);
							$dat = str_replace("[","",$dat);
							$dat = str_replace("]","",$dat);
							$query1 = $this->db->query("update access_modul set active = 'Y' where id_privilege_modul in($dat) and id_modul = '$id_modul' ");
							if($query1 == 1){
										$this->db->query("update access_modul set active = 'N' where id_privilege_modul not in($dat) and id_modul = '$id_modul' ");
							}
							return $query1;
						}
						public function submit_modul(){
							$x = "";
							$id_level = $this->input->post('id');
							$id_modul = $this->security->sanitize_filename($this->input->post('modul_id'), TRUE);
							if($this->input->post('id') != ""){
							while (list($key,$val)= each($id_level)){
										$cek = $this->db->query("select * from access_modul where id_modul = '$id_modul'  and id_privilege_modul ='$val' ");
												if($cek->num_rows() > 0){
														$data[] = $val;
												}else{
													$param = array(
															"id_modul" => $id_modul,
															"id_privilege_modul" => $val,
															"active" => "Y",
													);
													 $this->db->insert("access_modul",$param);
													$data = array();
												}
							}
							if(empty($data)){
								echo "1";
							}else{
								echo $this->update_data_modul($data, $id_modul);
							}
						}else{
							echo $this->db->query("update access_modul set active = 'N' where  id_modul = '$id_modul' ");
						}
					}
					/*===================================================================*/
					public function list_prev_page(){
							 $page_id = $this->security->sanitize_filename($this->input->post('page_id'), TRUE);
							 $page_name = $this->security->sanitize_filename($this->input->post('page_name'), TRUE);
							 $data = array(
								 "title" => "Page",
								 "id" => $page_id,
								 "destination" => $page_name,
							 );
							 $this->load->view('list_prev_page',$data);
					}

					public function update_data_page($data, $id_page){
								$dat =  json_encode($data);
								$dat = str_replace("[","",$dat);
								$dat = str_replace("]","",$dat);
								$query1 = $this->db->query("update access_page set active = 'Y' where id_privilege_page in($dat) and id_page = '$id_page' ");
								if($query1 == 1){
											$this->db->query("update access_page set active = 'N' where id_privilege_page not in($dat) and id_page = '$id_page' ");
								}
								return $query1;
							}
					public function submit_page(){
								$x = "";
								$id_level = $this->input->post('id');
								$id_page = $this->security->sanitize_filename($this->input->post('page_id'), TRUE);
								if(!empty($this->input->post('id'))){
								while (list($key,$val)= each($id_level)){
											$cek = $this->db->query("select * from access_page where id_page = '$id_page'  and id_privilege_page ='$val' ");
													if($cek->num_rows() > 0){
															$data[] = $val;
													}else{
														$param = array(
																"id_page" => $id_page,
																"id_privilege_page" => $val,
																"active" => "Y",
														);
														 $this->db->insert("access_page",$param);
														$data = array();
													}
								}
								if(empty($data)){
									echo "1";
								}else{
									echo $this->update_data_page($data, $id_page);
								}
							}else{
								echo $this->db->query("update access_page set active = 'N' where  id_page = '$id_page' ");
							}
						}



						/*===================================================================*/
						public function list_prev_subpage(){
								 $subpage_id = $this->security->sanitize_filename($this->input->post('subpage_id'), TRUE);
								 $subpage_name = $this->security->sanitize_filename($this->input->post('subpage_name'), TRUE);
								 $data = array(
									 "title" => "SubPage",
									 "id" => $subpage_id,
									 "destination" => $subpage_name,
								 );
								 $this->load->view('list_prev_subpage',$data);
						}

						public function update_data_subpage($data, $id_subpage){
									$dat =  json_encode($data);
									$dat = str_replace("[","",$dat);
									$dat = str_replace("]","",$dat);
									$query1 = $this->db->query("update access_subpage set active = 'Y' where id_privilege_subpage in($dat) and id_subpage = '$id_subpage' ");
									if($query1 == 1){
												$this->db->query("update access_subpage set active = 'N' where id_privilege_subpage not in($dat) and id_subpage = '$id_subpage' ");
									}
									return $query1;
								}
						public function submit_subpage(){
									$x = "";
									$id_level = $this->input->post('id');
									$id_subpage = $this->security->sanitize_filename($this->input->post('subpage_id'), TRUE);
									if(!empty($this->input->post('id'))){
									while (list($key,$val)= each($id_level)){
												$cek = $this->db->query("select * from access_subpage where id_subpage = '$id_subpage'  and id_privilege_subpage ='$val' ");
														if($cek->num_rows() > 0){
																$data[] = $val;
														}else{
															$param = array(
																	"id_subpage" => $id_subpage,
																	"id_privilege_subpage" => $val,
																	"active" => "Y",
															);
															 $this->db->insert("access_subpage",$param);
															$data = array();
														}
									}
									if(empty($data)){
										echo "1";
									}else{
										echo $this->update_data_subpage($data, $id_subpage);
									}
								}else{
									echo $this->db->query("update access_subpage set active = 'N' where  id_subpage = '$id_subpage' ");
								}
							}
}
