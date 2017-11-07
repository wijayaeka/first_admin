 <div class="modal-header">
    <button type="button" class="close"  data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    <h5 class="modal-title" id="myModalLabel">Add New Subpage</h5><hr></hr>
</div>

<div class="modal-body" style="margin-top:-5%;">
 <div class="col-md-12">
 	
                            <div class="card">
                                <div class="card-content">
                                  <div class="col-md-12">
                                  	<form method="post" id="assignMenuForm" action="<?php echo base_url()."pagetree_menu/submit_assign";?>" >
                                  	<input type="hidden" name="menu_id" id="menu_id" value="<?php echo $id_menu;?>">
                                  	 <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <div class="card-content table-responsive table-full-width">
                                        <table id="datatables-addassign" class="table table-bordered table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                     <th>Category Acticle</th>
                                                    <th>Article Title</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
                                            		foreach($addArticleAssign as $a){
                                            			 echo "<tr>
						                                      <td>";if($this->library_function->get_check_exist_assign($id_menu,$a->id_article) > 0){
						                                          echo "<input type='checkbox' name='id[]' value='".$a->id_article."'  checked/>";
						                                      }else{
						                                          echo "<input type='checkbox' name='id[]' value='".$a->id_article."'  />";
						                                      } echo "</td>
						                                          <td>$a->article_category_name</td>
						                                          <td>$a->title</td>
						                                     	</tr>";
                                            		}
                                            	?>
                                            </tbody>
                                        </table>
                                    </div>
                                  
									 <input type="submit" id="AddAssign" class="btn btn-info btn-round" value="Submit" />
                      				</form>
                                 </div>
                            <!--  end card  -->
                        </div>

                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
                                </div>
                                            <div class="col-sm-row">
                                            <div class="modal-footer" style="padding:10px 10px;">
                                               
                                                <button type="button" class="btn btn-warning btn-round" data-dismiss="modal">Cancel!</button>
                                              </div>
                                              </div>
<script type="text/javascript">
</script>
<script type="text/javascript">
var menu_id = $("#menu_id").val();
$("#assignMenuForm").submit(function(e) {
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
                                  			render_assign_table();
                                          swal({type: "success",  title: "Sukses Simpan",   text: "sukses Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                          $('#noticeModal2').modal('toggle');
                                  }else{
                                          swal({type: "warning",  title: "Gagal Simpan",   text: "Gagal Tersimpan.",   timer: 1000,   showConfirmButton: false });
                                  }
                                }
                        })
                        return false;
              })
    $(document).ready(function() {
        md.initSliders()
        demo.initFormExtendedDatetimepickers();
    });
</script>