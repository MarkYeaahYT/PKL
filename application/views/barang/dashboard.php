<div class="col-md-10 pt-5 col-sm-8 border">
    <div class="row">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/back5.jpg'); ?>'); background-size: 100% 100%;color:white ;">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url('assets/icon/barang5.png') ?>" alt="" width="60" height="60">
                        <p class="card-text">Jumlah Barang</p>
                        <h3 class="card-text"><?php echo $jumlah_barang; ?> </h3>
                    </div>
                </div>
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/back3.jpg'); ?>'); background-size: 100% 100%;color: white; ">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url('assets/icon/centang5.png'); ?>" alt="" width="60" height="60">
                        <p class="card-text">Normal</p>
                        <h3 class="card-text"> <?php echo $jum_normal; ?> </h3>
                    </div>
                </div>
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/back4.jpg'); ?>'); background-size: 100% 100%; color: white;">
                <a href="<?php echo base_url('welcome/rusak'); ?>" style="text-decoration: none">
                    <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/icon/silang3.png'); ?>" alt="" width="60" height="60">
                            <p class="card-text text-danger">Rusak</p>
                            <h3 class="card-text text-danger"> <?php echo $jum_rusak; ?> </h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-4 col-sm-7">
            <div class="card-deck">
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/back5.jpg'); ?>'); background-size: 100% 100%;color:white ;">
                    <a href="<?php echo base_url('welcome/terjual'); ?>" style="text-decoration: none">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/icon/terjual.png') ?>" alt="" width="60" height="60">
                            <p class="card-text text-success">Terjual</p>
                            <h3 class="card-text text-success"> <?php echo $total_jual; ?> </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>