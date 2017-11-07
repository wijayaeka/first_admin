 <style>
 </style>
 <div class="col-md-12">
 	
                      <div class="modal fade" id="noticeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-notice">
                                        <div class="modal-content">
                                          <div id="return_content2">
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            <div class="card">
                                <div class="card-content">
                                   
                                    <div class="col-md-12">
                                    <div class="toolbar" >
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        <button id="buttonAdd" class="btn btn-primary btn-round" >
                                            <i class="material-icons">add</i> Add Article
                                        </button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card-content table-responsive table-full-width">
                                        <table id="datatables-assign" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                     <th>ID</th>
                                                    <th>Article Title</th>
                                                    <th>Category Acticle</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                               
                            <!--  end card  -->
                        </div>

                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
                 
<script type="text/javascript">
var id_menu = "<?php echo $id_menu; ?>";

function render_assign_table(){
	var id_menu = "<?php echo $id_menu; ?>";
	if ( $.fn.DataTable.isDataTable('#datatables-assign') ) {
		  $('#datatables-assign').DataTable().destroy();
		}
		
		$('#datatables-assign tbody').empty();
	$('#datatables-assign').DataTable({
                "processing": true,
                 "serverSide": true,
                 "scrollX": true,
                 "displayLength": 5,
                 "pagingType": "full_numbers",
                "ajax": "<?php echo base_url();?>pagetree_menu/listArticleAssign/?id_menu="+id_menu+"",
                 "columnDefs": [
				    { "visible": false, "targets": 1 }
				  ],
                "language": {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

             });
}
	
    
    $('.card .material-datatables label').addClass('form-group');
    $('#datatables-assign tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('warning') ) {
            $(this).removeClass('warning');
            $('#buttonEdit').addClass('disabled');
            $('#buttonDelete').addClass('disabled');
        }
        else {
            $('#datatables-assign').DataTable().$('tr.warning').removeClass('warning');
            $('#buttonEdit').removeClass('disabled');
            $('#buttonDelete').removeClass('disabled');
            $(this).addClass('warning');
        }
    });

    /* ADD */
    $('#buttonAdd').click( function () {
    	var id_menu = "<?php echo $id_menu; ?>";
        $('#noticeModal2').modal({backdrop: 'static',keyboard: false});
            $.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>pagetree_menu/add_article_to_assign/?id_menu="+id_menu+"",
      						data:token,
      						success:function(returns){
      							$("#return_content2").html(returns);
      						}
			       })
    });

      
    $('#buttonDelete').click( function () {
        var dat =   $("#datatables-assign").DataTable().row('.warning').data()[1];
        var id =   $("#datatables-assign").DataTable().row('.warning').data()[0];
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
                  url:"<?php echo base_url()?>modul/delete",
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
      render_assign_table();
    });
</script>