<!--<script>
var pageload = 	getCookie('pageload');
$("#pageload").html(pageload);
</script> -->
<style>
body.modal-open {
    overflow: scroll;
}
.modal {
    -webkit-overflow-scrolling: auto;
}
#noticeModal2_content{
	margin-top:120%;
}
	.modal-dialog {
    width: 50%;
    margin: 8% 20%;
}
th.dt-center, td.dt-center { text-align: center; }
th.dt-purple, td.dt-purple { text-align: center; font-weight:bold; color:#9C27B0;  }
th.dt-red, td.dt-red { text-align: center; font-weight:bold; color:#F44336;  }
</style>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                                <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-notice">
                                    <div class="modal-content">
                                      <div id="return_content">
                                      </div>
                                    </div>
                                  </div>
                                </div>
																<div class="modal fade" id="noticeModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-notice2">
                                    <div class="modal-content" id="noticeModal2_content">
                                      <div id="return_content_noticeModal2">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                      <div class="col-md-6">
                          <div class="card">
                              <div class="card-header card-header-icon" data-background-color="rose">
                                  <h4 class="card-title">C</h4>
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">Category</h4>
                                <div class="col-md-12">
                                  <div class="card-content table-responsive table-full-width">
                                      <table id="table_category" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                          <thead>
                                              <tr>
                                                  <th>ID</th>
                                                  <th>Category Name</th>
                                                  <th>Initial</th>
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
                                        <div id="return_modulecontent">
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="blue">
                                    <h4 class="card-title">M</h4>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Module</h4>
                                    <div class="col-md-12">
                                    <div class="toolbar" >
                                        <button id="buttonAddModulePrev" class="btn btn-info btn-round" disabled >
                                            <i class="material-icons">face</i> Add Privilege
                                        </button>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="card-content table-responsive table-full-width">
                                        <table id="table_modul" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Module Name</th>
                                                    <th>Order</th>
                                                    <th>Status Module</th>
                                                    <th>Category</th>
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
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <h4 class="card-title">P</h4>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Page</h4>
                            <div class="col-md-12">
                            <div class="toolbar" >
                                <button id="buttonAddPagePrev" class="btn btn-success btn-round" disabled >
                                    <i class="material-icons">face</i> Add Privilege
                                </button>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="card-content table-responsive table-full-width">
                                <table id="table_page" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Page Name</th>
                                            <th>Link</th>
                                            <th>Category Page</th>
                                            <th>Modul</th>
                                            <th>Order</th>
                                            <th>Status</th>
                                            <th>Icon</th>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="orange">
                    <h4 class="card-title">S</h4>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Subpage</h4>
                    <div class="col-md-12">
                    <div class="toolbar" >
                        <button id="buttonAddSubpagePrev" class="btn btn-warning btn-round "  disabled>
                            <i class="material-icons">face</i> Add Privilege
                        </button>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="card-content table-responsive table-full-width">
                        <table id="table_subpage" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
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
            <!--  end card  -->
        </div>

        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>
</div>
</div>
            </div>

<script type="text/javascript">
$( "#minimizeSidebar" ).trigger( "click" );
$('#table_category').DataTable({
      "processing": true,
       "serverSide": true,
       "scrollX": true,
       "displayLength": 5,
       "pagingType": "full_numbers",
      "ajax": "<?php echo base_url();?>privilege/listCategory",
      "columnDefs": [
       ],
      "language": {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
      }
});
$('#table_category tbody').on( 'click', 'tr', function () {
	        if ( $(this).hasClass('warning') ) {
	            $(this).removeClass('warning');
	        }
	        else {
	            $('#table_category').DataTable().$('tr.warning').removeClass('warning');
	            $(this).addClass('warning');
	            var x =  $('#table_category').DataTable().row('.warning').data()[0];
	            rendertable_modul(x);
              rendertable_page(x)
	        }
	});
/* ====================================================================== */
function rendertable_modul(id){
     if ( $.fn.DataTable.isDataTable('#table_modul') ) {
     $('#table_modul').DataTable().destroy();
   }
  $('#table_modul').DataTable({
                "processing": true,
                "serverSide": true,
                "scrollX": true,
                "displayLength": 5,
                "pagingType": "full_numbers",
                "ajax": "<?php echo base_url();?>privilege/listModul?token="+token_code+"&id="+id+"",
                "columnDefs": [
                  {"className": "dt-center", "targets": 2},
                  {"className": "dt-red", "targets": 3},
                  {"className": "dt-purple", "targets": 4}
                 ],
                "language": {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

    });
}
$('#table_modul tbody').on( 'click', 'tr', function(){
	        if ( $(this).hasClass('warning') ) {
	            $(this).removeClass('warning');
             $('#buttonAddModulePrev').attr('disabled');
	        }
	        else {
	            $('#table_modul').DataTable().$('tr.warning').removeClass('warning');
	            $(this).addClass('warning');
              var x =  $('#table_modul').DataTable().row('.warning').data()[0];
							$('#buttonAddModulePrev').removeAttr('disabled');
	            rendertable_page(x)
	        }
});
$('#buttonAddModulePrev').click( function(){
          $('#noticeModal').modal({backdrop: 'static',keyboard: false});
					var modul_id =  $('#table_modul').DataTable().row('.warning').data()[0];
          var modul_name =  $('#table_modul').DataTable().row('.warning').data()[1];
              $.ajax({
                    type:"POST",
                    url:"<?php echo base_url()?>privilege/list_prev_module",
                    data:{'modul_id':modul_id,'modul_name':modul_name,'token':token_code},
                    success:function(returns){
                      $("#return_content").html(returns);
                    }
               })
});
/* ====================================================================== */
function rendertable_page(id){
     if ( $.fn.DataTable.isDataTable('#table_page') ) {
     $('#table_page').DataTable().destroy();
   }
      $('#table_page').DataTable({
                               "processing": true,
                                "serverSide": true,
                                "scrollX": true,
                                "displayLength": 5,
                                "pagingType": "full_numbers",
                               "ajax": "<?php echo base_url();?>privilege/listPage?token="+token_code+"&id="+id+"",
                               "columnDefs": [

                                  {"className": "dt-purple", "targets": 3},
                                  {"className": "dt-red", "targets": 4},
                                  {"className": "dt-center", "targets": 5},
                                  {"className": "dt-red", "targets": 6},
                                ],
                               "language": {
                                   search: "_INPUT_",
                                   searchPlaceholder: "Search records",
                               }
      });
}

$('#table_page tbody').on( 'click', 'tr', function(){
	        if ( $(this).hasClass('warning') ) {
	            $(this).removeClass('warning');
             $('#buttonAddPagePrev').attr('disabled');
	        }
	        else {
	            $('#table_page').DataTable().$('tr.warning').removeClass('warning');
	            $(this).addClass('warning');
              var x =  $('#table_page').DataTable().row('.warning').data()[0];
							$('#buttonAddPagePrev').removeAttr('disabled');
	            rendertable_subpage(x)
	        }
});
$('#buttonAddPagePrev').click( function(){
          $('#noticeModal2').modal({backdrop: 'static',keyboard: false});
					var page_id =  $('#table_page').DataTable().row('.warning').data()[0];
          var page_name =  $('#table_page').DataTable().row('.warning').data()[1];
              $.ajax({
                    type:"POST",
                    url:"<?php echo base_url()?>privilege/list_prev_page",
                    data:{'page_id':page_id,'page_name':page_name,'token':token_code},
                    success:function(returns){
                      $("#return_content_noticeModal2").html(returns);
                    }
               })
});
/* ====================================================================== */

function rendertable_subpage(id){
     if ( $.fn.DataTable.isDataTable('#table_subpage') ) {
     $('#table_subpage').DataTable().destroy();
   }


              $('#table_subpage').DataTable({
                                  "processing": true,
                                   "serverSide": true,
                                   "scrollX": true,
                                   "displayLength": 5,
                                   "pagingType": "full_numbers",
                                      "ajax": "<?php echo base_url();?>privilege/listSubpage?token="+token_code+"&id="+id+"",
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
}


$('#table_subpage tbody').on( 'click', 'tr', function(){
	        if ( $(this).hasClass('warning') ) {
	            $(this).removeClass('warning');
             $('#buttonAddSubpagePrev').attr('disabled');
	        }
	        else {
	            $('#table_subpage').DataTable().$('tr.warning').removeClass('warning');
	            $(this).addClass('warning');
              var x =  $('#table_subpage').DataTable().row('.warning').data()[0];
							$('#buttonAddSubpagePrev').removeAttr('disabled');
	            //rendertable_subpage(x)
	        }
});
$('#buttonAddSubpagePrev').click( function(){
          $('#noticeModal2').modal({backdrop: 'static',keyboard: false});
					var subpage_id =  $('#table_subpage').DataTable().row('.warning').data()[0];
          var subpage_name =  $('#table_subpage').DataTable().row('.warning').data()[1];
              $.ajax({
                    type:"POST",
                    url:"<?php echo base_url()?>privilege/list_prev_subpage",
                    data:{'subpage_id':subpage_id,'subpage_name':subpage_name,'token':token_code},
                    success:function(returns){
                      $("#return_content_noticeModal2").html(returns);
                    }
               })
});
/* ====================================================================== */

    $('.card .material-datatables label').addClass('form-group');/*
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
      						url:"<?php echo base_url()?>modul/add_new",
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
          						url:"<?php echo base_url()?>modul/edit_modul",
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
        md.initSliders()
        demo.initFormExtendedDatetimepickers();
    });
</script>
