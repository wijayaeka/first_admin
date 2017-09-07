<link href="<?php echo base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('.default-select2').select2();
    });</script>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    <h5 class="modal-title" id="myModalLabel">Edit Subpage</h5><hr></hr>
</div>
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>Article_category/update_article_category" enctype="multipart/form-data">
<div class="row">
<div class="modal-body" style="margin-top:-5%;">
  <?php foreach ($detil_modul as $x) {?>
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <input type="hidden" name="id_category_article" id="id_category_article" value="<?php echo $x->id_category_article?>">
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">reorder</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Category Article Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input required="true" name="category_name" value="<?php echo $x->article_category_name;?>" type="text" required="true" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                     <div class="input-group">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">record_voice_over</i>
                                                      </span>
                                                      <div class="form-group is-empty">
                                                          <label class="control-label">Active 
                                                          </label><br>
                                                          <div class="togglebutton">
                                                          <label>
                                                              <?php
                                                              if($x->status == "on"){
                                                                echo '<input type="checkbox"  name="active_status" checked id="active_status"><span class="toggle"></span>';
                                                              }else{
                                                                  echo '<input type="checkbox"  name="active_status" id="active_status"><span class="toggle"></span>';
                                                              }
                                                            ?>
                                                          </label></div>
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
