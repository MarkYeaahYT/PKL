<div class="col-md-10 pt-5 pr-4 col-sm-8 border">
    <div class="container border">
        <div class="row bg-light">
            <h2 class="text-primary p-3"> 
                <img src="<?php echo base_url('assets/icon/ruang.png');?>" alt="" width="30" height="30" >
                Ruang
            </h2>
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
                                    <label for="ruang">Ruang</label>
                                    <input type="text" class="form-control" id="ruang">
                                    <small class="form-text text-muted"></small>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="ruang_edit">Ruang</label>
                                    <input type="hidden" class="form-control" id="id_edit">
                                    <input type="text" class="form-control" id="ruang_edit">
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
                            <h5 class="modal-title" id="exampleModalLabel">Delete Barang</h5>
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
            <div class="container">
                <button id="tambah" type="button" class="btn btn-primary">
                    <img src="<?php echo base_url('assets/icon/add.png'); ?>" width="25" height="25" alt="" srcset="">
                    Tambah Ruang
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Ruang</th>
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
    var table = $('#mytable').DataTable({
        ajax: {
            url: '/alfabank/ruang/show_data',
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'ruang'},
            {render: function(data ,type, row){
                return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                        'data-id="'+row.id+
                        '"data-ruang="'+row.ruang+
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

<script src="<?php echo base_url('assets/js/ruang.js'); ?>"></script>