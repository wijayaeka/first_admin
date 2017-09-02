 <script>
$(document).ready(function() {
        $("#gambar").on('change', function() {
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
				<div class="bg-success clearfix padder m-b"> <h3 class="m-b">Add Artikel</h3></div>	
						<input type="hidden" name="key" id="key">
 						 <div class='box-body table-responsive' style="padding:20px 20px;">		
 						 		<form role='form' action='<?php base_url()?>artikel/save' method='post' enctype='multipart/form-data'>
							<input type='hidden' name='username' id='username' value='<?php echo $this->session->userdata('username'); ?>' />
							<input type='hidden' name='status'  value='Y' class='form-control'  >
                            <div class='box-body'>
							<div class='clearfix'></div>
							<div class='form-group'>
                                            <label for='nama_page'>Menu :</label>
                                           <select name='id_menu'  class='form-control'  >
												<option value='' selected > </option>";
												<?php
														$parent_page2= mysql_query("SELECT * FROM menu WHERE id_menu NOT IN(SELECT id_menu FROM article)");
														while( $p2 = mysql_fetch_array($parent_page2))
															{
																echo "<option value='$p2[id_menu]'> $p2[nama_menu]</option>";		
															}
													
												?>
												</select>
												</div>
										<div class='form-group'>
                                            <label for='kategori'>Kategori  :</label>
                                           		<select name='kategori'  class='form-control' required='true' >
                                           		<option value="" selected></option>
												<option value='content'  > Content</option>
												<option value='article'  >Article</option>
												<option value='info'  >Informasi</option>
												</select>
											</div>
								<div class='form-group'>
                                       <label for='judul'>Judul</label>
									    <input type='text' class='form-control' name='title'   id='title' required='true'>
                                </div>
								<div class='form-group'>
                                            <label for='headline'>Headline</label><br>
														Aktif:<input type='radio' name='headline' value='Y' >  
														&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp 
														Non aktif: <input type='radio' name='headline' value='N' checked>
													
								</div>
						<div class='form-group'>
                                       <label for='tanggal'>Tanggal</label>
									   <input type='text' class='form-control' id='datepicker2'  name='tanggal'  required='true' style='width:100px;'>
                                </div>
						<div class='form-group'>
                                       <label for='isi_article'>Isi Artikel</label>
										<textarea name='isi_article' class='form-control' id='isi_article'  style='width:100%; height:400px;'></textarea>
						</div>
						<div class='form-group'>
                                       <label for='gambar'>Gambar</label><br><br>
										<small>* kosongkan bila gambar tidak diganti</small><br>
									<input type='file' id='gambar'  name='gambar'>
									<div id="image_holder_gambar"></div>
						</div>
						
						
						 <div class='box-footer'>
                                        <button type='submit' class='btn btn-primary'>Simpan</button>
										<input type='button' value= 'Cancel'  class='btn btn-primary' onclick='history.back()'>
                        </div>
                        </form>				 
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