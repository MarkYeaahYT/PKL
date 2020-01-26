<div class="border p-2">
    <div class="container-fluid border">
        <div class="row bg-light">
            <h3 class="p-3 display-7"> 
                <img src="<?php echo base_url('assets/icon/book.png');?>" alt="" width="30" height="30" >
                Program
            </h3>
        </div>


        <!-- Modal -->
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
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="program">Program</label>
                                    <select name="program" id="program" class="form-control">
                                        <option value="1 Tahun">1 Tahun</option>
                                        <option value="Profesi 6 Bulan">Profesi 6 Bulan</option>
                                        <option value="Intensif">Intensif</option>
                                    </select>
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan">
                                    <small class="form-text text-muted">tambah jurusan baru</small>
                                </div>
                            </div>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Program</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="program_edit">Program</label>
                                    <select name="program_edit" id="program_edit" class="form-control">
                                        <option value="1 Tahun">1 Tahun</option>
                                        <option value="Profesi 6 Bulan">Profesi 6 Bulan</option>
                                        <option value="Intensif">Intensif</option>
                                    </select>
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="jurusan_edit">Jurusan</label>
                                    <input type="hidden" class="form-control" id="id_edit">
                                    <input type="text" class="form-control" id="jurusan_edit">
                                    <small class="form-text text-muted"></small>
                                </div>
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
                            <h5 class="modal-title" id="exampleModalLabel">Delete Program</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Are you sure to delete this record?</strong>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_del" id="id_del" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--END MODAL DELETE-->

        <div class="row pt-4 pb-4">
            <div class="container-fluid">
                <button id="tambah" type="button" class="btn btn-primary">
                    <img src="<?php echo base_url('assets/icon/add.png'); ?>" width="25" height="25" alt="" srcset="">
                    Tambah Program
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Program</th>
                            <th>Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
                <tbody>

                </tbody>
            </div>
        </div>

    </div>
</div>

<script>
    // var table = $('#mytable').DataTable()
    var table = $('#mytable').DataTable({
        ajax: {
            url: '/alfabank/program/data_xhr',
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'program'},
            {data: 'jurusan'},
            {render: function(data ,type, row){
                return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                        'data-id="'+row.id+
                        '"data-jurusan="'+row.jurusan+
                        '"data-program="'+row.program+
                        '" >Edit</a>'+
                        '<a href="javascript:void(0);" class="btn btn-danger item-del" data-id="'+row.id+'">Del</a>'
            }}
        ]
    })

    table.on('order.dt search.dt', function () { 
        table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i){
            cell.innerHTML = i + 1;
        });
     })
</script>


<script src="<?php echo base_url('assets/js/alumni/ade_inprogram.js'); ?>"></script>