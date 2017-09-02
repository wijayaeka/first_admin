
<?php if($this->session->userdata('user_id') != ""){?>
<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/menu'); ?>
<div id="pageContent" style="padding-top:12%;">
</div>
<?php $this->load->view('admin/footer'); ?>
<?php }else{
redirect('login');
} ?>
