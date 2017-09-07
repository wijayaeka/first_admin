<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_category extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function listActicleCategory(){
        $table = 'article_category';
        $primaryKey = 'id_category_article';
        $columns = array(
        				array( 'db' => '`id_category_article`', 'dt' => 0, 'field' => 'id_category_article' ),
						array( 'db' => '`article_category_name`', 'dt' => 1, 'field' => 'article_category_name' ),
						array( 'db' => '`status`', 'dt' => 2, 'field' => 'status' ),
				);
		$joinQuery  = " from article_category";
        $extraWhere = "";
				$groupBy = " id_category_article";
				$orderBy = " id_category_article desc";
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
			 $category_name= $this->security->sanitize_filename($this->input->post('category_name'), TRUE);
			 $active_status = $this->security->sanitize_filename($this->input->post('active_status'), TRUE);
			 $data = array(
						'article_category_name'	=> $category_name,
						'status'	=> $active_status,
				);
			echo $this->db->insert('article_category',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('id_category_article',$id);
			 echo $this->db->delete('article_category',$data);
			 //echo $id;
		 }



		 /* Edit */
		 public function edit_article_category() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_modul'        => $this->detil_article_category($id),
						
					);
					$this->load->view('edit_category', $data);
			}

			public function detil_article_category($id){
				$data = array();
				$query = $this->db->query("select
												*
												from article_category
												 where article_category.id_category_article = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_article_category(){
				 $category_name= $this->security->sanitize_filename($this->input->post('category_name'), TRUE);
				 $active_status = $this->security->sanitize_filename($this->input->post('active_status'), TRUE);
				 
				 $data = array(
						'article_category_name'	=> $category_name,
						'status'	=> $active_status,
				);
				$id = $this->security->sanitize_filename($this->input->post('id_category_article'), TRUE);
				$this->db->where('id_category_article',$id);
 				echo $this->db->update('article_category',$data);
 		 }

}
