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
                        <div class="form-group">
                            <div class="col-md-9">
                                <label for="no_inventaris_edit">No Inventaris</label>
                                <input hidden type="text" class="form-control" id="kode_barang_edit">
                                <input type="text" class="form-control" id="no_inventaris_edit" readonly>
                                <small class="form-text text-muted">No inventaris barang</small>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="nama_edit">Nama</label>
                                    <input type="text" class="form-control" id="nama_edit" placeholder="Nama Barang">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="cat_edit">Katagori</label>
                                    <select name="cat_edit" id="cat_edit" class="form-control">
                                        <option value="NE">NE</option>
                                        <option value="EL">EL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="kondisi_edit">Kondisi</label>
                                    <select name="kondisi_edit" id="kondisi_edit" class="form-control">
                                        <option value="Baru">Baru</option>
                                        <option value="Second">Second</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="tanggalbeli_edit">Tanggal Beli</label>
                                    <input type="date" placeholder="yyyymmdd" class="form-control" id="tanggalbeli_edit" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="harga_edit">Harga</label>
                                    <input type="text" class="form-control" id="harga_edit" placeholder="example: 100000">
                                    <small class="form-text text-muted">Harga</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="status_edit">Status</label>
                                    <select name="status" id="status_edit" class="form-control">
                                        <option value="Normal">Normal</option>
                                        <option value="Rusak">Rusak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="ruang_edit">Ruang</label>
                                    <input type="text" class="form-control" id="ruang_edit" placeholder="Ruang">
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
                            <th>No Inventaris</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Kondisi</th>
                            <th>Tanggal Beli</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Ruang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">
                        <!-- js process -->
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/rusak.js') ?>"></script>
<script>
    var table = $('#mytable').DataTable({
        ajax: {
            url: '/alfabank/welcome/rusak_data',
            dataSrc: ''
        },
        columns: [
            {data: 'kode_barang'},
            {data: 'no_inventaris'},
            {data: 'nama'},
            {data: 'cat'},
            {data: 'kondisi'},
            {data: 'tanggal_beli'},
            {render: function(data, type, row){
                return 'Rp '+row.harga
            }},
            {data: 'status'},
            {data: 'ruang'},
            {render: function(data, type, row){
                return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                        'data-kode_barang="'+row.kode_barang+
                        '"data-no_inventaris="'+row.no_inventaris+
                        '"data-nama="'+row.nama+
                        '"data-cat="'+row.cat+
                        '"data-kondisi="'+row.kondisi+
                        '"data-tanggal_beli="'+row.tanggal_beli+
                        '"data-harga="'+row.harga+
                        '"data-status="'+row.status+
                        '"data-ruang="'+row.ruang+
                        '" >Edit</a>'+
                        '<a href="javascript:void(0);" class="btn btn-danger item-del" data-kode_barang="'+row.kode_barang+'">Del</a>'
            }}
        ]
    });

    table.on('order.dt search.dt', function(){
        table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
            cell.innerHTML = i + 1;
         });
    })
</script>
