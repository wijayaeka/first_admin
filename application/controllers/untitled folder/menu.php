<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index(){
		$data['main_content'] = 'menu';
		$this->load->model('Encryption');
		$this->load->view('template', $data);
	}
	public function get_data_menu_add(){
		echo '<section class="panel">
					 <form class="form-horizontal" method="post" action="'.base_url().'menu/submit_menu" data-validate="parsley">
				  <div class="padder header-bar bg clearfix">
						<h3>Add Menu</h3>
					</div>
                     <div class="panel-body">
                           <div class="form-group">
                              <label class="col-lg-3 control-label">Nama Page</label> 
                              <div class="col-lg-8"> <input type="text" name="nama_page" class="bg-focus form-control" data-required="true"> </div>
                           </div>
						   <div class="form-group">
                              <label class="col-lg-3 control-label">Link</label> 
                              <div class="col-lg-8"> <input type="text" name="link" class="bg-focus form-control" data-required="true"> </div>
                           </div>
						   <div class="form-group">
                              <label class="col-lg-3 control-label">Icon</label> 
                              <div class="col-lg-5"> 
									<select  name="icon" id="icon" class="bg-focus form-control" >
														';
														$query = mysql_query("select * from m_icon");
														while($x = mysql_fetch_array($query)){
															echo "<option value='$x[name_icon]'>$x[name_icon]</option>";
														}
														echo'
													 </select> 
								</div>
								 <div class="col-lg-4"> 
									<div id="icon_prev" style="margin-top:5%; font-weight:60px;"></div>
								</div>
                           </div>						   
						   <div class="form-group">
                              <label class="col-lg-3 control-label">Urutan</label> 
                              <div class="col-lg-8"> <input type="text" name="urutan" class="bg-focus form-control" data-required="true"> </div>
                           </div>
						    <div class="form-group">
                              <label class="col-lg-3 control-label">Aktif</label> 
                              <div class="col-lg-8"><select name="status" class="bg-focus form-control">
                              		<option value="Y" selected>Y<option>
                              		<option value="" >N<option>
                              </select> </div>
                           </div>
						   
                           <div class="form-group">
                              <div class="col-lg-9 col-lg-offset-3"> 
                              	<button class="btn btn-white" data-dismiss="modal">Cancel</button> 
                              <button type="submit"  class="btn btn-primary">Save changes</button> </div>
                           </div>
                        </form>
                     </div>
                  </section>
                  
                  ';
	}
	public function get_data_menu_edit(){
		$id = $_POST['id'];
		$query = mysql_query("select * from adm_page where id_page = '$id' ");
		$r = mysql_fetch_array($query);
		echo '
		<section class="panel">
				  <div class="padder header-bar bg clearfix">
						<h3>Update Menu</h3>
					</div>
                     <div class="panel-body">
                        <form class="form-horizontal" method="post" action="'.base_url().'menu/update_menu" data-validate="parsley">
                        <input type="hidden" name="id_page" value="'.$r['id_page'].'" >
                           <div class="form-group">
                              <label class="col-lg-3 control-label">Nama Page</label> 
                              <div class="col-lg-8"> <input type="text" name="nama_page" value="'.$r['nama_page'].'" class="bg-focus form-control" data-required="true"> </div>
                           </div>
						   <div class="form-group">
                              <label class="col-lg-3 control-label">Link</label> 
                              <div class="col-lg-8"> <input type="text" value="'.$r['link'].'" name="link" class="bg-focus form-control" data-required="true"> </div>
                           </div>
						   <div class="form-group">
                              <label class="col-lg-3 control-label">Icon</label> 
                              <div class="col-lg-5"> 
									<select  name="icon" id="icon" class="bg-focus form-control" >
														<option value="'.$r['icon'].'" selected >'.$r['icon'].'</option>';
														$query = mysql_query("select * from m_icon where name_icon != '$r[icon]' ");
														while($x = mysql_fetch_array($query)){
															echo "<option value='$x[name_icon]'>$x[name_icon]</option>";
														}
														echo'
													 </select> 
								</div>
								 <div class="col-lg-4"> 
									<div id="icon_prev" style="margin-top:5%; font-weight:60px;"></div>
								</div>
                           </div>						   
						   <div class="form-group">
                              <label class="col-lg-3 control-label">Urutan</label> 
                              <div class="col-lg-8"> <input type="text" name="urutan" value="'.$r[urutan].'" class="bg-focus form-control" data-required="true"> </div>
                           </div>
						   <div class="form-group">
                                            <label class="col-lg-3 control-label" for="status_subpage">Status</label><br>
											<div class="col-lg-8">';	
													if ( $r["status_page"] == "Y"){
														echo 'Aktif : <input type="radio" id="status_subpage" name="status_page" value="Y" required checked/> &nbsp; &nbsp; 
															Non Aktif : <input type="radio" id="status_subpage" name="status_page" value="N" required/>';
												
													}
												else if( $r["status_page"] =="N") {
														echo 'Aktif : <input type="radio" id="status_subpage" name="status_page" value="Y" required /> &nbsp; &nbsp; 
															Non Aktif : <input type="radio" id="status_subpage" name="status_page" value="N" required checked/>';
													}
												else if( $r["status_page"] == '') {
														echo 'Aktif : <input type="radio" id="status_subpage" name="status_page" value="Y" required /> &nbsp; &nbsp; 
															Non Aktif : <input type="radio" id="status_subpage" name="status_page" value="N" required />';
													}
												echo'</div><br><br><br>';	
                          echo'<div class="form-group">
                              <div class="col-lg-9 col-lg-offset-3"> 
                              	<button class="btn btn-white" data-dismiss="modal">Cancel</button> 
                              	<button type="submit" class="btn btn-primary">Save changes</button>
                               </form>
                              	<div class="btn btn-danger" onclick="delete_data_x(\''.$r['id_page'].'\',\'adm_page\');">Delete</div> 
								</div>
                           </div>
                      
                        
                     </div>
                  </section>';
	}
	public function get_icon(){
		$id = $_POST['id'];
		$query = mysql_query("select * from m_icon where name_icon != '$id' ");
		while($r = mysql_fetch_array($query)){
			echo "<option value='$r[name_icon]'>$r[name_icon]</option>";
		}
	}
	public function delete_data_all(){
		$id = $this->security->sanitize_filename($this->input->post('id'), TRUE);
		$param = $this->security->sanitize_filename($this->input->post('param'), TRUE);
		if($param == "adm_page"){
			$id_param = "id_page";
		}else if($param == "adm_sub_page"){
			$id_param = "id_subpage";
		}
		mysql_query("delete from $param where $id_param = '$id'");
		
	}
	public function submit_menu(){
		$nama_menu = $this->security->sanitize_filename($this->input->post('nama_page'), TRUE);
		$link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
		$icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
		$urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
		$status = $this->security->sanitize_filename($this->input->post('status'), TRUE);
		$this->db->query("insert into adm_page values(
				'',
				'1',
                '$nama_menu',
                '$link',
				'$urutan',
				'$status',
                '$icon')");
            $this->session->set_flashdata('result', 'OK');
			redirect('menu');
	}
	public function update_menu(){
		$id_page = $this->security->sanitize_filename($this->input->post('id_page'), TRUE);
		$nama_menu = $this->security->sanitize_filename($this->input->post('nama_page'), TRUE);
		$link = $this->security->sanitize_filename($this->input->post('link'), TRUE);
		$icon = $this->security->sanitize_filename($this->input->post('icon'), TRUE);
		$urutan = $this->security->sanitize_filename($this->input->post('urutan'), TRUE);
		$status_page = $this->security->sanitize_filename($this->input->post('status_page'), TRUE);
		$this->db->query("update adm_page set nama_page = '$nama_menu', link = '$link', icon = '$icon', urutan = '$urutan', status_page = '$status_page' where id_page = '$id_page'");
            $this->session->set_flashdata('result', 'OK');
			redirect('menu');
	}
	
	/* ================================================== */
	
	public function get_data_submenu_add(){
		echo '<section class="panel">
					 <form class="form-horizontal" method="post" action="'.base_url().'menu/submit_submenu" data-validate="parsley">
				  <div class="padder header-bar bg clearfix">
						<h3>Add Submenu</h3>
					</div>
                     <div class="panel-body">
										<input type="hidden" name="id_subpage" value="$r[id_subpage]" id="id_subpage">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label  class="col-lg-3 control-label" for="nama_page">Parent Menu :</label>
                                           <div class="col-lg-8">
                                           <select name="id_page"  class="form-control" required >'.
												$parent_page= mysql_query("select * from adm_page   order by urutan asc");
											if($r[id_page] != ""){
													while( $p = mysql_fetch_array($parent_page))
													{
														echo '<option value="'.$p[id_page].'">'. $p[nama_page].'</option>';		
													}
											}else{
												$parent_page2= mysql_query("select * from adm_page order by urutan asc ");
												while( $p2 = mysql_fetch_array($parent_page2))
													{
														echo '<option value='.$p2[id_page].'> '.$p2[nama_page].'</option>';		
													}
											}
										echo '</select></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="nama_subpage">Nama Page</label>
											 <div class="col-lg-8"><input type="text" class="form-control" name="nama_subpage"   required id="nama_subpage"></div>
                                        </div>
										 <div class="form-group">
                                            <label class="col-lg-3 control-label" for="link_subpage">Link Subpage</label>
											<div class="col-lg-8"> <input type="text" class="form-control" name="link_subpage" required id="link_subpage" ></div>
                                        </div>
										<div class="form-group">
												<label class="col-lg-3 control-label">Icon:</label>
													<div class="col-lg-8">
														<select  name="icon_subpage" id="icon" class="bg-focus form-control" >
														';
														$query = mysql_query("select * from m_icon where name_icon != '$r[icon]' ");
														while($x = mysql_fetch_array($query)){
															echo "<option value='$x[name_icon]'>$x[name_icon]</option>";
														}
														echo'
													 </select> 
													</div>
											</div>
										<div class="form-group">
                                            <label class="col-lg-3 control-label" for="status_subpage">Status</label><br>
											<div class="col-lg-8">				
														Aktif : <input type="radio" id="status_subpage" name="status_subpage" value="Y" class="required" checked/> &nbsp; &nbsp; 
															Non Aktif : <input type="radio" id="status_subpage" name="status_subpage" value="N" class="required"/>
												
												</div>	
									</div>
									<div class="form-group">
                                            <label class="col-lg-3 control-label" for="link">Urutan</label>
											 <div class="col-lg-8"><input type="text" class="form-control" name="urutan_subpage"   id="urutan_subpage" ></div>
                                        </div>
                                    </div>
						   
                           <div class="form-group">
                              <div class="col-lg-9 col-lg-offset-3"> <button type="submit" class="btn btn-white">Cancel</button> 
                              <button type="submit"  class="btn btn-primary">Save changes</button> </div>
                           </div>
                        </form>
                     </div>
                  </section>
                  
                  ';
	}
	public function get_data_submenu_edit(){
		$id = $_POST['id'];
		$r = mysql_fetch_array(mysql_query("SELECT * from  adm_sub_page CROSS JOIN adm_page on adm_page.id_page =  adm_sub_page.id_page where  adm_sub_page.id_subpage = '$id'  "));
		echo '<section class="panel">
					 <form class="form-horizontal" method="post" action="'.base_url().'menu/submit_submenu" data-validate="parsley">
				  <div class="padder header-bar bg clearfix">
						<h3>Add Submenu</h3>
					</div>
                     <div class="panel-body">
										<input type="hidden" name="id_subpage" value="'.$r[id_subpage].'" id="id_subpage">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label  class="col-lg-3 control-label" for="nama_page">Parent Menu :</label>
                                           <div class="col-lg-8">
                                           <select name="id_page"  class="form-control" required >'.
											$r= mysql_query("select * from adm_page   where id_page != '$r[id_page]'  order by urutan asc");
											if($r[id_page] != ""){
													while( $p = mysql_fetch_array($parent_page))
													{
														echo '<option value="'.$p[id_page].'">'. $p[nama_page].'</option>';		
													}
											}else{
												$parent_page2= mysql_query("select * from adm_page order by urutan asc ");
												while( $p2 = mysql_fetch_array($parent_page2))
													{
														echo '<option value='.$p2[id_page].'> '.$p2[nama_page].'</option>';		
													}
											}
										echo '</select></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="nama_subpage">Nama Page</label>
											 <div class="col-lg-8"><input type="text" class="form-control" name="nama_subpage" value=""  required id="nama_subpage"></div>
                                        </div>
										 <div class="form-group">
                                            <label class="col-lg-3 control-label" for="link_subpage">Link Subpage</label>
											<div class="col-lg-8"> <input type="text" class="form-control" name="link_subpage" required id="link_subpage" ></div>
                                        </div>
										<div class="form-group">
												<label class="col-lg-3 control-label">Icon:</label>
													<div class="col-lg-8">
														<select  name="icon_subpage" id="icon" class="bg-focus form-control" >
														';
														$query = mysql_query("select * from m_icon where name_icon != '$r[icon]' ");
														while($x = mysql_fetch_array($query)){
															echo "<option value='$x[name_icon]'>$x[name_icon]</option>";
														}
														echo'
													 </select> 
													</div>
											</div>
										<div class="form-group">
                                            <label class="col-lg-3 control-label" for="status_subpage">Status</label><br>
											<div class="col-lg-8">				
														Aktif : <input type="radio" id="status_subpage" name="status_subpage" value="Y" class="required" checked/> &nbsp; &nbsp; 
															Non Aktif : <input type="radio" id="status_subpage" name="status_subpage" value="N" class="required"/>
												
												</div>	
									</div>
									<div class="form-group">
                                            <label class="col-lg-3 control-label" for="link">Urutan</label>
											 <div class="col-lg-8"><input type="text" class="form-control" name="urutan_subpage"   id="urutan_subpage" ></div>
                                        </div>
                                    </div>
						   
                           <div class="form-group">
                              <div class="col-lg-9 col-lg-offset-3"> <button type="submit" class="btn btn-white">Cancel</button> 
                              <button type="submit"  class="btn btn-primary">Save changes</button> </div>
                           </div>
                        </form>
                     </div>
                  </section>
                  
                  ';
	}
	public function submit_submenu(){
		$nama_subpage = $this->security->sanitize_filename($this->input->post('nama_subpage'), TRUE);
		$id_page = $this->security->sanitize_filename($this->input->post('id_page'), TRUE);
		$link_subpage = $this->security->sanitize_filename($this->input->post('link_subpage'), TRUE);
		$subpage_icon = $this->security->sanitize_filename($this->input->post('icon_subpage'), TRUE);
		$urutan_subpage = $this->security->sanitize_filename($this->input->post('urutan_subpage'), TRUE);
		$status_subpage = $this->security->sanitize_filename($this->input->post('status_subpage'), TRUE);
		$this->db->query("insert into adm_sub_page values(
				'',
				'$id_page',
                '$nama_subpage',
                '$link_subpage',
				'$urutan_subpage',
				'$status_subpage',
                '$subpage_icon')");
            $this->session->set_flashdata('result', 'OK');
			redirect('menu');
	}	
}
