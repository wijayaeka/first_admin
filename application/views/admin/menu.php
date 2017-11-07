<div class="sidebar" data-active-color="blue" data-background-color="white" data-image="<?php echo base_url();?>assets/img/sidebar-1.jpg">
           <!--
       Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
       Tip 2: you can also add an image using data-image tag
       Tip 3: you can change the color of the sidebar with data-background-color="white | black"
   -->
           <div class="logo">
               <a href="<?php echo base_url();?><?php echo base_url();?>" class="simple-text">
                   Template GUE
               </a>
           </div>
           <div class="logo logo-mini">
               <a href="<?php echo base_url();?><?php echo base_url();?><?php echo base_url();?>www.creative-tim.com/index.html" class="simple-text">
                   Ct
               </a>
           </div>
           <div class="sidebar-wrapper">
               <div class="user">
                   <div class="photo">
                      <?php
                          if($this->session->userdata('img') != ''){
                            ?>
                                <img src="<?php echo base_url()?>assets/usr_img/<?php echo $this->session->userdata('img') ;?>" class="picture-src" id="wizardPicturePreview" title="">
                            <?php
                          }else{
                                ?>
                                    <img src="<?php echo base_url()?>assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="">
                                <?php
                          }
                      ?>

                   </div>
                   <div class="info">
                       <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                           <?php echo $this->session->userdata('nama_lengkap');?>
                           <b class="caret"></b>
                       </a>
                       <div class="collapse" id="collapseExample">
                           <ul class="nav">
                               <li>
                                   <a href="#">My Profile</a>
                               </li>
                               <li>
                                   <a href="#">Edit Profile</a>
                               </li>
                               <li>
                                   <a href="#">Settings</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
                <?php  //echo json_encode($this->session->userdata);
                echo"<ul class='nav '>";
                    $query = $this->db->query("select * from adm_page
                    LEFT join adm_kategori_page on adm_page.id_kategori_page = adm_kategori_page.id_kategori_page
                    LEFT join access_page on adm_page.id_page = access_page.id_page
                    where adm_page.status_page = 'Y'
                    and adm_kategori_page.inisial = 'admin-menu'
                    and access_page.active = 'Y'
          					and access_page.id_privilege_page = '".$this->session->userdata('userlevel')."'
          					group by adm_page.id_page
                              order by adm_page.urutan asc");
                    $no = 1;
                    foreach($query->result() as $x){
                       $sub = $this->db->query("SELECT * FROM adm_sub_page
                                     LEFT JOIN adm_page on adm_sub_page.id_page = adm_page.id_page
                                     LEFT JOIN access_subpage on access_subpage.id_subpage = adm_sub_page.id_subpage
                                     WHERE adm_sub_page.id_page =  '$x->id_page'
                                     and access_subpage.id_privilege_subpage = '".$this->session->userdata('userlevel')."'
                                     and access_subpage.active = 'Y'
                                     and adm_sub_page.status_subpage = 'Y' group by adm_sub_page.id_subpage order by adm_sub_page.urutan_subpage asc");
                       $jml = $sub->num_rows();
                       if($jml > 0){
                         echo '<li>
                             <a data-toggle="collapse" href="#"  data-target="#'.$no.'">
                                 <i class="material-icons">'.$x->icon.'</i>
                                 <p>'.$x->nama_page.'
                                     <b class="caret"></b>
                                 </p>
                             </a>';
                       }else{
                         echo '<li >
                             <a href="#page/'.$x->link.'" rel="tab">
                                 <i class="material-icons">'.$x->icon.'</i>
                                 <p>'.$x->nama_page.'</p>
                             </a>';
                       }
                       if($jml > 0) {
                         echo ' <div class="collapse" id="'.$no.'">
                              <ul class="nav">';
                              foreach($sub->result() as $w)
                                {

                                // echo ;
                                  echo "<li >
                                      <a  href='#page/$w->link_subpage' rel='tab' >
                                            <i class='material-icons'>$w->subpage_icon</i>
                                            <span class='text'>$w->nama_subpage</span>
                                      </a>
                                    </li>";
                                }
                                echo '</ul></div>';

                             }
                             echo "</li>";
                             $no++;
                    }
                    echo"</ul>";

                ?>
                <div class="user">

                               </div>
           </div>
       </div>
       <div class="main-panel" style=" 
	   background-image: url(<?php echo base_url()?>assets/img/login.jpg);
    background-position: center center;
    background-repeat:  no-repeat;
    background-attachment: fixed;
    background-size:  cover;
    background-color: #999;">
           <nav class="navbar navbar-transparent navbar-absolute" style="background-color:#fcfcfc;">
               <div class="container-fluid">
                   <div class="navbar-minimize">
                       <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                           <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                           <i class="material-icons visible-on-sidebar-mini">view_list</i>
                       </button>
                   </div>
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                   <div class="collapse navbar-collapse">
                      
                       <ul class="nav navbar-nav navbar-right">
                           <li>
                               <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">dashboard</i>
                                   <p class="hidden-lg hidden-md">Dashboard</p>
                               </a>
                           </li>
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">notifications</i>
                                   <span class="notification">5</span>
                                   <p class="hidden-lg hidden-md">
                                       Notifications
                                       <b class="caret"></b>
                                   </p>
                               </a>
                               <ul class="dropdown-menu">
                                   <li>
                                       <a href="#">Mike John responded to your email</a>
                                   </li>
                                   <li>
                                       <a href="#">You have 5 new tasks</a>
                                   </li>
                                   <li>
                                       <a href="#">You're now friend with Andrew</a>
                                   </li>
                                   <li>
                                       <a href="#">Another Notification</a>
                                   </li>
                                   <li>
                                       <a href="#">Another One</a>
                                   </li>
                               </ul>
                           </li>
                           <li>
                               <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">person</i>
                                   <p class="hidden-lg hidden-md">Profile</p>
                               </a>
                           </li>
                           <li class="separator hidden-lg hidden-md"></li>
                       </ul>
                   </div>
               </div>
           </nav>
