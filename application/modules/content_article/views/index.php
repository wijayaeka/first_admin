<!--<script>
var pageload = 	getCookie('pageload');
$("#pageload").html(pageload);
</script> -->
<style>
.selected td {
    background-color: black !important; /* Add !important to make sure override datables base styles */
 }

	.modal-dialog {
    width: 99%;
    margin: 0% 1%;
}
</style>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">description</i>
                                </div>

                                    <h4 class="card-title">Article</h4>
                                    <div class="col-md-12"><?php //echo json_encode($this->session->all_userdata());?>
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
                                      <div class="card-content table-responsive table-full-width">
                                          <table id="datatables" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                              <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Content</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Headline</th>
                                                    <th>Running News</th>
                                                    <th>Comment</th>
                                                    <th>User</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="modal fade " id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<style>
.my_class{
        text-align:center;
    }
 .red{
        text-align:center;
        font-weight:bold;
        color:red;
    }
  .blue{
        text-align:center;
        font-weight:bold;
        color:blue;
    }
.center{
	text-align:center;
}
</style>
<script type="text/javascript">
	function switch_status(stat){
		if(stat == "on"){
			return ' <div class="togglebutton"><label><input type="checkbox"  checked title="On"><span class="toggle"></span></label></div>';
		}else{
			return ' <div class="togglebutton"><label><input type="checkbox"  ><span class="toggle"></span></label></div>';
		}
	}
    $('#datatables').DataTable({
                "processing": true,
                 "serverSide": true,
                 "scrollX": true,
                 "displayLength": 5,
                 "pagingType": "full_numbers",
                "ajax": "<?php echo base_url();?>content_article/listArticle",
                "language": {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                },
                 "columnDefs": [
                 		 {className: "my_class", "targets": [5,6,7] },
                 		 {className: "red", "targets": [1] },
                 		 {className: "blue", "targets": [2] },
                 		 {
			        		"render": function ( data, type, row ) {
			                    return switch_status(row[5]);
			                },
			                "targets": 5
			        	},
                 		{
			        		"render": function ( data, type, row ) {
			                    return switch_status(row[6]);
			                },
			                "targets": 6
			        	},
			        	{
			        		"render": function ( data, type, row ) {
			                    return switch_status(row[7]);
			                },
			                "targets": 7
			        	},
			        	{
			        		"render": function ( data, type, row ) {
			                    return switch_status(row[8]);
			                },
			                "targets": 8
			        	}
			        	
                 ]

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
        //$( "#minimizeSidebar" ).trigger( "click" );
        $('#noticeModal').modal({backdrop: 'static',keyboard: false});
            $.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>content_article/add_new",
      						data:token,
      						success:function(returns){
      							$("#return_content").html(returns);
      						}
			       })
    });

        /* ADD */
        $('#buttonEdit').click( function () {
            var id =   $("#datatables").DataTable().row('.warning').data()[0];
            $('#noticeModal').modal({backdrop: 'static',keyboard: false});
                $.ajax({
          						type:"POST",
          						url:"<?php echo base_url()?>content_article/edit_article",
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
                  url:"<?php echo base_url()?>content_article/delete",
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
