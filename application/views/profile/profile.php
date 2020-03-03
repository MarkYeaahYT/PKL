<div class="border p-2">
    <div class="container-fluid border">
        <div class="row bg-light">
            <h3 class="p-3 display-7"> 
                <img src="<?php echo base_url('assets/icon/book.png');?>" alt="" width="30" height="30" >
                Manage User
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
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username">
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="akses">Akses</label>
                                    <select name="akses" id="akses" class="form-control">
                                        <option value="1">Full Akses</option>
                                        <option value="2">Keuangan</option>
                                        <option value="3">Inventory</option>
                                        <option value="4">Data Alumni</option>
                                        <option value="5">Marketing</option>
                                    </select>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="username_edit">Username</label>
                                    <input type="text" class="form-control" id="username_edit">
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="password_edit">Password</label>
                                    <input type="hidden" class="form-control" id="id_edit">
                                    <input type="password" class="form-control" id="password_edit">
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9">
                                    <label for="akses_edit">Akses</label>
                                    <select name="akses_edit" id="akses_edit" class="form-control">
                                        <option value="1">Full Akses</option>
                                        <option value="2">Keuangan</option>
                                        <option value="3">Inventory</option>
                                        <option value="4">Data Alumni</option>
                                        <option value="5">Marketing</option>
                                    </select>
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
                    Tambah User
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Akses</th>
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
    $(document).ready(function () {
        var datenow = new Date().toISOString().slice(0,10);
		$('.datenow').text(datenow);

        var table = $('#mytable').DataTable({
            ajax: {
                url: '/alfabank/profile/show_xhr',
                dataSrc: ''
            },
            columns: [
                {data: 'id'},
                {data: 'username'},
                {render: function (data, type, row) {
                    return "<input class='pass' type='password' value='"+row.password+"' readonly title='click to see'>"
                }},
                {render: function (data, type, row) {
                    if(row.role == "1"){
                        return "Full Akses";
                    }else if(row.role == "2"){
                        return "Keuangan";
                    }else if(row.role == "3"){
                        return "Inventory";
                    }else if(row.role == "4"){
                        return "Data Alumni";
                    }else if(row.role == "5"){
                        return "Marketing";
                    }
                }},
                {render: function(data ,type, row){
                    return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                            'data-id="'+row.id+
                            '"data-username="'+row.username+
                            '"data-password="'+row.password+
                            '"data-role="'+row.role+
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
    });
</script>
<script src="<?php echo base_url("assets/js/program.js"); ?>"></script>
<style>
    .pass{
        all: unset;
        cursor: pointer;
    }
</style>