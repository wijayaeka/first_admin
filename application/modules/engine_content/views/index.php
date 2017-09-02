 
  <section id="content">
         <section class="main padder">
            <div class="row">
				<div class="col-sm-12">
				<section class="panel">
				<div class="bg-primary clearfix padder m-b"> <h3 class="m-b">Artikel</h3></div>									
						 <div class='box-header' style="text-align:right;" >
							<a href='<?php echo base_url();?>artikel/add'  class="btn btn-info btn-circle btn-sm active"><i class="fa fa-check"></i>Add New<b class="badge bg-info"><i class="fa fa-plus"></i></b></a> 
							<a href='#' onclick='get_data_article();' id="update" class="btn btn-warning btn-circle btn-sm disabled"><i class="fa fa-lightbulb-o"></i>Change<b class="badge bg-warning"><i class="fa fa-edit"></i></b></a> 
							<a href='#' onclick='delete_article();' id="delete" class="btn btn-danger btn-circle btn-sm disabled"><i class="fa fa-trash-o"></i>Delete</a> 
						
							</div>
						<input type="hidden" name="key" id="key">
 						 <div class='box-body table-responsive' style="padding:20px 20px;">						 
			                <table id='example_clickable1'   class="table table-bordered display" >
                                        <thead>
                                            <tr>
                                                <th width="8%">No</th>
                                                <th>Title</th>
                                                <th>URL</th>
                                                  <th>Aktif</th>
                                            </tr>
                                        </thead>
                                        <tbody><?php 
                                        $no = 1;
                                     if(!empty($artikel)){
                                        foreach($artikel as $x){
                                        	   $id =  $this->encryption->safe_b64encode($x['id_article']);
													echo "<tr onclick='set_data_article(\"$id\");'>
																<td>$no</td>
																<td>$x[title]</td>
																<td>$x[url_article]</td>
																<td style='text-align:center;'>";
																	   if ($x['status'] == 'Y' )
																		{
																				echo"
																					<div class='slider-frame'>
																						<a href=".base_url()."artikel/unpublish/".$this->encryption->safe_b64encode($x['id_article'])."><span class='label label-success'>ON</span></a>
																					</div>
																				";
																		
																		}
																		
																		if ( $x['status'] == 'N' )
																		{
																				echo"
																					<div class='slider-frame'>
																						<a href=".base_url()."artikel/publish/".$this->encryption->safe_b64encode($x['id_article'])."><span class='label label-danger'>OFF</span></a>
																					</div>
																				";
																		}
															echo "</td>
														</tr>";
														$no ++;
                                        }
                                        }
                                   echo"</tbody>
                                    </table>"; ?>
                                </div>
					</section>
			 </div>
			 <!-- /.box-body -->
			 <div class='modal fade' id='modal-container-add' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
				<div class='modal-dialog'>
				<div class='modal-content'>
				 <div id="balikan"></div>
				</div>
			</div>
				</div>
      </section>
	   <script>
   function get_data_level_add(){
   		var id = 1;
		$.ajax({
					type:"POST",
					url:"<?php echo base_url()?>level/get_data_level_add",
					data:{id:id},
					success:function(balikan){
						$("#balikan").html(balikan);
					}
		})
	}
     function get_data_article(){
			var id = $("#key").val();
			location.replace("<?php echo base_url();?>artikel/update/"+id+"");
	}
	 function set_data_article(id){
			$("#key").val(id);
			$("#update").removeClass("disabled");
			$("#delete").removeClass("disabled");
	}
	
	function delete_article(){
		var id = $("#key").val();
		swal({   title: "Hapus Artikel ini?",   
				 text: "Aksi ini akan tercatat oleh sistem",   
				 type: "warning",   
				 showCancelButton: true,   
				 confirmButtonColor: "#DD6B55",   
				 confirmButtonText: "OK",   
				 cancelButtonText: "Cancel",   
				 closeOnConfirm: false,   
				 closeOnCancel: false 
		}, 
		function(isConfirm){   
			if (isConfirm) {   
		    $.ajax({
							type:"POST",
							url:"<?php echo base_url()?>artikel/delete_artikel",
							data:{id:id},
							success:function(){
								swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
								setTimeout(function(){   document.location.reload();  }, 1000);
							}
				})
			}else {    
						 swal("Cancelled");   
					}
			 });
	}
	
	</script>