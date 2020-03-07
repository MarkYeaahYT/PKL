<div class="col-md-2 col-sm-4 border pb-4 pt-4" >
    <div class="col mb-3 text-center">
        <img src="" alt="" class="mylogo img-thumbnail mx-auto d-block">
        <!-- <p class="text-primary pt-2">Login As </p> -->
        <!-- <h5 class="text-primary">Admin</h5> -->
    </div>
    <div class="col mb-5 text-center">
        <img src="" alt="" class="myicon img-thumbnail mx-auto d-block">
        <p class="text-primary pt-2">Login As </p>
        <h5 class="text-primary"><?php echo $user; ?></h5>
    </div>
        <hr>
    <div class="container fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <img class="img-fluid" src=" <?php echo base_url('assets/icon/dashboard.png'); ?> " alt="logo">
            </div>
            <div class="col-sm-2">
                <a href="<?php echo base_url('welcome/dashboard'); ?>">Dashboard</a>
            </div>
        </div>
        <hr>
    </div>
    <div class="container fluid">
    <div class="row">
            <div class="col-md-3 col-sm-3">
                <img class="img-fluid" src=" <?php echo base_url('assets/icon/data.png'); ?> " alt="logo">
            </div>
            <div class="col-sm-2 col-md-5">
                <a href="<?php echo base_url('inventory/data'); ?>">Barang</a>
            </div>
        </div>
        <hr>
    </div>
    <div class="container fluid">
    <div class="row">
            <div class="col-md-3 col-sm-3">
                <img class="img-fluid" src="<?php echo base_url('assets/icon/ruang.png'); ?>" alt="logo">
            </div>
            <div class="col-sm-2">
                <a href="<?php echo  base_url('inventory/ruang'); ?>">Ruang</a>
            </div>
        </div>
        <hr>
    </div>
</div>
<script>
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "/alfabank/profile/dataprofile",
            data: "",
            dataType: "JSON",
            success: function (response) {
                $(".myicon").attr("src", "/alfabank/uploads/"+response[0].logo);
                
            }
        });

        $.ajax({
            type: "GET",
            url: "/alfabank/profile/dataprofile",
            data: {
                ishome: true
            },
            dataType: "JSON",
            success: function (response) {
                $(".mylogo").attr("src", "/alfabank/uploads/"+response[0].logo);
            }
        });
    });
</script>