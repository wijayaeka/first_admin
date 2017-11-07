<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagetree_menu extends CI_Controller {
	public function __construct() {
			 parent::__construct();
			  $this->load->helper(array('form', 'url'));
	 	 	$this->load->model('library_function');
	 }
	public function index() {
			$data = array(
					//'list_menu' 	=> $this->list_menu(),
				);
			 $this->load->view('index',$data);
			 
	 }
	 public function list_icon(){
				 $data = array();
				 $query = $this->db->query("select  * from icon  order by icon asc");
				 foreach($query->result() as $x){
						 $data[] = $x;
				 }
				 return $data;
		 }
	public function add_new(){
		$menu_stat = $this->security->sanitize_filename($this->input->post('menu_stat'),true);
		$parent = $this->security->sanitize_filename($this->input->post('parent'),true);
		$data = array(
					'list_icon'		=> $this->list_icon(),
					'menu_stat'		=>	$menu_stat,
					'parent'		=>	$parent
				);
			 $this->load->view('add_new',$data);
	}
	
	public function add_menu(){
		$menu_name = $this->security->sanitize_filename($this->input->post('menu_name'),true);
		$menu_name_english = $this->security->sanitize_filename($this->input->post('menu_name_english'),true);
		$icon = $this->security->sanitize_filename($this->input->post('icon'),true);
		$menu_stat = $this->security->sanitize_filename($this->input->post('menu_stat'),true);
		
		$parent = $this->security->sanitize_filename($this->input->post('parent'),true);
		$urutan = $this->security->sanitize_filename($this->input->post('urutan'),true);
		$initial1 = strtolower($menu_name);
		$initial = str_replace(' ','-',$initial1);
		$data = array(
			'menu_name' => $menu_name,
			'menu_name_english' => $menu_name_english,
			'icon' => $icon,
			'link'	=> $initial,
			'id_parent'	=> $parent,
			'list_number' => $urutan,
			'menu_stats'		=> $menu_stat,
		);
		echo $this->db->insert('front_menu',$data);
	}
	
	
	public function edit(){
		$id = $this->input->post('id');
		$data = array(
					'detail_data' 	=> $this->detail_data($id),
					'list_icon'		=> $this->list_icon(),
				);
			 $this->load->view('edit_menu',$data);
	}
	
	public function detail_data($id){
		$data = array();
		$query = $this->db->query("select * from front_menu where id_menu = '$id' ");
		foreach($query->result() as $x){
			$data[] = $x;
		}
		return $data;
	}

	public function update_menu(){
		$id_menu = $this->security->sanitize_filename($this->input->post('id_menu'),true);
		$menu_name = $this->security->sanitize_filename($this->input->post('menu_name'),true);
		$menu_name_english = $this->security->sanitize_filename($this->input->post('menu_name_english'),true);
		$icon = $this->security->sanitize_filename($this->input->post('icon'),true);
		$urutan = $this->security->sanitize_filename($this->input->post('urutan'),true);
		
		$data = array(
			'menu_name' => $menu_name,
			'menu_name_english' => $menu_name_english,
			'icon' => $icon,
			'list_number' => $urutan,
		);
		$this->db->where('id_menu',$id_menu);
		echo $this->db->update('front_menu',$data);
	}
	
	public function delete(){
		$id_menu = $this->security->sanitize_filename($this->input->post('id'),true);
		$this->db->where('id_menu',$id_menu);
		echo $this->db->delete('front_menu');
	}
	
	
	public function article_assign(){
			$id = $this->input->post('id');
			$data = array(
						'id_menu' 	=> $id,
						'list_article' 	=> $this->list_article(),
					);
				 $this->load->view('article_assign',$data);
	}
	public function edit_list_article($id){
		$data = array();
		$query = $this->db->query("select * from assisgn_menu_article2 where id_menu = '$id' ");
		foreach($query->result() as $x){
			$data[] = $x;
		}
		return $data;
	}
	public function list_article(){
		$data = array();
		$query = $this->db->query("select * from assisgn_menu_article2");
		foreach($query->result() as $x){
			$data[] = $x;
		}
		return $data;
	}
	
	
	/*=======================================*/
	
	 public function listArticleAssign(){
	 	$id = $_GET['id_menu'];
        $table = 'assisgn_menu_article2';
        $primaryKey = 'assisgn_menu_article2.id_menu';
        $columns = array(
        	array( 'db' => 'assisgn_menu_article2.id_menu', 'dt' => 0, 'field' => 'id_menu' ),
					array( 'db' => 'assisgn_menu_article2.id_article', 'dt' => 1, 'field' => 'id_article' ),
					array( 'db' => 'article.title', 'dt' => 2, 'field' => 'title' ),
					array( 'db' => 'article_category.article_category_name', 'dt' => 3, 'field' => 'article_category_name' ),
					array( 'db' => 'assisgn_menu_article2.status', 'dt' => 4, 'field' => 'status' ),
        );

		$joinQuery  = " FROM
						assisgn_menu_article2
						LEFT JOIN article ON assisgn_menu_article2.id_article = article.id_article
						LEFT JOIN article_category ON article_category.id_category_article = article.article_category";
        $extraWhere = "  assisgn_menu_article2.id_menu = '$id' 
							AND assisgn_menu_article2.`status` = 'Y'";
				$groupBy = " assisgn_menu_article2.id_article";
				$orderBy = " article.title desc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
        );
    }
	public function add_article_to_assign(){
		$id = $_GET['id_menu'];
		$data = array(
					'id_menu'		=> $id,
					'detail_data' 	=> $this->detail_data($id),
					'addArticleAssign' => $this->addArticleAssign()
				);
			 $this->load->view('add_article_assign',$data);
	}
	
	
	public function addArticleAssign(){
		$query = $this->db->query("SELECT
									article.id_article,
									article.title,
									article_category.article_category_name
								FROM
									article,
									 article_category 
								where  article_category.id_category_article = article.article_category 
								 ORDER BY
									article.title DESC");
       if($query->num_rows() > 0){
       		foreach($query->result() as $d){
       			$data[] = $d;
       		}	
			return $data;
       }else{
       		return false;
       }
       
	   
	   
	   
       /* $table = 'assisgn_menu_article2';
        $primaryKey = 'assisgn_menu_article2.id_menu';
        $columns = array(
        	array( 'db' => 'assisgn_menu_article2.id_menu', 'dt' => 0, 'field' => 'id_menu' ),
					array( 'db' => 'assisgn_menu_article2.id_article', 'dt' => 1, 'field' => 'id_article' ),
					array( 'db' => 'article.title', 'dt' => 2, 'field' => 'title' ),
					array( 'db' => 'article_category.article_category_name', 'dt' => 3, 'field' => 'article_category_name' ),
					array( 'db' => 'assisgn_menu_article2.status', 'dt' => 4, 'field' => 'status' ),
        );

		$joinQuery  = " FROM
						assisgn_menu_article2
						LEFT JOIN article ON assisgn_menu_article2.id_article = article.id_article
						LEFT JOIN article_category ON article_category.id_category_article = article.article_category";
        $extraWhere = "   assisgn_menu_article2.`status` = 'Y'";
				$groupBy = " assisgn_menu_article2.id_menu";
				$orderBy = " article.title desc";
        echo json_encode(
            ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere, $groupBy, $orderBy)
        );*/
        
    }
public function submit_assign(){
	   	//echo json_encode($_POST);
	   	$menu_id = $this->security->sanitize_filename($this->input->post('menu_id'), TRUE);
		$id_article = $this->input->post('id');
		if($this->input->post('id') != ""){
				while (list($key,$val)= each($id_article)){
						$cek = $this->db->query("select * from assisgn_menu_article2 where id_menu = '$menu_id'  and id_article ='$val' ");
								if($cek->num_rows() > 0){
											$data[] = $val;
									}else{
										$param = array(
														"id_menu" => $menu_id,
														"id_article" => $val,
														"status" => "Y",
													);
										$this->db->insert("assisgn_menu_article2",$param);
										$data = array();
									}
				}
				
				if(empty($data)){
						echo "1";
					}else{
						echo $this->update_data_assign($data, $menu_id);
				}
		}else{
				echo $this->db->query("update assisgn_menu_article2 set status = 'N' where  id_menu = '$menu_id' ");
		}
	   	
	   }
public function update_data_assign($data, $menu_id){
							$dat =  json_encode($data);
							$dat = str_replace("[","",$dat);
							$dat = str_replace("]","",$dat);
							$query1 = $this->db->query("update assisgn_menu_article2 set `status` = 'Y' where id_article in($dat) and id_menu = '$menu_id' ");
							if($query1 == 1){
										$this->db->query("update assisgn_menu_article2 set `status` = 'N' where id_article not in($dat) and id_menu = '$menu_id' ");
							}
							return $query1;
							
						}
}
