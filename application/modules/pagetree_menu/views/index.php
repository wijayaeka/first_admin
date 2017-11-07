<!--<script>
var pageload = 	getCookie('pageload');
$("#pageload").html(pageload);
</script> -->
<style>
.selected td {
    background-color: black !important; /* Add !important to make sure override datables base styles */
 }

	.modal-dialog {
    width: 70%;
    margin: 8% 8%;
}
#css_menu_tree img{
		width:40%;
	}
th.dt-center, td.dt-center { text-align: center; }
th.dt-purple, td.dt-purple { text-align: center; font-weight:bold; color:#9C27B0;  }
th.dt-red, td.dt-red { text-align: center; font-weight:bold; color:#F44336;  }
</style>

	<script src="<?php echo base_url();?>assets/plugins/mod_treemenu/js/jquery.treeview.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/mod_treemenu/css/jquery.treeview.css"  type="text/css"/> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/mod_treemenu/css/tab.css"  type="text/css"/> 
	<!--Tree Menu-->
<script type="text/javascript">
$(document).ready(function(){
	$("#navigation").treeview({
		persist: "location",
		collapsed: true,
		unique: true
	});
});
</script>
	<div class="content">
	<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
						 <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-notice">
                                        <div class="modal-content">
                                          <div id="return_content">
                                          </div>
                                        </div>
                                      </div>
                                </div>
                              
                            <div class="card">
                                <div class="card-header card-header-text" data-background-color="orange">
                                    <h4 class="card-title">Front Menu Configuration</h4>
                                    <p class="category"></p>
                                </div>
								<div class="">
								  <div class="col-sm-2">
                                    <div class="content card-pricing">
                                        <h6 class="category">Front Menu</h6>
                                        <div class="icon icon-rose">
                                            <i class="material-icons">list</i>
                                        </div>
                                    </div>
								</div>
								<script>
										function edit_menu(id,menu_name){
											 $('#btn_setting').show();
											 $.ajax({
															type:"POST",
															url:"<?php echo base_url()?>pagetree_menu/edit",
															data:{'id':id,'token':token_code},
															success:function(returns){
																$("#view_dataedit").html(returns);
																$("#menu_title").html(menu_name);		
																edit_assign_article(id,menu_name);
															}
											}); 
											return false;
										}
										function edit_assign_article(id,menu_name){
											$("#article_title").html(menu_name);	
											 $('#btn_setting').show();
											 $.ajax({
															type:"POST",
															url:"<?php echo base_url()?>pagetree_menu/article_assign",
															data:{'id':id,'token':token_code},
															success:function(returns){
																$("#view_articleedit").html(returns);
																	
															}
											}); 
											return false;
										}
										function add_menu(menu_stat,parent){
											//alert(menu_stat);
											$('#noticeModal').modal({backdrop: 'static',keyboard: false});
											$.ajax({
																type:"POST",
																url:"<?php echo base_url()?>pagetree_menu/add_new",
																data:{'token':token_code,'menu_stat':menu_stat,'parent':parent},
																success:function(returns){
																	$("#return_content").html(returns);
																}
													   })
										}
										 
								</script>
								<div class="col-lg-2">
									<div id="css_menu_tree">
										<ul id="navigation">
											<?php
											$menu = $this->db->query("SELECT * FROM front_menu WHERE menu_stats='mm' ORDER BY list_number asc");
											foreach($menu->result() as $m1){
													$data_menu[$m1->menu_name] = $m1;
													echo "<li><a href='#' onClick='edit_menu(\"$m1->id_menu\",\"$m1->menu_name\")'>$m1->menu_name</a>";
													$menu2 = $this->db->query("SELECT * FROM front_menu 
																		   WHERE menu_stats='sm1' 
																		  AND id_parent=".$m1->id_menu." 
																		  ORDER BY list_number asc");
													if($menu2->num_rows() > 0){
														echo"<ul>";
														foreach($menu2->result() as $m2){
																	$data_menu2[$m2->menu_name] = $m2;
																	echo "<li><a href='#' onClick='edit_menu(\"$m2->id_menu\",\"$m2->menu_name\")'>$m2->menu_name</a>";
																	$menu3 = $this->db->query("SELECT * FROM front_menu 
																			   WHERE menu_stats='sm2' 
																			  AND id_parent=".$m2->id_menu." 
																			  ORDER BY list_number asc");
																			if($menu3->num_rows() > 0){
																				echo"<ul>";
																				foreach($menu3->result() as $m3){
																							$data_menu3[$m3->menu_name] = $m3;
																							echo "<li><a href='#' onClick='edit_menu(\"$m3->id_menu\",\"$m3->menu_name\")'>$m3->menu_name</a></li>";
													
																							
																			}
																				
																						
																						echo"</ul></li>";
																			}else{
																				echo"<ul><li><a href='#' onclick='add_menu(\"sm2\",\"$m2->id_menu\")'  title='Add Submenu' class='login-window tipb' id='tip3'>
																				<i class='material-icons'  style='font-size:12px;'>add</i>
																				</a></li></ul></li>";
																			}
														}
															echo"<li><a href='#' onclick='add_menu(\"sm1\",\"$m2->id_menu\")' title='Add Submenu' class='login-window tipb' id='tip3'>
																<i class='material-icons'  style='font-size:12px;'>add</i>
																</a></li>";
														echo"</ul>
														
														</li>
														
														";
													}else{
														echo"<ul><li><a href='#' onclick='add_menu(\"sm1\",\"$m1->id_menu\")'  title='Add Submenu' class='login-window tipb' id='tip3'>
														<i class='material-icons'  style='font-size:12px;'>add</i>
														</a></li></ul></li>";
													}				
									}
												
											?>
											<li><a href="#" onclick='add_menu("mm","0","0")' title='Add Submenu' class='login-window tipb' id='tip3'>
																					<i class='material-icons'  style='font-size:12px;'>add</i>
																					</a></li>
										</ul>
									</div>
                                </div>
						<div class="col-lg-8 col-md-12">
                            <div class="card">
							<div class="card-header card-header-text" data-background-color="green" style="min-width:90%;">
							<div class="dropdown pull-right" id="btn_setting" style="display:none;">
                                                <button type="button" class="btn btn-round btn-warning dropdown-toggle" data-toggle="dropdown">
                                                    <i class="material-icons">apps</i>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <li>
                                                        <a onClick="delete_menu()">Delete Menu</a>
                                                    </li>
                                                </ul>
                                            </div>
                                    <h4 class="card-title" >Menu : <span id="menu_title"></span></h4>
                                    <p class="category"></p>
									
                                </div>
								
                              <!-- <div class="card-header card-header-tabs" data-background-color="green">
                                    <div class="input-group">
                                            Menu:
                                                        <h3 id="menu_title"></h3>
														</div>
                                </div>-->
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" >
											<div id="view_dataedit" style="min-height:300px;"></div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
						 <div class="col-md-12">
								<div class="card  card-raised">
								<div class="card-header card-header-text" data-background-color="blue">
                                    <h4 class="card-title">Article Assign to Menu : </h4>
                                    <p id="article_title"></p>
                                </div>
								<div id="view_articleedit" style="min-height:300px;"></div>
                        </div>
						</div>
						
								</div>
								
                            </div>
							
                        </div>
                        </div>
                    </div>
</div>