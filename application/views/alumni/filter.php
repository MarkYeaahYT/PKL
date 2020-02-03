
    <div class="border pr-4">
    <!-- <div class="container border"> -->
        <div class="pl-4 row bg-light">
            <h3 id="param" class="display-7 text-primary p-3"></h3>
        </div>

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="nama_edit">Nama</label>
                                        <input type="text" class="form-control" id="nama_edit">
                                        <input type="hidden" class="form-control" id="id_edit">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5 ml-3">
                                        <label for="te_l_edit">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="te_l_edit" placeholder="">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="ta_l_edit">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="ta_l_edit" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="alamat_edit">Alamat</label>
                                        <input type="text" class="form-control" id="alamat_edit" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="no_hp_edit">No Tlp</label>
                                        <input type="number" class="form-control" id="no_hp_edit" placeholder="">
                                        <small class="form-text text-muted">no telepon murid</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="programplaceholder_edit">Program</label>
                                        <input type="text" class="form-control" id="programplaceholder_edit" readonly>
                                        <br>
                                        <select name="program_edit" id="program_edit" class="form-control">
                                            <option value="1 Tahun">1 Tahun</option>
                                            <option value="Profesi 6 Bulan">Profesi 6 Bulan</option>
                                            <option value="Intensif">Intensif</option>
                                            <option value="Privat">Privat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="tahun_lulus_edit">Tahun Lulus</label>
                                        <input type="number" placeholder="YYYY" class="form-control" id="tahun_lulus_edit" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="status_edit">Status</label>
                                        <select name="status" id="status_edit" class="form-control">
                                            <option value="Mencari Pekerjaan">Mencari Pekerjaan</option>
                                            <option value="Sudah Bekerja">Sudah Bekerja</option>
                                            <option value="Lnjt Kuliah">Lnjt Kuliah</option>
                                            <option value="DO">DO</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                            <option value="Magang">Magang</option>
                                            <option value="?">?</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="tanggal_mulai_edit">Tanggal Mulai</label>
                                        <input type="date" class="form-control" id="tanggal_mulai_edit" placeholder="">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="posisi_pekerjan_edit">Jabatan Pekerjaan</label>
                                        <input type="text" class="form-control" id="posisi_pekerjan_edit" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="gaji_edit">Gaji Pertama</label>
                                        <input type="number" class="form-control" id="gaji_edit" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="perusahaan_penerima_edit">Perusahaan Penerima</label>
                                        <input type="text" class="form-control" id="perusahaan_penerima_edit" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="alamat_perusahaan_edit">Alamat Perusahaan</label>
                                        <input type="text" class="form-control" id="alamat_perusahaan_edit" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="no_tlp_perusahaan_edit">No Tlp</label>
                                        <input type="number" class="form-control" id="no_tlp_perusahaan_edit" placeholder="">
                                        <small class="form-text text-muted">no telepon perusahaan</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="ket_edit">Ketarangan</label>
                                        <input type="text" class="form-control" id="ket_edit" placeholder="">
                                    </div>
                                </div>
                                <!-- EndBody -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_edit" class="btn btn-primary">Save</button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Are you sure to delete this record?</strong>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL DELETE-->

        <!--MODAL 1 Tahun EDIT-->
        <form>
            <div class="modal fade" id="Modal_Thn_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="jurusan_thn_edit">Jurusan</label>
                                    <select name="jurusan_thn_edit" id="jurusan_thn_edit" class="form-control">
                                        <!-- data_select_xhr -->
                                    </select>
                                </div>
                            </div>
                            <!-- bodyhereEND -->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save_thn_edit">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL 1 Tahun EDIT-->

        <!--MODAL Profesi 6 bln EDIT-->
        <form>
            <div class="modal fade" id="Modal_Bln_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="jurusan_bln_edit">Jurusan</label>
                                    <select name="jurusan_bln_edit" id="jurusan_bln_edit" class="form-control">
                                        <!-- data_select_xhr -->
                                    </select>
                                </div>
                            </div>
                            <!-- bodyhereEND -->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save_bln_edit">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL Profesi 6 bln EDIT-->

        <!--MODAL Intensif EDIT-->
        <form>
            <div class="modal fade" id="Modal_Itf_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="jurusan_itf_edit">Jurusan</label>
                                    <select name="jurusan_itf_edit" id="jurusan_itf_edit" class="form-control">
                                        <!-- data_select_xhr -->
                                    </select>
                                </div>
                            </div>
                            <!-- bodyhereEND -->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save_itf_edit">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL Intensif EDIT-->

        <!--MODAL Privat EDIT-->
        <form>
            <div class="modal fade" id="Modal_Prv_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="jurusan_prv_edit">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan_prv_edit" placeholder="">
                                </div>
                            </div>
                            <!-- bodyhereEND -->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save_prv_edit">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL Privat EDIT-->
        
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>No Tlp</th>
                            <th>Program</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            <th>Status</th>
                            <th>Mulai Tanggal</th>
                            <th>Jabatan Pekerjaan</th>
                            <th>Gaji Pertama</th>
                            <th>Perusahaan Penerima</th>
                            <th>Alamat Perusahaan</th>
                            <th>No Tlp</th>
                            <th>Ket</th>
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

<script>
    var url_str = window.location.href;
    var url = new URL(url_str);
    var status = url.searchParams.get('status');
    var program = url.searchParams.get('program');
    var param = "";

    if(status != 'null'){
        // param += "status=";
        param = status;
    }else if(program != 'null'){
        // param += "program=";
        param = program;
    }

    if(param == "sb"){
        $('#param').text("Sudah Bekerja");
    }else if(param == "bb"){
        $('#param').text("Belum Bekerja");
    }else if(param == "thn"){
        $('#param').text("Program 1 Tahun");
    }else if(param == "bln"){
        $('#param').text("Profesi 6 Bulan");
    }else if(param == "itf"){
        $('#param').text("Intensif");
    }


    var table = $('#mytable').DataTable({
        ajax: {
            url: '/alfabank/alumni/filter_xhr?param='+param,
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'nama'},
            {render: function(data, type, row){
                return row.te_lahir+" "+row.ta_lahir;
            }},
            {data: 'alamat'},
            {data: 'no_hp'},
            {data: 'program'},
            {data: 'jurusan'},
            {data: 'tahun_lulus'},
            {data: 'status'},
            {data: 'mulai_tanggal'},
            {data: 'posisi_pekerjaan'},
            {render: function(data, type, row){
                return 'Rp '+row.gaji_pertama;
            }},
            {data: 'perusahaan_penerima'},
            {data: 'alamat_perusahaan'},
            {data: 'no_tlp_perusahaan'},
            {data: 'ket'},
            {render: function(data, type, row){
                return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                        'data-nama="'+row.nama+
                        '"data-id="'+row.id+
                        '"data-te_lahir="'+row.te_lahir+
                        '"data-ta_lahir="'+row.ta_lahir+
                        '"data-alamat="'+row.alamat+
                        '"data-program="'+row.program+
                        '"data-jurusan="'+row.jurusan+
                        '"data-tahun_lulus="'+row.tahun_lulus+
                        '"data-status="'+row.status+
                        '"data-mulai_tanggal="'+row.mulai_tanggal+
                        '"data-posisi_pekerjaan="'+row.posisi_pekerjaan+
                        '"data-perusahaan_penerima="'+row.perusahaan_penerima+
                        '"data-alamat_perusahaan="'+row.alamat_perusahaan+
                        '"data-no_hp="'+row.no_hp+
                        '"data-ket="'+row.ket+
                        '"data-no_tlp_perusahaan="'+row.no_tlp_perusahaan+
                        '"data-gaji_pertama="'+row.gaji_pertama+
                        '" >Edit</a>'+
                        '<a href="javascript:void(0);" class="btn btn-danger item-del" data-id="'+row.id+'">Del</a>'
            }}
        ]
    });
     table.on('order.dt search.dt', function(){
         table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
             cell.innerHTML = i + 1;
          });
    })
</script>
<script src="<?php echo base_url('assets/js/alumni/select_xhr.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/alumni/ade_inshow.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/alumni/program_select.js'); ?>"></script>

