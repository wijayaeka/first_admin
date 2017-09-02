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
th.dt-center, td.dt-center { text-align: center; }
th.dt-purple, td.dt-purple { text-align: center; font-weight:bold; color:#9C27B0;  }
th.dt-red, td.dt-red { text-align: center; font-weight:bold; color:#F44336;  }
</style>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">list</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Subpage</h4>
                                    <div class="col-md-12">
                                    <div class="toolbar" >
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        <button id="buttonAdd" class="btn btn-primary btn-round" >
                                            <i class="material-icons">add</i> Add New
                                        </button>
                                        <button id="buttonEdit" class="btn btn-warning btn-round disabled">
                                            <i class="material-icons">edit</i> Edit
                                        </button>
                                        <button id="buttonDelete" class="btn btn-danger btn-round disabled">
                                            <i class="material-icons">delete</i> Delete
                                        </button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card-content table-responsive table-full-width">
                                        <table id="datatables" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Sub Page Name</th>
                                                    <th>Link</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                    <th>Icon</th>
                                                    <th>Page Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-notice">
                                        <div class="modal-content">
                                          <div id="return_content">
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            <!--  end card  -->
                        </div>

                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>

<script type="text/javascript">

    $('#datatables').DataTable({
                "processing": true,
                 "serverSide": true,
                 "scrollX": true,
                 "displayLength": 5,
                 "pagingType": "full_numbers",
                "ajax": "<?php echo base_url();?>subpage/listSubpage",
                "columnDefs": [
                  {"className": "dt-center", "targets": 3},
                  {"className": "dt-red", "targets": 4},
                  {"className": "dt-purple", "targets": 6}
                 ],
                "language": {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

             });
    $('.card .material-datatables label').addClass('form-group');
    $('#datatables tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('warning') ) {
            $(this).removeClass('warning');
            $('#buttonEdit').addClass('disabled');
            $('#buttonDelete').addClass('disabled');
        }
        else {
            $('#datatables').DataTable().$('tr.warning').removeClass('warning');
            $('#buttonEdit').removeClass('disabled');
            $('#buttonDelete').removeClass('disabled');
            $(this).addClass('warning');
        }
    });

    /* ADD */
    $('#buttonAdd').click( function () {
        $('#noticeModal').modal({backdrop: 'static',keyboard: false});
            $.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>subpage/add_new",
      						data:token,
      						success:function(returns){
      							$("#return_content").html(returns);
      						}
			       })
    });

        /* EDIT */
        $('#buttonEdit').click( function () {
            var id =   $("#datatables").DataTable().row('.warning').data()[0];
            $('#noticeModal').modal({backdrop: 'static',keyboard: false});
                $.ajax({
          						type:"POST",
          						url:"<?php echo base_url()?>subpage/edit_subpage",
          						data:{'id':id,'token':token_code},
          						success:function(returns){
          							$("#return_content").html(returns);
          						}
    			       })
        });
    $('#buttonDelete').click( function () {
        var dat =   $("#datatables").DataTable().row('.warning').data()[2];
        var id =   $("#datatables").DataTable().row('.warning').data()[0];
        swal({
			  title: "Hapus Data "+ dat +"?",
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
                  url:"<?php echo base_url()?>subpage/delete",
                  data:{'id':id,'token':token_code},
                  success:function(returns){
                    if(returns == 1){
                      swal({type: "success",  title: "Sukses Hapus",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                    }else{
                      swal({type: "warning",  title: "Gagal Hapus",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                    }
                    $('#datatables').DataTable().draw();
                  }
             })
    }
    );
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        md.initSliders()
        demo.initFormExtendedDatetimepickers();
    });
</script>
