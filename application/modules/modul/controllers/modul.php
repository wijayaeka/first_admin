<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modul extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function listModul(){
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
										left join adm_kategori_page on adm_modul.id_kategori_page = adm_kategori_page.id_kategori_page";
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
					'list_kategori_page' 	=> $this->list_kategori_page(),
					'list_icon' 	=> $this->list_icon(),
				);
				 $this->load->view('add_new',$data);
		 }
		 public function list_kategori_page(){
				 $data = array();
				 $query = $this->db->query("select  * from adm_kategori_page  order by jenis_page asc");
				 foreach($query->result() as $x){
						 $data[] = $x;
				 }
				 return $data;
		 }
		 public function list_icon(){
				 $data = array();
				 $query = $this->db->query("select  * from icon  order by icon asc");
				 foreach($query->result() as $x){
						 $data[] = $x;
				 }
				 return $data;
		 }
		public function save_new(){
			 $module_name= $this->security->sanitize_filename($this->input->post('module_name'), TRUE);
			 $link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
			 $category_page = $this->security->sanitize_filename($this->input->post('category_page'), TRUE);
			 $urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
			 $icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
			 if(isset($_POST['status'])){
				 $status = "Y";
			 }else{
				 $status = "N";
			 }
			 $data = array(
						'id_kategori_page'	=> $category_page,
						'module_name'	=> $module_name,
						'urutan_module'	=> $urutan,
						'status_module'	=> $status,
						'icon_module'	=> $icon,
				);
			echo $this->db->insert('adm_modul',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('id',$id);
			 echo $this->db->delete('adm_modul',$data);
			 //echo $id;
		 }



		 /* Edit */
		 public function edit_modul() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_modul'        => $this->detil_modul($id),
						'list_kategori_page' 	=> $this->list_kategori_page(),
						'list_icon' 	=> $this->list_icon(),
					);
					$this->load->view('edit_modul', $data);
			}

			public function detil_modul($id){
				$data = array();
				$query = $this->db->query("select
												*
												from adm_modul
												left join adm_kategori_page on adm_modul.id_kategori_page = adm_kategori_page.id_kategori_page where adm_modul.id = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_modul(){
				$module_name= $this->security->sanitize_filename($this->input->post('module_name'), TRUE);
				$link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
				$category_page = $this->security->sanitize_filename($this->input->post('category_page'), TRUE);
				$urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
				$icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
				if(isset($_POST['status'])){
					$status = "Y";
				}else{
					$status = "N";
				}
				$data = array(
						 'id_kategori_page'	=> $category_page,
						 'module_name'	=> $module_name,
						 'urutan_module'	=> $urutan,
						 'status_module'	=> $status,
						 'icon_module'	=> $icon,
				 );
				$id = $this->security->sanitize_filename($this->input->post('id_modul'), TRUE);
				$this->db->where('id',$id);
 				echo $this->db->update('adm_modul',$data);
 		 }

}
