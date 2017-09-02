<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_article extends CI_Controller {
	public function __construct() {
			 parent::__construct();

	 	 	$this->load->model('library_function');
	 }
	public function index() {
			 $data = array();
			 $this->load->view('index', $data);

	 }

	 public function listArticle(){
				$table = 'article';
				$primaryKey = 'id_article';
				$columns = array(
				 array( 'db' => '`id_article`', 'dt' => 0, 'field' => 'id_article' ),
				 array( 'db' => '`tanggal`', 'dt' => 1, 'field' => 'tanggal' ),
				 array( 'db' => '`title`', 'dt' => 2, 'field' => 'title' ),
				 array( 'db' => '`category_name`', 'dt' => 3, 'field' => 'category_name' ),
				 array( 'db' => '`status`', 'dt' => 4, 'field' => 'status' ),
				 array( 'db' => '`headline`', 'dt' => 5, 'field' => 'headline' ),
				);
	 $joinQuery  = " FROM article LEFT JOIN content_category ON article.kategori = content_category.id_category";
				$extraWhere = "";
			 $orderBy = " article.tanggal asc";
			 $groupby = "  id_article asc ";
				echo json_encode(
						ssp::simple( $_GET, $this->library_function->sql_details(), $table, $primaryKey, $columns, $joinQuery , $extraWhere,  $groupby, $orderBy)
				);
		}


		/* Add New */
		public function add_new() {
				 $data = array(
					 'list_content_category' => $this->list_content_category(),
				 );
				 $this->load->view('add_new', $data);
		 }


		 public function save_new(){
			 $username = $this->session->userdata('user_id');
			 $hari = $this->library_function->hari_indo(date('d'));
			 $tanggal = date("Y-m-d");
			 $jam = date("h:i:s");
			 $title = $this->security->sanitize_filename($this->input->post('title'), TRUE);
			 $article_category = $this->security->sanitize_filename($this->input->post('article_category'), TRUE);
			 $publish_date = $this->input->post('publish_date');
			 $active_status = $this->security->sanitize_filename($this->input->post('active_status'), TRUE);
			 $running_news = $this->security->sanitize_filename($this->input->post('running_news'), TRUE);
			 $headline = $this->security->sanitize_filename($this->input->post('headline'), TRUE);
			 $komentar_status = $this->security->sanitize_filename($this->input->post('open_comment'), TRUE);
			 $isi_article = $this->db->escape($this->input->post('isi_article'));
			 $isi_article_eng = $this->db->escape($this->input->post('article_eng'));
			 $url_article1 = strtolower($this->input->post('title'));
			 $url_article2 = str_replace(' ','-',$url_article1);
			 $url_article3 = str_replace('/','atau',$url_article2);
			 $url_article = str_replace('&','dan',$url_article3);
			 $foto = $this->library_function->genCode();
			 echo $this->input->post('isi_article');
			/* $data = array(
						'title'	=> $title,
						'username' => $username,
						'kategori'	=> $article_category,
						'url_article'	=> $url_article,
						'headline'	=> $headline,
						'running_news'	=> $running_news,
						'isi_article'	=> $isi_article,
						'isi_article_eng'	=> $isi_article_eng,
						'hari'	=> $hari,
						'tanggal'	=> $tanggal,
						'jam'	=> $jam,
						'gambar'	=> $foto,
						'video'	=> "",
						'poster_video'	=> "",
						'embbed_video'	=> "",
						'video_active'	=> "",
						'status'	=> $active_status,
						'dibaca'	=> "N",
						'document'	=> "",
						'komentar_status'	=> $komentar_status,
				);
				 $ext = $this->library_function->getExtension($_FILES['foto']['name']);
				if($this->library_function->getExtension($_FILES['foto']['name']) != ''){
		 				$ext = array("gambar" => "$foto.$ext");
		 				$data = array_merge($data,$ext);
		 				$this->upload_gambar('foto',$foto,'assets/article_content');
 				}
				echo $this->db->insert('article',$data);*/
				//echo json_encode($data);
				//echo $this->db->insert('article',$data);

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


		 public function list_content_category(){
			 $data = array();
			 	$query = $this->db->query("select  * from content_category order by category_name asc");
				foreach($query->result() as $x){
					$data[] = $x;
				}
				return $data;
		 }



		 		public function data_article($id){
					$data = array();
					$query  = $this->db->query("select * from article left join content_category on content_category.id_category = article.kategori where id_article = '$id'");
					foreach($query->result() as $dat){
						$data[] = $dat;
					}
					return $data;
				}
		 		/* Add New */
		 		public function edit_article() {
						$id = $this->input->post('id');
		 				 $data = array(
		 					 'list_content_category' => $this->list_content_category(),
							 'data_article'		=> $this->data_article($id),
		 				 );
		 				 $this->load->view('update_artikel', $data);
		 		 }

				 public function update_artikel(){
					 $username = $this->session->userdata('user_id');
					 $hari = $this->library_function->hari_indo(date('d'));
					 $tanggal = date("Y-m-d");
					 $jam = date("h:i:s");
					 $title = $this->security->sanitize_filename($this->input->post('title'), TRUE);
					 $article_category = $this->security->sanitize_filename($this->input->post('article_category'), TRUE);
					 $publish_date = $this->input->post('publish_date');
					 $active_status = $this->security->sanitize_filename($this->input->post('active_status'), TRUE);
					 $running_news = $this->security->sanitize_filename($this->input->post('running_news'), TRUE);
					 $headline = $this->security->sanitize_filename($this->input->post('headline'), TRUE);
					 $komentar_status = $this->security->sanitize_filename($this->input->post('open_comment'), TRUE);
					 $isi_article = $this->db->escape($this->input->post('isi_article'));
					 $isi_article_eng = $this->db->escape($this->input->post('article_eng'));
					 $url_article1 = strtolower($this->input->post('title'));
					 $url_article2 = str_replace(' ','-',$url_article1);
					 $url_article3 = str_replace('/','atau',$url_article2);
					 $url_article = str_replace('&','dan',$url_article3);
					 $foto = $this->library_function->genCode();

					 $data = array(
								'title'	=> $title,
								'username' => $username,
								'kategori'	=> $article_category,
								'url_article'	=> $url_article,
								'headline'	=> $headline,
								'running_news'	=> $running_news,
								'isi_article'	=> $isi_article,
								'isi_article_eng'	=> $isi_article_eng,
								'hari'	=> $hari,
								'tanggal'	=> $tanggal,
								'jam'	=> $jam,
								'gambar'	=> $foto,
								'video'	=> "",
								'poster_video'	=> "",
								'embbed_video'	=> "",
								'video_active'	=> "",
								'status'	=> $active_status,
								'dibaca'	=> "N",
								'document'	=> "",
								'komentar_status'	=> $komentar_status,
						);
						 $ext = $this->library_function->getExtension($_FILES['foto']['name']);
						if($this->library_function->getExtension($_FILES['foto']['name']) != ''){
				 				$ext = array("gambar" => "$foto.$ext");
				 				$data = array_merge($data,$ext);
				 				$this->upload_gambar('foto',$foto,'assets/article_content');
		 				}
						echo $this->db->update('article',$data);
						//echo json_encode($data);
						//echo $this->db->insert('article',$data);

				 }

}
