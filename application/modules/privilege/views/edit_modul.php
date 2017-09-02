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
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>modul/update_modul" enctype="multipart/form-data">
<div class="row">
<div class="modal-body" style="margin-top:-5%;">
  <?php foreach ($detil_modul as $x) {?>
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <input type="hidden" name="id_modul" id="id_modul" value="<?php echo $x->id?>">
                                                <div class="col-sm-12">
                                                  <div class="input-group ">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">list</i>
                                                      </span>
                                                      <div class="form-group is-focused">
                                                          <label class="control-label"> Parent Page
                                                          </label><br>
                                                          <select class="form-control default-select2" required="true" name="category_page" id="category_page" style="width:100%;">
                                                            <option selected value="<?php echo $x->id_kategori_page; ?>"><?php echo $x->jenis_page; ?> </option>
                                                            <?php
                                                                foreach($list_kategori_page as $lk){

                                                                  echo "<option value='".$lk->id_kategori_page."' >".$lk->jenis_page."</option>";
                                                                }
                                                            ?>
                                                         </select>
                                                      <span class="material-input"></span></div>
                                                  </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">reorder</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Module Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="module_name" required="true" value="<?php echo $x->module_name; ?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">block</i>
                                                        </span>
                                                        <div class="form-group is-focused">
                                                            <label class="control-label">Icon Module
                                                            </label><br>
                                                            <select class="form-control default-select2" required="true" name="icon" id="icon" style="width:70%;">
                                                                <option selected value="<?php echo $x->icon_module; ?>"><?php echo $x->icon_module; ?> </option>
                                                            <?php
                                                                foreach($list_icon as $xx){
                                                                  echo "<option value='".$xx->icon."' >".$xx->icon."</option>";
                                                                }
                                                            ?>
                                                          </select><i class="material-icons" style="position:absolute; margin-left:2%;" id="icn_prev"><?php echo $x->icon_module; ?></i>
                                                        <span class="material-input"></span>
                                                      </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Module Order
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="urutan" value="<?php echo $x->urutan_module; ?>"  required="true" type="number" class="form-control" style="width:20%;">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group is-focused">
                                                            <label class="control-label">Status
                                                            </label><br>
                                                            <?php
                                                                  if($x->status_module == "Y"){
                                                                     ?>
                                                                           <div class="togglebutton">
                                                                           <label>
                                                                               <input type="checkbox" checked="" name="status" ><span class="toggle"></span> Active
                                                                           </label></div>
                                                                     <?php
                                                                  }else{
                                                                  ?>
                                                                  <div class="togglebutton">
                                                                  <label>
                                                                      <input type="checkbox" name="status"><span class="toggle"></span> Active
                                                                  </label></div>
                                                                  <?php
                                                                  }
                                                            ?>

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
