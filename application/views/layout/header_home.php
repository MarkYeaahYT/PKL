<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src=" <?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?> "></script>
    <script src=" <?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?> "></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/icon/logo.ico'); ?>" type="image/x-icon">
</head>
<body style="background-image: url(<?php echo base_url('assets/icon/blue.jpg'); ?>);background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="navbar navbar-expand-md bg-light sticky-top myheader">
        <a href="/"><img class="alficon" width="150" height="60" src="" alt="" srcset=""></a>
        <div class="col-md-9">
            <h1 class="pt-2 m-auto title"></h1>
            <h5 class="alamat"></h5>
            <h5 class="tlp"></h5>
        </div>
        <div class="col-md-2">
            <h6 >User: <?php echo $user; ?> !</h6>
            <?php if($_SESSION['role'] == "1"): ?>
                <a class="pr-2" id="profile" title="Profile Admin" href="/alfabank/profile/"><img src="<?php echo base_url('assets/icon/profile.png'); ?>" width="25" height="25" alt="" srcset=""></a>
            <?php endif; ?>
            <a id="shutdown" title="Logout App" href="javascript:void(0)"><img class="power" src="<?php echo base_url('assets/icon/power.png'); ?>" width="25" height="25" alt="" srcset=""></a>
        </div>
    </div>

    <div class="pb-5"></div>
    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        .myheader{
            font-family: 'Poppins', 'sans-serif'
        }
    </style>
    <script>
    $(document).ready(function () {
        $("#shutdown").click(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "/alfabank/anggaran/shutdown",
                data: "",
                dataType: "JSON",
                success: function (response) {
                    window.location.href = "/alfabank"
                }
            });
            
        });
    });
    </script>
