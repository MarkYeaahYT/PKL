<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('alumni/layout/head'); ?>

<div class="wrapper">

    <?php $this->load->view('alumni/layout/navbar_alumni'); ?>
    <div id="content">
        <?php $this->load->view('alumni/layout/header_alumni'); ?>
        <?php $this->load->view('alumni/dashboard'); ?>
    </div>
    <div class="overlay"></div>
</div>

<style>
    @import url(<?php echo  base_url('assets/css/stylesidebar.css'); ?>);
</style>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="<?php //echo base_url('assets/bootstrap/js/jquery-3.3.1.slim.min.js'); ?>"></script>
<!-- Popper.JS -->
<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js'); ?>"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="<?php echo base_url('assets/bootstrap/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>