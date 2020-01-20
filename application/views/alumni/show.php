<div id="content">
    <div class="border pt-4 pr-4">
    <!-- <div class="container border"> -->
        <div class="pl-4 row bg-light">
            <h3 class="display-7 p-3">Data Alumni</h3>
        </div>
        <div class="row pt-4 pb-4">
            <div class="container-fluid">

                    <div class="pl-4 float-left">
                        <button id="tambah" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            <img src="<?php echo base_url('assets/icon/add.png'); ?>" width="25" height="25" alt="" srcset="">
                        Tambah Data
                        </button>
                    </div>

                    <div class="float-right">
                        <button id="export" type="button" class="btn btn-success pull-right">
                            <img src="<?php echo base_url('assets/icon/export.png'); ?>" width="25" height="25" alt="" srcset="">
                        Export
                        </button>
                    </div>

                <!-- Modal Add-->
                <form>
                    <div class="modal fade" id="myModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel">Input</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                        <!-- Body -->
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama">
                                                <small class="form-text text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="ttl">TTL</label>
                                                <input type="text" class="form-control" id="ttl" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="program">Program</label>
                                                <select name="program" id="program" class="form-control is-valid">
                                                    <option value="1 Tahun">1 Tahun</option>
                                                    <option value="Profesi 6 Bulan">Profesi 6 Bulan</option>
                                                    <option value="Intensif">Intensif</option>
                                                    <option value="Privat">Privat</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="tahun_lulus">Tahun Lulus</label>
                                                <input type="number" placeholder="YYYY" class="form-control" id="tahun_lulus" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="Melamar">Melamar</option>
                                                    <option value="Bekerja">Bekerja</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="tanggal_mulai">Tanggal Mulai</label>
                                                <input type="date" class="form-control" id="tanggal_mulai" placeholder="">
                                                <small class="form-text text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="posisi_pekerjan">Posisi Pekejaan</label>
                                                <input type="text" class="form-control" id="posisi_pekerjan" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="perusahaan_penerima">Perusahaan Penerima</label>
                                                <input type="text" class="form-control" id="perusahaan_penerima" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                                                <input type="text" class="form-control" id="alamat_perusahaan" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="no_hp">No HP</label>
                                                <input type="number" class="form-control" id="no_hp" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="ket">Ketarangan</label>
                                                <input type="text" class="form-control" id="ket" placeholder="">
                                            </div>
                                        </div>
                                        <!-- EndBody -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" type="submit" id="btn_add" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!-- Modal -->

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
                                            <select name="kondis" id="kondisi_edit" class="form-control">
                                                <option value="Baru">Baru</option>
                                                <option value="Second">Second</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label for="tanggalmasuk_edit">Tanggal Masuk</label>
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
                                                <option value="Dijual">Dijual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label for="ruang_edit">Ruang</label>
                                            <!-- <input type="text" class="form-control" id="ruang_edit" placeholder="ruang"> -->
                                            <select name="ruang_edit" id="ruang_edit" class="form-control">
                                                <!-- JS process -->
                                            </select>
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
                <!--MODAL Export-->
                 <form>
                    <div class="modal fade" id="Modal_Export" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Export</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <a href="<?php echo base_url('export/pdf'); ?>" target="_blank" class="btn btn-success">PDF</a>
                                    <a href="<?php echo base_url('export/xlsx') ?>" target="_blank" class="btn btn-success">XLSX</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--END MODAL Export-->
                <!--MODAL 1 Tahun-->
                 <form>
                    <div class="modal fade" id="Modal_Thn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">1 Tahun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <!-- bodyhere -->
                                    
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label for="jurusan_thn">Jurusan</label>
                                            <select name="jurusan_thn" id="jurusan_thn" class="form-control">
                                                <option value="Web Programmer">Web Programmer</option>
                                                <option value="Perbankan">Perbankan</option>
                                                <option value="Fotografi & Desain Grafis">Fotografi & Desain Grafis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- bodyhereEND -->
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="save_thn">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--END MODAL 1 Tahun-->
                <!--MODAL Profesi 6 bln-->
                 <form>
                    <div class="modal fade" id="Modal_Bln" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Profesi 6 Bulan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <!-- bodyhere -->
                                    
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label for="jurusan_bln">Jurusan</label>
                                            <select name="jurusan_bln" id="jurusan_bln" class="form-control">
                                                <option value="Multimedia Creator">Multimedia Creator</option>
                                                <option value="Web Programmer">Web Programmer</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- bodyhereEND -->
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="save_bln">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--END MODAL Profesi 6 bln-->
                <!--MODAL Intensif-->
                 <form>
                    <div class="modal fade" id="Modal_Itf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Intensif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <!-- bodyhere -->
                                    
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label for="jurusan_itf">Jurusan</label>
                                            <select name="jurusan_itf" id="jurusan_itf" class="form-control">
                                                <option value="Prof. Admin">Prof. Admin</option>
                                                <option value="Prof. Office">Prof. Office</option>
                                                <option value="Desain Grafis">Desain Grafis</option>
                                                <option value="Web Programmer">Web Programmer</option>
                                                <option value="Teknisi Komputer & Jaringan">Teknisi Komputer & Jaringan</option>
                                                <option value="Akuntansi">Akuntansi</option>
                                                <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- bodyhereEND -->
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="save_bln">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--END MODAL Intensif-->
                <!--MODAL Privat-->
                 <form>
                    <div class="modal fade" id="Modal_Prv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Privat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <!-- bodyhere -->
                                    
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label for="jurusan_prv">Jurusan</label>
                                            <input type="text" class="form-control" id="jurusan_prv" placeholder="">
                                        </div>
                                    </div>
                                    <!-- bodyhereEND -->
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="save_prv">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--END MODAL Privat-->
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Program</th>
                            <th>Tahun Lulus</th>
                            <th>Status</th>
                            <th>Mulai Tanggal</th>
                            <th>Posisi Pekerjaan</th>
                            <th>Perusahaan Penerima</th>
                            <th>Alamat Perusahaan</th>
                            <th>No Hp</th>
                            <th>Ket</th>
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

<script>$('#mytable').DataTable();</script>
<script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
<!-- <script>
    var table = $('#mytable').DataTable({
        
        ajax: {
            url: '',
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
</script> -->
<script src="<?php echo base_url('assets/js/program_select.js'); ?>"></script>
