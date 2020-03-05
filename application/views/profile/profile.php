<div class="border p-2">
    <div class="container-fluid border">
        <div class="row bg-light">
            <h3 class="p-3 display-7"> 
                <img src="<?php echo base_url('assets/icon/book.png');?>" alt="" width="30" height="30" >
                Manage Appearance
            </h3>
        </div>

        <br>

        <div class="row">
            <div class="col-md-12">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="inventory-tab" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory"
                        aria-selected="true">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false">Data Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false">Anggaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing"
                        aria-selected="false">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="false">Home</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <br>
                <div class="tab-pane fade show active" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                    
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <img src="" class="myicon rounded float-left" width="90" height="90" alt="">
                                <input type="file" id="FileUpload1" style="display: none" />
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">App Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="iinventory">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="d-block float-right">
                                    <button class="btn btn-success save" data-id="1">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <img src="" class="myicon rounded float-left" width="90" height="90" alt="">
                                <input type="file" id="FileUpload2" style="display: none" />
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">App Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="idalumni">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="d-block float-right">
                                    <button class="btn btn-success save" data-id="2">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <img src="" class="myicon rounded float-left" width="90" height="90" alt="">
                                <input type="file" id="FileUpload3" style="display: none" />
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">App Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="ianggaran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="d-block float-right">
                                    <button class="btn btn-success save" data-id="3">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <img src="" class="myicon rounded float-left" width="90" height="90" alt="">
                                <input type="file" id="FileUpload4" style="display: none" />
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">App Name</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="imarketing">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="d-block float-right">
                                    <button class="btn btn-success save" data-id="4">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                                <img src="http://localhost/alfabank/assets/icon/alfabank.png" class="myicon rounded float-left" width="90" height="90" alt="">
                                <input type="file" id="filehome" style="display: none" />
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="titlehome" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="titlehome">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-3">
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="tlp" class="col-sm-2 col-form-label">Tlp</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="tlp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="d-block float-right">
                                    <button class="btn btn-success savehome" data-id="1">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".myicon").css("cursor", "pointer");
        var datenow = new Date().toISOString().slice(0,10);
		$('.datenow').text(datenow);

    });
</script>
<script src="<?php echo base_url("assets/js/manageappearance.js") ?>"></script>