<script>
  $(document).ready(function(){
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
  });
</script>
<div class="content">
  <div class="container-fluid">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>

    </div>
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-icon" data-background-color="orange">
                      <i class="fa fa-sitemap fa-2x"></i>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                    <p>Add Privilege For</P>
                      <h4 class="card-title"><?php echo $title ." <i class='fa fa-arrow-right'></i> ". $destination;?></h4>
                      <form method="post" id="privilegeSubPageForm" action="<?php echo base_url()."privilege/submit_subpage";?>" >
                      <div class="col-md-12">
                        <input type="hidden" name="subpage_id" id="subpage_id" value="<?php echo $id;?>">
                        <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="card-content table-responsive table-full-width">
                            <table id="datatables_subPage" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th><input name="select_all" value="1" id="example-select-all_subpage" type="checkbox"></th>
                                      <th>Level Name</th>

                                  </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $query  = $this->db->query("select * from adm_jabatan order by jbt_nama asc");
                                  foreach($query->result() as $a){
                                    echo "<tr>
                                    <td>";if($this->library_function->get_check_prev_subpage($id,$a->idx) > 0){
                                        echo "<input type='checkbox' name='id[]' value='".$a->idx."'  checked/>";
                                    }else{
                                        echo "<input type='checkbox' name='id[]' value='".$a->idx."'  />";
                                    } echo "</td>
                                        <td>$a->jbt_nama</td>
                                    </tr>";
                                  }
                                ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="col-md-12">
                  <div class="toolbar" >
                      <input type="submit" id="buttonAdd" class="btn btn-info btn-round" value="Submit" />
                      </form>
                      <button data-dismiss="modal" class="btn btn-warning btn-round">
                          <i class="material-icons">close</i> Cancel
                      </button>
                  </div>

                  </div>
          </div>
      </div>
  </div>
</div>
            </div>

<script type="text/javascript">
var subpage_id = $("#subpage_id").val();
$('#datatables_subPage').DataTable();
         $('#datatables_subPage tbody').on( 'click', 'tr', function () {
         if ( $(this).hasClass('warning') ) {
              $(this).find('input[type="checkbox"]').trigger('click');
             $(this).removeClass('warning');
         }
         else {
             $('#datatables_subPage').DataTable().$('tr.warning').removeClass('warning');
             $(this).find('input[type="checkbox"]').trigger('click');
             $(this).addClass('warning');
         }
     });
      $('#example-select-all_subpage').on('click', function(){
           var rows = $('#datatables_subPage').DataTable().rows({ 'search': 'applied' }).nodes();
           $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });
                $('.card .material-datatables_subPage label').addClass('form-group');
$("#privilegeSubPageForm").submit(function(e) {
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
                                  if(datas == "1"){
                                          swal({type: "success",  title: "Sukses Simpan",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                          $('#noticeModal2').modal('toggle');
                                  }else{
                                          swal({type: "warning",  title: "Gagal Simpan",   text: "Gagal Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                  }
                                  //  swal({type: "success",  title: "Sukses Simpan",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                  /*
                                      $('#datatables_subPage').DataTable().draw();
                                      if(datas == "1"){
                                              swal({type: "success",  title: "Sukses Simpan",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                              $('#noticeModal').modal('toggle');
                                      }else{
                                              swal({type: "warning",  title: "Gagal Simpan",   text: "Gagal Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                      } */
                                }
                        })
                        return false;
              })
</script>
