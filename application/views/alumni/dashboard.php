<div class=" border">
        <div class="pl-4 row bg-light">
            <h3 class="p-3 display-7">Dashboard</h3>
        </div>
        <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/alumni/1.jpg'); ?>'); background-size: 100% 100%;color:white ;">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url('assets/icon/alumni/people.png') ?>" alt="Some Image" width="60" height="60">
                        <p class="card-text text-light">Jumlah Siswa</p>
                        <h3 id="jum_siswa" class="card-text"> <!-- XHR --> </h3>
                    </div>
                </div>
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/alumni/12.jpg'); ?>'); background-size: 100% 100%;color: white; ">
                    <div class="card-body text-center">
                        <img src="<?php echo base_url('assets/icon/alumni/uess.png'); ?>" alt="Some Image" width="60" height="60">
                        <p class="card-text text-light">Sudah Bekerja</p>
                        <h3 id="" class="card-text"> <!-- XHR --> </h3>
                    </div>
                </div>
                <div class="card" style="background-image: url('<?php echo base_url('assets/icon/alumni/13.jpg'); ?>'); background-size: 100% 100%; color: white;">
                <a href="<?php echo base_url(''); ?>" style="text-decoration: none">
                    <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/icon/alumni/rungg.png'); ?>" alt="Some Image" width="60" height="60">
                            <p class="card-text text-danger">Belum Bekerja</p>
                            <h3 id="" class="card-text text-danger"> <!-- XHR --> </h3>
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
                    <a href="<?php echo base_url('#'); ?>" style="text-decoration: none">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('#') ?>" alt="Some Image" width="60" height="60">
                            <p class="card-text text-success">#</p>
                            <h3 id="" class="card-text text-success"> <!-- XHR -->  </h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- <script src="<?php //echo base_url('assets/js/realtimeDashboard.js'); ?>"></script> -->
<script>
    $('#content').css('width', '100%');
</script>