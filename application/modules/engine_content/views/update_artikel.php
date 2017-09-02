 <script>
$(document).ready(function() {
        $("#gambar").on('change', function() {
        	$("#img_existing").hide();
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image_holder_gambar");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image",
                    "style": "height:200px;width:220px;"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
      </script>
      
  <section id="content">
         <section class="main padder">
            <div class="row">
				<div class="col-sm-12">
				<section class="panel">
					<?php
						foreach($get_artikel_toupdate as $r){
							function get_nama_menu($id_menu){
														$query = mysql_fetch_array(mysql_query("select nama_menu from menu where id_menu = '$id_menu'"));
														return $query['nama_menu'];
													}
						
					?>
				<div class="bg-warning clearfix padder m-b"> <h3 class="m-b">Update Artikel</h3></div>	
						<input type="hidden" name="key" id="key">
 						 <div class='box-body table-responsive' style="padding:20px 20px;">		
 						 		<form role='form' action='<?php echo  base_url();?>artikel/save_update' method='post' enctype='multipart/form-data'>
							<input type='hidden' name='username' id='username' value='<?php echo $this->session->userdata('username'); ?>' />
							<input type='hidden' name='id_article' id='id_article' value='<?php echo $this->uri->segment(3); ?>' />
                            <div class='box-body'>
							<div class='clearfix'></div>
							<div class='form-group'>
                                            <label for='nama_page'>Menu :</label>
                                           <select name='id_menu'  class='form-control'  >
												<option value='<?php echo $r['id_menu']?>' selected > <?php echo get_nama_menu($r['id_menu']); ?></option>";
													
												<?php
													
														$parent_page2= mysql_query("SELECT * FROM menu WHERE id_menu NOT IN(SELECT id_menu FROM article) ");
														while( $p2 = mysql_fetch_array($parent_page2))
															{
																echo "<option value='$p2[id_menu]'> $p2[nama_menu]</option>";		
															}
													
												?>
												</select>
												</div>
										<div class='form-group'>
                                            <label for='nama_page'>Kategori  :</label>
                                           		<select name='kategori'  class='form-control' required='true' >
                                           		<option value="<?php echo $r['kategori']?>" selected><?php echo $r['kategori']?></option>
												<option value='content'  >Content</option>
												<option value='article'  >Article</option>
												<option value='info'  >Informasi</option>
												</select>
											</div>
								<div class='form-group'>
                                       <label for='judul'>Judul</label>
									    <input type='text' class='form-control' name='title'  value="<?php echo "$r[title]";?>"  id='title' required='true'>
                                </div>
								<div class='form-group'>
                                            <label for='headline'>Headline</label><br>
														<?php
														if ( $r['headline'] == 'Y'){
															echo "Aktif: <input type='radio' name='headline' value='Y' checked> 
																	&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp 
																Non aktif: <input type='radio' name='headline' value='N'>";
															}
														else if( $r['headline'] == 'N') {
																echo "Aktif:<input type='radio' name='headline' value='Y' > 
																	&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp 
																	Non aktif: <input type='radio' name='headline' value='N' checked>";
															}
														else if( $r['headline'] == '') {
																echo "Aktif:<input type='radio' name='headline' value='Y' >  
																	&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp 
																	Non aktif: <input type='radio' name='headline' value='N' checked>";
															}
														?>
													
								</div>
						<div class='form-group'>
                                       <label for='tanggal'>Tanggal</label>
									   <input type='text' class='form-control'  value="<?php echo "$r[tanggal]";?>"  id='datepicker2'  name='tanggal'  required='true' style='width:100px;'>
                                </div>
						<div class='form-group'>
                                       <label for='isi_article'>Isi Artikel</label>
										<textarea name='isi_article' class='form-control' id='isi_article'  style='width:100%; height:400px;'><?php echo $r['isi_article']; ?></textarea>
						</div>
						<div class='form-group'>
                                       <label for='gambar'>Gambar</label><br><br>
										<small>* Lewati bila gambar tidak diganti</small><br>
										
										<?php
										if(!empty($r['gambar'])){
												echo "<img src='".base_url()."image_property/article/$r[gambar]' class='img-responsive' style='width:300px; height:300px;' id='img_existing'>";
										}
										?>
										<div id="image_holder_gambar"></div>
										<input type='file' id='gambar'  name='gambar'>
									
						</div>
						
						
						 <div class='box-footer'>
                                        <button type='submit' class='btn btn-primary'>Simpan</button>
										<input type='button' value= 'Cancel'  class='btn btn-primary' onclick='history.back()'>
                        </div>
                        </form>				 
			             </div>
					</section>
			 </div>
			 <?php } ?>
			 <!-- /.box-body -->
			 <div class='modal fade' id='modal-container-add' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
				<div class='modal-dialog'>
				<div class='modal-content'>
				 <div id="balikan"></div>
				</div>
			</div>
				</div>
      </section>