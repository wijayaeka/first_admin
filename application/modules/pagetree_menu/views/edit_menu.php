<link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('.default-select2').select2();
    });
	function delete_menu(){
		var id = $("#id_menu").val();
		 swal({
			  title: "Hapus Data ini?",
			  text: "Aksi ini tidak bisa kembalikan",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Ya, hapus data ini!",
			  closeOnConfirm: false
			},
			function(){
											 $.ajax({
															type:"POST",
															url:"<?php echo base_url()?>pagetree_menu/delete",
															data:{'id':id,'token':token_code},
															success:function(datas){
																$("#view_dataedit").html('');
																$("#menu_title").html('');		
																 if(datas == "1"){
																		swal({type: "success",  title: "Sukses Simpan",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
																		$('#noticeModal').modal('toggle');
																}else{
																		swal({type: "warning",  title: "Gagal Simpan",   text: "Gagal Tersimpan.",   timer: 1000,   showConfirmButton: false });
																}
															}
											}); 
											return false;
											 }
    );
										}
										
	
	</script>
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>pagetree_menu/update_menu" enctype="multipart/form-data">
<div class="row">
  <?php foreach ($detail_data as $x) {?>
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <input type="hidden" name="id_menu" id="id_menu" value="<?php echo $x->id_menu?>">
                                                <div class="col-sm-12">
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
																   <input type="text" style="width:50%;" name="menu_name" class="form-control" id="menu_name" placeholder="Indonesian" value="<?php echo $x->menu_name?>" required="true">
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
																   <input type="text" style="width:50%;" name="menu_name_english" id="menu_name_english"  class="form-control" placeholder="English"  value="<?php echo $x->menu_name_english?>" required="true">
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
																			  <option selected value="<?php echo $x->icon; ?>"><?php echo $x->icon; ?> </option>
																			<?php
																				foreach($list_icon as $lk){

																				  echo "<option value='".$lk->icon."' >".$lk->icon."</option>";
																				}
																			?>
																		  </select>
																	<i class="material-icons" style="position:absolute; margin-left:10%;" id="icn_prev"><?php echo $x->icon; ?></i>
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
															  
																	<input type="text" style="width:20%" name="urutan" id="urutan"  class="form-control" placeholder="English"  value="<?php echo $x->list_number?>" required="true">
															 
																</div>																  
																  <span class="material-input"></span>
												</div>
														</div>
														

                                                      </div>
                                                </div>
                                            <div class="modal-footer " >
											<div class="pull-left">
                                                <button type="submit" class="btn btn-success btn-round " style="margin-top: 8%;"><i class="fa fa-save"></i> &nbsp;Save</button>
                                                <button type="button" class="btn btn-warning btn-round" ><i class="fa fa-close"></i> Cancel!</button>
                                              </div>
											  </div>
                                              <?php } ?>
                                              </form>
<script type="text/javascript">
  $("#kategori_page").change(function(){
      var id  = $(this).val();
      $.ajax({
        url: "<?php echo base_url()?>page/get_optmodul",
        method: "POST",
        data: {'id':id,'token':token_code},
        success: function(datas){
            $('#modul').html(datas);
        }
      })
  });
  $("#icon").change(function(){
      var vall = $(this).val();
      $("#icn_prev").html(vall);

  });
  $("#form_process").submit(function(e) {
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
