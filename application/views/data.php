<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layout/header'); ?>

<div class="row padding">
    <?php $this->load->view('layout/sidebar'); ?>
    <?php $this->load->view('barang/show'); ?> 
</div>

<?php $this->load->view('layout/footer'); ?>
