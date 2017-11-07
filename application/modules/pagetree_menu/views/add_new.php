<link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('.default-select2').select2();
    });</script>
<div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
   <h5 class="modal-title" id="myModalLabel">Add Front Menu</h5><hr></hr>
</div>
<form class="form-horizontal" id="form_process_add" method="post" action="<?php echo base_url();?>pagetree_menu/add_menu" enctype="multipart/form-data">
<div class="row">

<div class="modal-body" style="margin-top:-5%;">
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <input type="hidden" name="menu_stat" id="menu_stat" value="<?php echo $menu_stat;?>" >
	  <input type="hidden" name="parent" id="parent" value="<?php echo $parent;?>" >
                                                <div class="col-sm-6">
												<div class="nav-tabs-navigation">
													<div class="nav-tabs-wrapper">
														<span class="nav-tabs-title">Menu Name:</span>
														<ul class="nav nav-tabs default" data-tabs="tabs">
															<li class="active">
																<a href="#profile" data-toggle="tab" aria-expanded="true">
																	<i class="material-icons">flag</i>Indonesian
																	<div class="ripple-container"></div>
																</a>
															</li>
															<li class="">
																<a href="#profile2" data-toggle="tab" aria-expanded="true">
																	<i class="material-icons">flag</i>English
																	<div class="ripple-container"></div>
																</a>
															</li>
														</ul>
													</div>
												</div>
												 <div class="tab-content">
													<div class="tab-pane active" id="profile">
														<div class="input-group ">
															  <span class="input-group-addon">
																  <i class="material-icons">list</i>
															  </span>
															  
															  <span class="nav-tabs-title">Indonesian:</span>
															  <div class="form-group is-focused">
																  <?php //echo json_encode($list_level);?>
																   <input type="text" style="width:50%;" name="menu_name" class="form-control" id="menu_name" placeholder="Indonesian"  required="true">
															  <span class="material-input"></span></div>
														</div>
													</div>
													<div class="tab-pane " id="profile2">
														<div class="input-group ">
															  <span class="input-group-addon">
																  <i class="material-icons">list</i>
															  </span>
															  
															  <span class="nav-tabs-title">English:</span>
															  <div class="form-group is-focused">
																  <?php //echo json_encode($list_level);?>
																   <input type="text" style="width:50%;" name="menu_name_english" id="menu_name_english"  class="form-control" placeholder="English"  required="true">
															  <span class="material-input"></span></div>
														</div>
													</div>
												</div>
												<hr></hr>
												<div class="form-group is-empty">
												<div class="input-group ">

															  <span class="input-group-addon">
																  <i class="material-icons">list</i>
															  </span>
															  <span class="nav-tabs-title">Icon:</span>
															  <div class="form-group is-focused">
																		<select required="true"  class="form-control default-select2" name="icon" id="icon" style="width:50%;"">
																			  <option selected value="">   </option>
																			<?php
																				foreach($list_icon as $lk){
																				  echo "<option value='".$lk->icon."' >".$lk->icon."</option>";
																				}
																			?>
																		  </select>
																	<i class="material-icons" style="position:absolute; margin-left:10%;" id="icn_prev"></i>
																</div>																  
																  <span class="material-input"></span></div>
														</div>
												<div class="form-group is-empty">
												<div class="input-group ">
															  <span class="input-group-addon">
																  <i class="material-icons">list</i>
															  </span>
															  <span class="nav-tabs-title">Order:</span>
															  <div class="form-group is-focused">
															  
																	<input type="text" style="width:20%" name="urutan" id="urutan"  class="form-control"  required="true">
															 
																</div>																  
																  <span class="material-input"></span>
												</div>
														</div>
														

                                                      </div>
                                                </div>
												 </div>
                                            <div class="modal-footer " >
											<div class="pull-left">
                                                <button type="submit" class="btn btn-success btn-round " ><i class="fa fa-save"></i> &nbsp;Save</button>
                                                 <button type="button" class="btn btn-warning btn-round" data-dismiss="modal">Cancel!</button>
                                            </div>
											  </div>
											  
                                              </form>
											  
<script type="text/javascript">
 
  $("#icon").change(function(){
      var vall = $(this).val();
      $("#icn_prev").html(vall);

  });
  $("#form_process_add").submit(function(e) {
        e.preventDefault();
        e = e || window.e
        var form = e.target;
        var data = new FormData(form);
        $.ajax({
                  url: form.action,
                  method: form.method,
                  processData: false,
                  contentType: false,
                  data: data,
                  processData: false,
                  success: function(datas){
                        $('#datatables').DataTable().draw();
                        if(datas == "1"){
                                swal({type: "success",  title: "Sukses Simpan",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                $('#noticeModal').modal('toggle');
                        }else{
                                swal({type: "warning",  title: "Gagal Simpan",   text: "Gagal Tersimpan.",   timer: 1000,   showConfirmButton: false });
                        }
                  }
          })
          return false;
})
                                            </script>
