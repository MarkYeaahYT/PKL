<div class="col-md-10 border pt-4 pr-4 col-sm-8">
    <div class="container border">
        <div class="row bg-light">
            <h3 class="display-7 p-3">Data Barang Rusak</h3>
        </div>
        <div class="row pt-4 pb-4">
            <div class="container">                
            </div>
        </div>

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kode Barang</label>
                            <div class="col-md-10">
                              <input type="text" name="code_barang_edit" id="code_barang_edit" class="form-control" placeholder="Code barang" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No Model</label>
                            <div class="col-md-10">
                              <input type="text" name="model_edit" id="model_edit" class="form-control" placeholder="No Model ">
                              <input hidden type="text" name="current_model_edit" id="current_model_edit" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Barang</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_barang_edit" id="nama_barang_edit" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Merk</label>
                            <div class="col-md-10">
                              <input type="text" name="merk_barang_edit" id="merk_barang_edit" class="form-control" placeholder="Merk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                            <select name="status_edt" id="status_edt" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tanggal Masuk</label>
                            <div class="col-md-10">
                              <input type="date" name="tanggal_masuk_edit" id="tanggal_masuk_edit" class="form-control" placeholder="yyyymmdd">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="code_barang_delete" id="code_barang_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!--END MODAL DELETE-->


        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>No Model</th>
                            <th>Nama barang</th>
                            <th>Merk</th>
                            <th>Tanggal Masuk</th>
                            <th>Status</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0; ?>
                        <?php foreach($res as $row) : ?>
                            <?php $no++; ?>
                            <tr>
                                <td> <?php echo $no; ?> </td>
                                <td><?php echo  $row->kode_barang ?></td>
                                <td><?php echo  $row->id_model ?></td>
                                <td><?php echo  $row->nama_barang ?></td>
                                <td><?php echo  $row->merk ?></td>
                                <td><?php echo  $row->tanggal_masuk ?></td>
                                <td><?php echo  $row->status ?></td>
                                <td> 
                                    <a href="javascript:void(0);" class="btn btn-info item-edit" 
                                        data-kode_barang="<?php echo  $row->kode_barang ?>" 
                                        data-id_model="<?php echo  $row->id_model ?>" 
                                        data-nama_barang="<?php echo  $row->nama_barang  ?>" 
                                        data-merk="<?php echo  $row->merk ?>" 
                                        data-tanggal_masuk="<?php echo  $row->tanggal_masuk ?>" 
                                        data-status="<?php echo  $row->status ?>" >Edit</a>
                                    <a href="javascript:void(0);" class="btn btn-danger item-del" 
                                        data-kode_barang="<?php echo  $row->kode_barang ?>">Del</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
        
    </div>
</div>

<script src="<?php echo base_url('assets/js/rusak.js') ?>"></script>
<script>
    $('#mytable').DataTable();
</script>
