<link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('.default-select2').select2();
    });
    function upload_img(gambar){
     	  var countFiles = gambar.files.length;
	      var imgPath = gambar.value;
	      var size = gambar.files[0].size;
	      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
	      var image_holder_default = $("#image_holder_default");
        var image_holder = $("#image_holder_gambar");
	      image_holder.empty();
	      if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg"){
	        if (typeof(FileReader) != "undefined") {
	          if (parseInt(size) > 200000) {
	              swal({  type: "warning",  title: "Oops",   text: "Ukuran File Lebih Dari 200 Kb.",   timer: 1000,   showConfirmButton: false });
                image_holder_default.show();
	          }else{
	              for (var i = 0; i < countFiles; i++)
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image thumbnail",
                    "style": "height:150px;width:150px;"
                  }).appendTo(image_holder);
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
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    <h5 class="modal-title" id="myModalLabel">Edit User</h5><hr></hr>
</div>
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>users/update_user" enctype="multipart/form-data">
<div class="row">
<div class="modal-body">
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <?php
          foreach($detil_user as $x){

      ?>
        <input type="hidden" value="<?php echo $x->id;?>" name="id_user" >
                                                <div class="col-sm-3">
                                                    <div class="picture-container">
                                                      <div class="fileinput text-center" data-provides="fileinput">
                                                      <?php
                                                        if($x->img != ""){
                                                            ?>
                                                            <div id="image_holder_default" class=" thumbnail img-circle" style="border-radius:none;">
                                                                <img src="<?php echo base_url()?>assets/usr_img/<?php echo $x->img;?>" class="picture-src" id="wizardPicturePreview" title="">
                                                            </div>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <div id="image_holder_default" class=" thumbnail img-circle" style="border-radius:none;">
                                                                <img src="<?php echo base_url()?>assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="">
                                                            </div>
                                                            <?php
                                                        }
                                                      ?>
                                              <div class="thumbnail" id="image_holder_gambar" style="border-radius:none;"></div>
                                              <div>
                                                  <span class="btn btn-round btn-rose btn-file">
                                                      <span class="">Add Photo</span>
                                                      <input type="file" class="form-control" name="foto" id="foto" onchange="upload_img(this)" />
                                                  </span>
                                                  <br>
                                              </div>
                                          </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Full Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="fullname" value="<?php echo $x->nama_lengkap?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">mail</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Email
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="email" value="<?php echo $x->email?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">home</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Address
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="address" value="<?php echo $x->alamat?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Phone
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="phone"  value="<?php echo $x->no_tlp?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Username
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="username" value="<?php echo $x->username?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Password
                                                                <small>(fill if change)</small>
                                                            </label>
                                                            <input name="password"  type="password" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group is-empty">
                                                            <label class="control-label">Level
                                                            </label><br>
                                                            <?php //echo json_encode($list_level);?>
                                                            <select class="form-control default-select2" name="userlevel" id="userlevel" style="width:100%;">
                                                              <option value="<?php echo $x->userlevel;?>" selected>  <?php echo $x->jbt_nama;?> </option> -->
                                                            <?php
                                                                foreach($list_level as $ll){
                                                                  echo "<option value='".$ll->idx."' >".$ll->jbt_nama."</option>";
                                                                }
                                                            ?>
                                                           </select>
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                </div>

                                            </div></div>
                                            <div class="col-sm-row">
                                            <div class="modal-footer" style="padding:10px 10px;">
                                                <button type="submit" class="btn btn-success btn-round"><i class="fa fa-save"></i> &nbsp; Save</button>
                                                <button type="button" class="btn btn-warning btn-round" data-dismiss="modal">Cancel!</button>
                                              </div>
                                              </div>
                                              </form>
                                              <?php } ?>
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                     $('.default-select2').select2()
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
                                                       //location.reload();
                                                   }
                                                 }
                                               })
                                               return false;

})
                                            </script>
