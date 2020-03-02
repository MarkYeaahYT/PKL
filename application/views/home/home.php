<div class="container-fluid padding">
    <div class="row padding justify-content-center">

            <!-- Modal Auth -->
            <?php $this->load->view('anggaran/auth/auth'); ?>
            <!-- Modal Auth -->
        
            <a href="<?php echo base_url('welcome/dashboard'); ?>" style="text-decoration: none">
                <div class="col-md-3">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="<?php echo base_url('assets/icon/cloudstorage.png'); ?>" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Inventory</h5>
                            <p class="card-text">for user umum</p>
                            <a href="<?php echo base_url('welcome/dashboard'); ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="<?php echo base_url('alumni'); ?>" style="text-decoration: none">
                <div class="col-md-3">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="<?php echo base_url('assets/icon/alumni.png'); ?>" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Data Alumni</h5>
                            <p class="card-text">for user bkk</p>
                            <a href="<?php echo base_url('alumni'); ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo site_url("anggaran/") ?>" style="text-decoration: none">
                <div class="col-md-3 auth">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="<?php echo base_url('assets/icon/anggaran/money.png'); ?>" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Anggaran</h5>
                            <p class="card-text">for user keuangan</p>
                            <a href="<?php echo site_url("anggaran/") ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/ci_alfa" style="text-decoration: none">
                <div class="col-md-3">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="<?php echo base_url('assets/icon/office.png'); ?>" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Marketing </h5>
                            <p class="card-text">marketing app</p>
                            <a href="/ci_alfa" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>
    </div>
</div>
