
    <div class="border pr-4">
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
                                        <div class="form-row">
                                            <div class="form-group col-md-5 ml-3">
                                                <label for="te_l">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="te_l" placeholder="">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="ta_l">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="ta_l" placeholder="">
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
                                                <label for="no_hp">No Tlp</label>
                                                <input type="number" class="form-control" id="no_hp" placeholder="">
                                                <small class="form-text text-muted">no telepon murid</small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="program">Program</label>
                                                <input type="text" class="form-control" id="programplaceholder" readonly>
                                                <br>
                                                <select name="program" id="program" class="form-control is-valid">
                                                    <option value="1 Tahun">1 Tahun</option>
                                                    <option value="Profesi 6 Bulan">Profesi 6 Bulan</option>
                                                    <option value="Intensif">Intensif</option>
                                                    <option value="Privat">Privat</option>
                                                </select>
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
                                                    <option value="Sudah Bekerja">Sudah Bekerja</option>
                                                    <option value="Mencari Pekerjaan">Mencari Pekerjaan</option>
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
                                                <label for="tanggal_mulai">Tanggal Mulai Kerja</label>
                                                <input type="date" class="form-control" id="tanggal_mulai" placeholder="">
                                                <small class="form-text text-muted"></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="posisi_pekerjan">Jabatan Pekerjaan</label>
                                                <input type="text" class="form-control" id="posisi_pekerjan" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-9">
                                                <label for="gaji">Gaji Pertama</label>
                                                <input type="number" class="form-control" id="gaji" placeholder="">
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
                                                <label for="no_tlp_perusahaan">No Tlp</label>
                                                <input type="number" class="form-control" id="no_tlp_perusahaan" placeholder="">
                                                <small class="form-text text-muted">no telepon perusahaan</small>
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
                                    <a href="<?php echo site_url('export/pdf_alumni'); ?>" target="_blank" class="btn btn-success">PDF</a>
                                    <a href="<?php echo site_url('export/xlsx_alumni') ?>" target="_blank" class="btn btn-success">XLSX</a>
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
                                                <!-- data_select_xhr -->
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
                                                <!-- data_select_xhr -->
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
                                                <!-- data_select_xhr -->
                                            </select>
                                        </div>
                                    </div>
                                    <!-- bodyhereEND -->
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="save_itf">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--END MODAL Intensif-->
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
    var table = $('#mytable').DataTable({
        // dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
        ajax: {
            url: '/alfabank/alumni/data_xhr',
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'nama'},
            {render: function(data, type, row){
                if(row.te_lahir == null || row.ta_lahir == null){
                    return "";
                }else{
                    return row.te_lahir+" "+row.ta_lahir;
                }
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
                if(row.gaji_pertama == null){
                    return "";
                }else{
                    return 'Rp '+row.gaji_pertama;
                }
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
<script src="<?php echo base_url('assets/js/alumni/program_select.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/alumni/ade_inshow.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/alumni/disablefeature.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/alumni/select_xhr.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/alumni/export.js'); ?>"></script>
