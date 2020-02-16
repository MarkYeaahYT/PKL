<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('anggaran/layout/head'); ?>

<div class="wrapper">

    <?php $this->load->view('anggaran/layout/navbaruser'); ?>
    <div id="content">
        <?php $this->load->view('anggaran/layout/header'); ?>
        <?php $this->load->view('anggaran/user/home'); ?>
    </div>
    <div class="overlay"></div>
</div>

<style>
    @import url(<?php echo  base_url('assets/css/stylesidebar.css'); ?>);
</style>
<!-- Popper.JS -->
<script src="<?php echo base_url('assets/bootstrap/js/popper.min.js'); ?>"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="<?php echo base_url('assets/bootstrap/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>