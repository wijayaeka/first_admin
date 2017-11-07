<script>
	/* ADD */
    $('#buttonAdd').click( function () {
        $('#addNewModal').modal({backdrop: 'static',keyboard: false});
            $.ajax({
      						type:"POST",
      						url:"<?php echo base_url()?>list_client/add_new_tenant",
      						data:token,
      						success:function(returns){
      							$("#return_content").html(returns);
      						}
			       })
    });
</script>
<style>
.selected td {
    background-color: black !important; /* Add !important to make sure override datables base styles */
 }

	.modal-dialog {
    width: 70%;
    margin-left: 10%;
}
</style>
<div class="content">
                <div class="container-fluid">
<div class="row">
	 <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-notice">
                                        <div class="modal-content">
                                          <div id="return_content">
                                          </div>
                                        </div>
                                      </div>
                                </div>
                   <div class="col-md-12">
                   	
                   	<div class="btn-group pull-right" >                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        <button id="buttonAdd" class="btn btn-info btn-round" >
                                            <i class="material-icons">add</i><span class="hidden-xs"> Add New </span>
                                        </button>
                                    </div>
                            <div class="card card-chart">
                            	
                                <div class="card-header" data-background-color="primary" data-header-animation="true" style="width:40%;    background-color: #e91e63;
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0)">
                                    <div class="ct-chart" id="dailySalesChart">
                                    	<?php
                                	foreach($detil_client as $p){
											echo '<div class="card-content">
												  	   <img src="'.base_url().'assets/article_content/'.$p->logo_client.'"  class="picture-src" style="max-width:200px; max-height:100px;" id="wizardPicturePreview" title="">
												           <h3 class="card-title">'.$p->client_name.'</h3>
												              <p class="category">'.$p->description.'</p>
												    </div>
												     <div class="card-footer">
												         <div class="stats">
												            <i class="material-icons">local_offer</i>'.$p->alamat.'
												         </div>
												     </div>';
										}
                                	?>
                                    </div>
                                </div>
                                <div class="card-content">
                                	<div class="col-md-12">
                            <div class="nav-center">
                                <ul class="nav nav-pills nav-pills-info nav-pills-icons" role="tablist">
                                    <!--
                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                    -->
                                    <li class="active">
                                        <a href="#description-1" role="tab" data-toggle="tab">
                                           <i class="material-icons">vpn_key</i> Accounts
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#schedule-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">important_devices</i>Landing Page
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tasks-1" role="tab" data-toggle="tab">
                                            <i class="material-icons">business</i>Tenant
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tasks-2" role="tab" data-toggle="tab">
                                            <i class="material-icons">help_outline</i> Help Center
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description-1">
                                    <div class="card">
                                        <div class="">
                                         <form class="form-horizontal" id="form_process" method="post" action="<?php echo base_url();?>list_client/save_new" enctype="multipart/form-data">
											<input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">stars</i>
                                                        </span><br>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Package
                                                                <small>(required)</small>
                                                            </label>
                                                             <select required="true" class="form-control default-select2" name="parent_page" id="parent_page" style="width:100%;">
                                                            <option value="" selected> Choose </option> 
                                                            <option value="business"  >Business</option>
                                                            <option value="premium"  >Premium</option>
                                                            <option value="standard"  >Standard</option>
                                                         
                                                         </select>
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Address
                                                                <small>(required)</small>
                                                            </label>
                                                           <textarea class="form-control" name="address"></textarea>
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">loyalty</i>
                                                        </span>
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Desctiption
                                                                <small>(required)</small>
                                                            </label>
                                                           <textarea class="form-control" name="description"></textarea>
                                                        <span class="material-input"></span></div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">record_voice_over</i>
                                                        </span>
                                                        <div class="form-group is-empty">
                                                            <label class="control-label">No Telp
                                                            </label><br>
                                                             <input name="no_telp" required="true" type="text" class="form-control" >
                                                        <span class="material-input"></span></div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
												<div class="col-sm-6">
													<br></br>
                                              			<h4 class="card-title">Social Media Account</h4>
                                              			<hr></hr>
                                                      	<div class="input-group">
		                                                    <span class="input-group-addon">
		                                                       <i class="fa fa-google"> </i>
		                                                    </span>
		                                                    <div class="form-group is-empty">
		                                                       <br>
		                                                       <label class="control-label">&nbsp; &nbsp; Use System Default
		                                                        </label>
		                                                    	<div class="togglebutton">
		                                                        <label>
		                                                            <input type="checkbox" checked name="google_default"  data-toggle="collapse" data-target="#demo" id="google_default"><span class="toggle"></span>
		                                                        </label></div>
		                                                        
		                                                         <div id="demo" class="collapse">
		                                                         	<div class="col-sm-12">
		                                                         	<label class="control-label"> Use Custom
		                                                        </label></div>
		                                                        <div class="col-sm-6">
		                                                        <label class="control-label">Google App ID
	                                                                <small>(required)</small>
	                                                            </label>
		                                                           <input name="google_appid" id="google_appid" required="true" type="text" class="form-control" >
		                                                        </div>
		                                                        <div class="col-sm-6">
		                                                         <label class="control-label">Google App Key
	                                                                <small>(required)</small>
	                                                            </label>
		                                                           <input name="google_key" id="google_key" required="true" type="text" class="form-control">
		                                                          </div>
		                                                          </div>
		                                                   
		                                                   </div>
		                                               </div>
		                                               
													
                                              			</div>
                                                </div>
                                            <div class="col-sm-row">
                                            <div class="modal-footer" style="padding:10px 10px;">
                                                <button type="submit" class="btn btn-success btn-round"><i class="fa fa-save"></i> &nbsp; Save</button>
                                                <button type="button" class="btn btn-warning btn-round" data-dismiss="modal">Cancel!</button>
                                              </div>
                                              </div>
                                              </form>
                                        </div>
                                    
                                </div>
                                <div class="tab-pane " id="schedule-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Location of the product</h4>
                                            <p class="category">
                                                More information here
                                            </p>
                                        </div>
                                        <div class="card-content">
                                            Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                            <br>
                                            <br> Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tasks-1">
                                    <div class="">
                                        <div class="">
                                        		<form class="col-sm-3" role="search">
			                            <div class="form-group form-search is-empty">
			                                <input type="text" class="form-control" placeholder="Search">
			                                <span class="material-input"></span>
			                            </div>
			                        </form>
			                        
                                	<div class="header " style="margin-left:45%;">
				                        <h3 class="title">Tenant</h3>
				                    </div>
                                 	<ul class="timeline">
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                                <i class="material-icons">card_travel</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-danger">Some Title</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                                                </div>
                                                <h6>
                                                    <i class="ti-time"></i> 11 hours ago via Twitter
                                                </h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                                <i class="material-icons">extension</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-success">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge info">
                                                <i class="material-icons">fingerprint</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-info">Another Title</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                                                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                                                    <hr>
                                                    <div class="dropdown pull-left">
                                                        <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <i class="material-icons">build</i>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li>
                                                                <a href="#action">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#action">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#here">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#link">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                                <i class="material-icons">flight_land</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-warning">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                                                </div>
                                            </div>
                                        </li>
                                  </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tasks-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Help center</h4>
                                            <p class="category">
                                                More information here
                                            </p>
                                        </div>
                                        <div class="card-content">
                                            From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
                                            <br>
                                            <br> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                	<!--<form class="col-sm-3" role="search">
			                            <div class="form-group form-search is-empty">
			                                <input type="text" class="form-control" placeholder="Search">
			                                <span class="material-input"></span>
			                            </div>
			                        </form>
			                        
                                	<div class="header " style="margin-left:45%;">
				                        <h3 class="title">Tenant</h3>
				                    </div>
                                 	<ul class="timeline">
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge danger">
                                                <i class="material-icons">card_travel</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-danger">Some Title</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                                                </div>
                                                <h6>
                                                    <i class="ti-time"></i> 11 hours ago via Twitter
                                                </h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                                <i class="material-icons">extension</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-success">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge info">
                                                <i class="material-icons">fingerprint</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-info">Another Title</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                                                    <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                                                    <hr>
                                                    <div class="dropdown pull-left">
                                                        <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <i class="material-icons">build</i>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li>
                                                                <a href="#action">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#action">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="#here">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="#link">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                                <i class="material-icons">flight_land</i>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <span class="label label-warning">Another One</span>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team</p>
                                                </div>
                                            </div>
                                        </li>
                                  </ul> -->
                                  
                                 </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>