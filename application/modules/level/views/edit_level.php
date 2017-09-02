<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    <h5 class="modal-title" id="myModalLabel">Edit Level</h5><hr></hr>
</div>
<form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>level/update_level" enctype="multipart/form-data">
<div class="row">
<div class="modal-body">
      <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
      <?php
          foreach($detil_level as $x){

      ?>
        <input type="hidden" value="<?php echo $x->idx;?>" name="id_level" >
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Level Code
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="level_code" value="<?php echo $x->jbt_id?>" type="text" class="form-control">
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">mail</i>
                                                        </span>
                                                        <div class="form-group label-floating is-focused">
                                                            <label class="control-label">Level Name
                                                                <small>(required)</small>
                                                            </label>
                                                            <input name="level_name" value="<?php echo $x->jbt_nama?>" type="text" class="form-control">
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
