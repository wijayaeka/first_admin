<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function listPage(){
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
        $extraWhere = "";
				$groupBy = "";
				$orderBy = " id_page desc";
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
		 public function get_optmodul(){
		 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
		 $data = array();
		 $query = $this->db->query("select  * from adm_modul  order by module_name asc");
		 				echo "<optuon value='' selected> Choose Modul</option>";
					 foreach($query->result() as $x){
							    echo "<option value='".$x->id."' >".$x->module_name."</option>";
					 }
		 }
		public function save_new(){
			 $page_name = $this->security->sanitize_filename($this->input->post('page_name'), TRUE);
			 $link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
			 $kategori_page = $this->security->sanitize_filename($this->input->post('kategori_page'), TRUE);
			 $modul = $this->security->sanitize_filename($this->input->post('modul'), TRUE);
			 $urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
			 $icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
			 if(isset($_POST['status'])){
				 $status = "Y";
			 }else{
				 $status = "N";
			 }

			 $data = array(
						'id_kategori_page'	=> $kategori_page,
						'id_modul'	=> $modul,
						'nama_page'	=> $page_name,
						'link'	=> $link,
						'urutan'	=> $urutan,
						'status_page'	=> $status,
						'icon'	=> $icon,
				);
			echo $this->db->insert('adm_page',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('id_page',$id);
			 echo $this->db->delete('adm_page',$data);
			 //echo $id;
		 }



		 /* Edit */
		 public function edit_page() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_page'        => $this->detil_page($id),
						'list_kategori_page' 	=> $this->list_kategori_page(),
						'list_icon' 	=> $this->list_icon(),
					);
					$this->load->view('edit_page', $data);
			}

			public function detil_page($id){
				$data = array();
				$query = $this->db->query(" select
												*
												from adm_page
												left join adm_kategori_page on adm_kategori_page.id_kategori_page = adm_page.id_kategori_page
												left join adm_modul on adm_page.id_modul = adm_modul.id where id_page = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_page(){
				$page_name = $this->security->sanitize_filename($this->input->post('page_name'), TRUE);
				$link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
				$kategori_page = $this->security->sanitize_filename($this->input->post('kategori_page'), TRUE);
				$modul = $this->security->sanitize_filename($this->input->post('modul'), TRUE);
				$urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
				$icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
				if(isset($_POST['status'])){
					$status = "Y";
				}else{
					$status = "N";
				}

							 $data = array(
										'id_kategori_page'	=> $kategori_page,
										'id_modul'	=> $modul,
										'nama_page'	=> $page_name,
										'link'	=> $link,
										'urutan'	=> $urutan,
										'status_page'	=> $status,
										'icon'	=> $icon,
								);
				$id = $this->security->sanitize_filename($this->input->post('id_page'), TRUE);
				$this->db->where('id_page',$id);
 				echo $this->db->update('adm_page',$data);
 		 }

}
