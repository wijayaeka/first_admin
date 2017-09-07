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


</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2017 15:30:58 GMT -->
</html>
