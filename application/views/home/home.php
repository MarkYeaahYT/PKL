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
                            <p class="card-text">inventory app</p>
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
                            <p class="card-text">data alumni</p>
                            <a href="<?php echo base_url('alumni'); ?>" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" style="text-decoration: none">
                <div class="col-md-3 auth">
                    <div class="shadow-lg border border-dark card">
                        <img class="card-img-top" src="<?php echo base_url('assets/icon/anggaran/money.png'); ?>" width="64" height="216" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Anggaran</h5>
                            <p class="card-text">anggaran dana</p>
                            <a href="#" class="btn btn-primary">Go</a>
                        </div>
                    </div>
                </div>
            </a>
    </div>

    <script>
        $(document).ready(function () {
            $('.auth').on('click', function () {
                $('#Modal_Auth').modal('show');
            });
        });
    </script>

</div>
