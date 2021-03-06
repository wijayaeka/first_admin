<link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>
<script>
               // Replace the <textarea id="editor1"> with a CKEditor
               // instance, using default configuration.
               CKEDITOR.replace( 'isi_article' );
               CKEDITOR.replace( 'article_eng' );
           </script>
<script>
    $(document).ready(function() {
         $('.default-select2').select2();
    });
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
    $(".close").click(function(){
    // $( "#minimizeSidebar" ).trigger( "click" );
    });
</script>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    <h5 class="modal-title" id="myModalLabel">Add New Article</h5><hr></hr>
</div>
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>content_article/save_new" enctype="multipart/form-data">
<div class="row">
<div class="modal-body">
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                <div class="col-sm-6">
                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">record_voice_over</i>
                                                      </span>
                                                      <div class="form-group is-empty">
                                                          <label class="control-label">Content Category
                                                          </label><br>
                                                          <?php //echo json_encode($list_level);?>
                                                          <select class="form-control default-select2" name="article_category" id="article_category" style="width:100%;" required="true">
                                                            <option selected> Choose Category</option> -->
                                                          <?php
                                                              foreach($list_content_category as $ll){
                                                                echo "<option value='".$ll->id_category."' >".$ll->category_name."</option>";
                                                              }
                                                          ?>
                                                         </select>
                                                      <span class="material-input"></span>
                                                      </div>
                                                  </div>
                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">class</i>
                                                      </span>
                                                      <div class="form-group is-empty">
                                                          <label class="control-label">Article Category
                                                          </label><br>
                                                          <?php //echo json_encode($list_level);?>
                                                          <select class="form-control default-select2" name="article_content_category" id="article_content_category" required="true" style="width:70%;">
                                                            <option selected> Choose Category</option> -->
                                                          <?php
                                                              foreach($list_article_category as $ll){
                                                                echo "<option value='".$ll->id_category_article."' >".$ll->article_category_name."</option>";
                                                              }
                                                          ?>
                                                         </select> <p class="btn btn-primary btn-fab btn-fab-mini" id="popup_category_article"><i class="material-icons">launch</i></p>
                                                      <span class="material-input"></span>
                                                      </div>
                                                  </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>

                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Title
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="title" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Publish Date
                                                                <small>(required)</small>
                                                            </label>
                                                              <input type="text" name="publish_date" id="publish_date" required="true" class="form-control datepicker col-sm-3" value="<?php echo date("Y-m-d");?>" />
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                  <div class="col-sm-6">
                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">record_voice_over</i>
                                                      </span>
                                                      <div class="form-group is-empty">
                                                          <label class="control-label">Active Publish
                                                          </label><br>
                                                          <div class="togglebutton">
                                                          <label>
                                                              <input  type="checkbox" name="active_status" id="active_status"><span class="toggle"></span>
                                                          </label></div>
                                                      <span class="material-input"></span></div>
                                                  </div>
                                                  <div class="input-group">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">record_voice_over</i>
                                                      </span>
                                                      <div class="form-group is-empty">
                                                          <label class="control-label">Running News
                                                          </label><br>
                                                          <div class="togglebutton">
                                                          <label>
                                                              <input type="checkbox"  name="running_news" id="running_news"><span class="toggle"></span>
                                                          </label></div>
                                                      <span class="material-input"></span></div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                                    <div class="form-group is-empty">
                                                        <label class="control-label">Headline
                                                        </label><br>
                                                        <div class="togglebutton">
                                                        <label>
                                                            <input type="checkbox"  name="headline" id="headline"><span class="toggle"></span>
                                                        </label></div>
                                                    <span class="material-input"></span></div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                                    <div class="form-group is-empty">
                                                        <label class="control-label">Open Comment
                                                        </label><br>
                                                        <div class="togglebutton">
                                                        <label>
                                                            <input type="checkbox"  name="open_comment" id="open_comment"><span class="toggle"></span>
                                                        </label></div>
                                                    <span class="material-input"></span></div>
                                                </div>
                                              </div>
                                                </div>
                                                <div class="col-sm-6">
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
                                                </div>

                                                <div class="col-sm-6">

                                                  <span class="btn btn-round btn-rose btn-file">
                                                        <span class="">Add Image</span>
                                                        <input type="file" class="form-control" name="foto" id="foto" onchange="upload_img(this)" />
                                                      </span>

                                                            <p class="btn btn-danger btn-round" id="delete_img" style="display:none;"><i class="material-icons">close</i>Delete</p>




                                                </div>
                                                </div>
                                                <div class="col-sm-12">

                                                </div>
  <div class="col-sm-12">
          <div class="col-sm-6">
            <div class="form-group label-floating is-empty">
                <label class="control-label">Article (Indonesian)
                </label><br>
                 <textarea id="isi_article" name="isi_article" required="true"></textarea>
            <span class="material-input"></span></div>
          </div>
          <div class="col-sm-6">
            <div class="form-group label-floating is-empty">
                <label class="control-label">Article (English)
                </label><br>
                <textarea name="article_eng" id="article_eng"  class="form-control" required="true"  style="min-height:150px;"></textarea>
            <span class="material-input"></span></div>
          </div>
  </div>

                                            </div>
                                             <div class="modal fade " id="smallModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-notice">
                                        <div class="modal-content">
                                          <div id="return_content2">
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                            </div>
                                            <div class="col-sm-row">
                                            <div class="modal-footer" style="padding:10px 10px;">
                                                <button type="submit" class="btn btn-success btn-round"><i class="fa fa-save"></i> &nbsp; Save</button>
                                                <button type="button" class="btn btn-warning btn-round" data-dismiss="modal">Cancel!</button>
                                              </div>
                                              </div>
                                              </form>
                                            <script type="text/javascript">
                                            
                                            
                                             $('#popup_category_article').click( function () {
											        $('#smallModal').modal({backdrop: 'static',keyboard: false});
											            $.ajax({
											      						type:"POST",
											      						url:"<?php echo base_url()?>content_article/add_new",
											      						data:token,
											      						success:function(returns){
											      							$("#return_content").html(balikan);
											      						}
														       })
											    });
                                            $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
         });
         $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
         });
         $('.timepicker').datetimepicker({
//          format: 'H:mm',    // use this format if you want the 24hours timepicker
            format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
         });
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
                                                   }
                                                 }
                                               })
                                               return false;
})
                                            </script>