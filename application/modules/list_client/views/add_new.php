<link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('.default-select2').select2();
    });</script>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    <h5 class="modal-title" id="myModalLabel">Add New Client</h5><hr></hr>
</div>
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>list_client/save_new" enctype="multipart/form-data">
<div class="row">
<div class="modal-body" style="margin-top:-5%;">
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">reorder</i>
                                                        </span><br>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Client Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input required="true" name="client_name" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Address
                                                                <small>(required)</small>
                                                            </label>
                                                           <textarea class="form-control" name="address"></textarea>
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Email
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="email" required="true" type="text" class="form-control" >
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Desctiption
                                                                <small>(required)</small>
                                                            </label>
                                                           <textarea class="form-control" name="description"></textarea>
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group is-empty">
                                                            <label class="control-label">No Telp
                                                            </label><br>
                                                             <input name="no_telp" required="true" type="text" class="form-control" >
                                                        <span class="material-input"></span></div>
                                                        
                                                    </div>
                                                    
                                                </div>
												<div class="col-sm-6">
													<div class="picture-container">
                                                      <div class="fileinput text-center" data-provides="fileinput">
                                                    <div id="image_holder_default" class=" thumbnail" style="border-radius:none;">
                                                    <img src="<?php echo base_url()?>assets/img/image_placeholder.jpg" class="picture-src" id="wizardPicturePreview" title="">
                                                    </div>
                                                    <div class="thumbnail" id="image_holder_gambar" style="border-radius:none;"></div>
                                                    <div>
                                                    <br>
                                                    </div>
                                                    </div>
                                                    </div>
                                                  <span class="btn btn-round btn-rose btn-file">
                                                        <span class="">Add Image</span>
                                                        <input type="file" class="form-control" name="foto" id="foto" onchange="upload_img(this)" />
                                                      </span>

                                                            <p class="btn btn-danger btn-round" id="delete_img" style="display:none;"><i class="material-icons">close</i>Delete</p>

													


                                                </div>
                                            </div></div>
                                            <div class="col-sm-row">
                                            <div class="modal-footer" style="padding:10px 10px;">
                                                <button type="submit" class="btn btn-success btn-round"><i class="fa fa-save"></i> &nbsp; Save</button>
                                                <button type="button" class="btn btn-warning btn-round" data-dismiss="modal">Cancel!</button>
                                              </div>
                                              </div>
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
 $("#delete_img").click(function(){
      $("#image_holder_default").show();
      $("#image_holder_gambar").hide();
      $("#delete_img").hide();
      $("#foto").val("");
    });
function upload_img(gambar){
        var countFiles = gambar.files.length;
        var del = $("#delete_img");
	      var imgPath = gambar.value;
	      var size = gambar.files[0].size;
	      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	      var image_holder_default = $("#image_holder_default");
        var image_holder = $("#image_holder_gambar");
	      image_holder.empty();
	      if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg"){
	        if (typeof(FileReader) != "undefined") {
	          if (parseInt(size) > 5000000) {
	              swal({  type: "warning",  title: "Oops",   text: "Ukuran File Lebih Dari 5000 Kb.",   timer: 1000,   showConfirmButton: false });
                image_holder_default.show();
	          }else{
	              for (var i = 0; i < countFiles; i++)
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image thumbnail",
                    "style": "height:200px;width:250px;"
                  }).appendTo(image_holder);
                    del.show();
                }
                image_holder_default.hide();
                image_holder.show();
                reader.readAsDataURL(gambar.files[i]);
              }
	          }
	        } else {
	          swal({  type: "warning",  title: "Oops",   text: "File Format tidak mendukung.",   timer: 1000,   showConfirmButton: false });
            image_holder_default.show();
	        }
	      }else if (extn == "doc" || extn == "docx" || extn == "xls" || extn == "xlsx" || extn == "pdf" ) {
	        if (typeof(FileReader) != "undefined") {
	          //loop for each file selected for uploaded.
	          for (var i = 0; i < countFiles; i++)
	          {
	            var reader = new FileReader();
	            reader.onload = function(e) {
	              $("<img />", {
	                "src": "<?php echo base_url()?>assets/attachments.png",
	              }).appendTo(image_holder);
	            }
	            image_holder.show();
	            reader.readAsDataURL(gambar.files[i]);
	          }
	        } else {
	          swal({  type: "warning",  title: "Oops",   text: "File Format tidak mendukung.",   timer: 1000,   showConfirmButton: false });
            image_holder_default.show();
	        }
	      } else {
	        swal({  type: "warning",  title: "Oops",   text: "File Format tidak mendukung.",   timer: 1000,   showConfirmButton: false });
          image_holder_default.show();
	      }
  }
                                            </script>
