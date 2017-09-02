<footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="<?php echo base_url();?><?php echo base_url();?><?php echo base_url();?>www.creative-tim.com/index.html">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">

    </div>
</body>
<!--   Core JS Files   -->

<script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/tinymcpuk/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<!--<script src=" //code.jquery.com/jquery-1.12.4.js "></script> -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url();?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?php echo base_url();?>assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url();?>assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- Select Plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.datatables.js"></script>

<!-- <script src=" https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> -->
<!-- Sweet Alert 2 plugin
<script src="<?php echo base_url();?>assets/js/sweetalert2.js"></script> -->
<script src="<?php echo base_url();?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url();?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url();?>assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/no_reload.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url();?>assets/plugins/tinymce/jquery.tinymce.min.js" type="text/javascript"></script> -->

<script type="text/javascript">

// Include this file AFTER both jQuery and bootstrap are loaded.
   $.fn.modal.Constructor.prototype.enforceFocus = function() {
     modal_this = this
     $(document).on('focusin.modal', function (e) {
       if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
       && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select')
       && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_textarea')
       && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
         modal_this.$element.focus()
       }
     })
   };


    $(document).ready(function() {

      /* Tiny MCE */
      				tinyMCE.init({
      							mode : "exact",
      							elements: "isi_article,isi_article_eng,isi_hal_statis,isi_article_eng,ta3",
      							theme : "advanced",
      							plugins : "youtubeIframe,advcode,syntaxhl,pagebreak,style,layer,table,save,advhr,advimage,advlink,insertdatetime,preview,searchreplace,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave,print,media",
      							theme_advanced_buttons1 : "save,|,newdocument,|,bold,|,italic,|,underline,|,strikethrough,|,blockquote,|,justifyleft,|,justifycenter,|,justifyright,|,justifyfull,|,bullist,|,numlist,|,link,|,unlink,|,image,|,inserttime,|,media,|,ltr,|,rtl",
      							theme_advanced_buttons2 : "tablecontrols,|,charmap,|,hr,|,undo,|,redo,|,preview,|,sub,|,sup,|,pagebreak,|,nonbreaking,|,fullscreen",
      							theme_advanced_buttons3 : "forecolor,|,backcolor,fontselect,fontsizeselect,styleselect,|,search,|,replace,|,cut,|,copy,|,paste,|,youtubeIframe,|,advcode,|,syntaxhl",
      							theme_advanced_toolbar_location : "top",
      							theme_advanced_toolbar_align : "left",
      							theme_advanced_statusbar_location : "bottom",
      							file_browser_callback : 'openKCFinder',
      							theme_advanced_resizing : true
      						});
      		/* KC FINDER */
      		function openKCFinder(field_name, url, type, win) {
      			tinyMCE.activeEditor.windowManager.open({
      				file: '<?php echo base_url()?>assets/plugins/kcfinder/browse.php?opener=tinymce&type=' + type,
      				title: 'KCFinder',
      				width: 700,
      				height: 500,
      				resizable: "yes",
      				inline: true,
      				close_previous: "no",
      				popup_css: false
      			}, {
      				window: win,
      				input: field_name
      			});
      			return false;
      		}
         //$('.default-select2').select2()
        // Javascript method's body can be found in assets/js/demos.js
      //  demo.initDashboardPageCharts();

        //demo.initVectorMap();
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2017 15:30:58 GMT -->
</html>
