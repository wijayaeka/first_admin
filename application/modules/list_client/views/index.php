<!--<script>
var pageload = 	getCookie('pageload');
$("#pageload").html(pageload);
</script> -->
<style>
.selected td {
    background-color: black !important; /* Add !important to make sure override datables base styles */
 }

	.modal-dialog {
    width: 98%;
    margin-left: 1%;
}
.center { text-align: center; }
th.dt-center, td.dt-center { text-align: center; }
th.dt-purple, td.dt-purple { text-align: center; font-weight:bold; color:#9C27B0;  }
th.dt-red, td.dt-red { text-align: center; font-weight:bold; color 	:#F44336;  }
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
                                    <h4 class="card-title">Clients</h4>
                                    <div class="col-md-12">
                                    <div class="btn-group" >                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        <button id="buttonAdd" class="btn btn-primary btn-round" >
                                            <i class="material-icons">add</i><span class="hidden-xs"> Add New </span>
                                        </button>
                                        <button id="buttonEdit" class="btn btn-warning btn-round disabled">
                                            <i class="material-icons">edit</i> <span class="hidden-xs">Edit</span>
                                        </button>
                                        <button id="buttonDelete" class="btn btn-danger btn-round disabled">
                                            <i class="material-icons">delete</i> <span class="hidden-xs">Delete</span>
                                        </button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                  			<div class="col-sm-6"></div><div id="prev_profile" class="col-sm-6">
						                           
                                  			</div>
                                    <div class="card-content table-responsive table-full-width">
                                        <table id="datatables" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Client</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-notice">
                                        <div class="modal-content">
                                          <div id="return_content">
                                          </div>
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
                "ajax": "<?php echo base_url();?>list_client/listClient",
                "columnDefs": [
                 {
                	"targets": [ 4 ],
                	"visible": false
            	},
                {
				            "targets": -1,
				            "className": "center",
				            "data": null,
				            "defaultContent": "<button  class='btn btn-info btn-round btn-fab btn-fab-mini'><div class='stats'><i class='material-icons'>search</i></div></button>"
				       },
				        
                 ],
                "language": {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

    });
     $('#datatables tbody').on( 'click', 'button', function () {
	        var data = $('#datatables').DataTable().row( $(this).parents('tr') ).data();
	       	var id = (data[0]);
	       	$.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>list_client/detail",
      						data:{'id':id,'token':token_code},
      						success:function(returns){
      							$('#pageContent').html(returns);
      							 
      						}
			       })
	    });
    $('.card .material-datatables label').addClass('form-group');
    function get_prev(id){
    	 $.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>list_client/get_prev",
      						data:{'id':id,'token':token_code},
      						success:function(returns){
      							$("#prev_profile").html(returns);
      						}
		});
    }
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
             var id =   $("#datatables").DataTable().row('.warning').data()[0];
            get_prev(id)
        }
    });

    /* ADD */
    $('#buttonAdd').click( function () {
        $('#noticeModal').modal({backdrop: 'static',keyboard: false});
            $.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>list_client/add_new",
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
          						url:"<?php echo base_url()?>list_client/edit_client",
          						data:{'id':id,'token':token_code},
          						success:function(returns){
          							$("#return_content").html(returns);
          						}
    			       })
        });
    $('#buttonDelete').click( function () {
        var dat =   $("#datatables").DataTable().row('.warning').data()[1];
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
                  url:"<?php echo base_url()?>list_client/delete",
                  data:{'id':id,'token':token_code},
                  success:function(returns){
                    
                      swal({type: "success",  title: "Sukses Hapus",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                    
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
