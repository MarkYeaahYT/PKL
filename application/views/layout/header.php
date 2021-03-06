<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory </title>
    <script src=" <?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?> "></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

    <!-- Online -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    <!-- Online -->

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/dataTables.bootstrap4.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/jquery.dataTables.css'); ?>">

    <link rel="shortcut icon" href="<?php echo base_url('assets/icon/logo.ico'); ?>" type="image/x-icon">

    <script src="<?php echo base_url('assets/bootstrap/js/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/dataTables.bootstrap4.js'); ?>"></script>

</head>
<body>

    <div class="navbar navbar-expand-md bg-light sticky-top">
        <a href="/" class="navbar-brand">
            <img src="" alt="">Inventory App
        </a>
    
        <div class="navbar-nav nav ml-auto">
            <a class="power-btn" href="<?php echo base_url('/'); ?>">
                <img src="<?php echo base_url('assets/icon/power.png'); ?>" width="25" height="25" alt="" srcset="">
            </a>
        </div>
        <style>
            .power-btn:hover{
                transition: all 1s;
                rotate: 45deg;
            }
        </style>
        
    </div>
    