<div class="container-fluid padding">
    <div class="row padding justify-content-center">

            <!-- Modal Auth -->
            <?php $this->load->view('anggaran/auth/auth'); ?>
            <!-- Modal Auth -->
        
            <a href="<?php echo base_url('welcome/dashboard'); ?>" style="text-decoration: none">
                <div class="col-md-3 inventory">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="<?php echo base_url('welcome/dashboard'); ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>
            <a href="<?php echo base_url('alumni'); ?>" style="text-decoration: none">
                <div class="col-md-3 dataalumni">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="<?php echo base_url('alumni'); ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo site_url("anggaran/") ?>" style="text-decoration: none">
                <div class="col-md-3 anggaran">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="<?php echo site_url("anggaran/") ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/ci_alfa/dashboard" style="text-decoration: none">
                <div class="col-md-3 marketing">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title"> </h5>
                            <p class="card-text"></p>
                            <a href="/ci_alfa/dashboard" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>
    </div>
</div>
<script src="<?php echo base_url("assets/js/home.js") ?>"></script>
