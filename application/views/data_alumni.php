<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layout/header_alumni'); ?>

<div class="row padding">

    <?php $this->load->view('layout/sidebar_alumni'); ?>
    <?php $this->load->view('alumni/show'); ?>
</div>

<?php $this->load->view('layout/footer'); ?>