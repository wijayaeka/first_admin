<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class level extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $this->load->view('index');
	 }
	 public function list_level(){
		$data = array();
		$query = $this->db->query("select * from adm_jabatan order by jbt_nama asc");
		foreach($query->result() as $x){
				$data[] = $x;
		}
		return $data;
		}

	 public function listLevel(){
        $table = 'adm_jabatan';
        $primaryKey = 'idx';
        $columns = array(
        	array( 'db' => '`idx`', 'dt' => 0, 'field' => 'idx' ),
					array( 'db' => '`jbt_id`', 'dt' => 1, 'field' => 'jbt_id' ),
					array( 'db' => '`jbt_nama`', 'dt' => 2, 'field' => 'jbt_nama' ),
        );

		$joinQuery  = " from adm_jabatan";
        $extraWhere = "";
				$orderBy = " idx asc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $orderBy)
        );
    }


		/* Add New */
		public function add_new() {
				 $this->load->view('add_new');
		 }
		public function save_new(){
			 $level_code = $this->security->sanitize_filename($this->input->post('level_code'), TRUE);
			 $level_name = $this->security->sanitize_filename($this->input->post('level_name'), TRUE);
			 $data = array(
						'jbt_id'	=> $level_code,
						'jbt_nama'	=> $level_name
				);
			echo $this->db->insert('adm_jabatan',$data);
		 }
		 public function delete() {
			 $id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
			 $data = $this->db->where('idx',$id);
			 echo $this->db->delete('adm_jabatan',$data);
			 //echo $id;
		 }



		 /* Add New */
		 public function edit_level() {
			 		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
					$data = array(
						'detil_level'        => $this->detil_level($id),
					);
					$this->load->view('edit_level', $data);
			}

			public function detil_level($id){
				$data = array();
				$query = $this->db->query("select * from adm_jabatan  where idx = '$id'");
				foreach($query->result() as $x){
						$data[] = $x;
				}
				return $data;
			}
			public function update_level(){
				$level_code = $this->security->sanitize_filename($this->input->post('level_code'), TRUE);
				$level_name = $this->security->sanitize_filename($this->input->post('level_name'), TRUE);
				$data = array(
						 'jbt_id'	=> $level_code,
						 'jbt_nama'	=> $level_name
				 );
				$id = $this->security->sanitize_filename($this->input->post('id_level'), TRUE);
				$this->db->where('idx',$id);
 				echo $this->db->update('adm_jabatan',$data);
 		 }

}
