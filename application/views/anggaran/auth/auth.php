<form>
    <div class="modal fade" id="Modal_Auth" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Auth</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <div class="col-md-9">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username">
                                <small class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                                <div class="valid-feedback">
                                    <p class="autocomplete"></p>
                                </div>
                            </div>
                        </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn_auth" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="<?php echo base_url('assets/js/anggaran/auth.js') ?>"></script>