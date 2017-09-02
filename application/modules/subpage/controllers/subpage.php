<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class subpage extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function listSubpage(){
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
        $extraWhere = "";
				$groupBy = "";
				$orderBy = " id_subpage desc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
        );
    }


		/* Add New */
		public function add_new() {
				$data = array(
					'list_page' 	=> $this->list_page(),
					'list_icon' 	=> $this->list_icon(),
				);
				 $this->load->view('add_new',$data);
		 }
		 public function list_page(){
				 $data = array();
				 $query = $this->db->query("select  * from adm_page  order by nama_page asc");
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
			 $page_name = $this->security->sanitize_filename($this->input->post('page_name'), TRUE);
			 $link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
			 $parent_page = $this->security->sanitize_filename($this->input->post('parent_page'), TRUE);
			 $urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
			 $icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
			 if(isset($_POST['status'])){
				 $status = "Y";
			 }else{
				 $status = "N";
			 }
			 $data = array(
						'id_page'	=> $parent_page,
						'nama_subpage'	=> $page_name,
						'link_subpage'	=> $link,
						'urutan_subpage'	=> $urutan,
						'status_subpage'	=> $status,
						'subpage_icon'	=> $icon,
				);
			echo $this->db->insert('adm_sub_page',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('id_subpage',$id);
			 echo $this->db->delete('adm_sub_page',$data);
			 //echo $id;
		 }



		 /* Edit */
		 public function edit_subpage() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_subpage'        => $this->detil_subpage($id),
						'list_page' 	=> $this->list_page(),
						'list_icon' 	=> $this->list_icon(),
					);
					$this->load->view('edit_subpage', $data);
			}

			public function detil_subpage($id){
				$data = array();
				$query = $this->db->query("select
												*
												from adm_sub_page
												left join adm_page on adm_page.id_page = adm_sub_page.id_page where adm_sub_page.id_subpage = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_subpage(){
				$page_name = $this->security->sanitize_filename($this->input->post('page_name'), TRUE);
 			  $link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
 			  $parent_page = $this->security->sanitize_filename($this->input->post('parent_page'), TRUE);
 			  $urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
 			  $icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
				if(isset($_POST['status'])){
					$status = "Y";
				}else{
					$status = "N";
				}
				$data = array(
						 'id_page'	=> $parent_page,
						 'nama_subpage'	=> $page_name,
						 'link_subpage'	=> $link,
						 'urutan_subpage'	=> $urutan,
						 'status_subpage'	=> $status,
						 'subpage_icon'	=> $icon,
				 );
				$id = $this->security->sanitize_filename($this->input->post('id_subpage'), TRUE);
				$this->db->where('id_subpage',$id);
 				echo $this->db->update('adm_sub_page',$data);
 		 }

}
