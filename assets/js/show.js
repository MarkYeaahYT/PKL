$(document).ready(function () {

    // Handle btn edit
    $('#mytable').on('click','.item-edit' , function () {
        var kode_barang = $(this).data('kode_barang');
        var id_model = $(this).data('id_model');
        var nama_barang = $(this).data('nama_barang');
        var merk = $(this).data('merk');
        var tanggal_masuk = $(this).data('tanggal_masuk');
        // var status = $(this).data('status');

        
        $('#code_barang_edit').val(kode_barang);
        $('#model_edit').val(id_model);
        $('#nama_barang_edit').val(nama_barang);
        $('#merk_barang_edit').val(merk);
        $('#tanggal_masuk_edit').val(tanggal_masuk);
        $('#current_model_edit').val(id_model);
        $('#Modal_Edit').modal('show');
    });

    // Handle edit to send
    $('#btn_update').on('click', function () {
        var kode_barang = $('#code_barang_edit').val();
        var id_model = $('#model_edit').val();
        var nama_barang = $('#nama_barang_edit').val();
        var merk = $('#merk_barang_edit').val();
        var tanggal_masuk = $('#tanggal_masuk_edit').val();
        var status_edt = $('[name="status_edt"]').val();
        var current_id_model = $('#current_model_edit').val();
        
        $.ajax({
            type: "POST",
            url: "/alfabank/inventory/update",
            cache: false,
            data: {
                kode_barang: kode_barang,
                id_model: id_model,
                nama_barang: nama_barang,
                merk: merk,
                tanggal_masuk: tanggal_masuk,
                status: status_edt,
                current_idmodel: current_id_model
            },
            dataType: "dataType",
            success: function (response) {
                
            }
        });
        
        // Clear
        $('#code_barang_edit').val("");
        $('#model_edit').val("");
        $('#nama_barang_edit').val("");
        $('#merk_barang_edit').val("");
        $('#tanggal_masuk_edit').val("");
        $('[name="status_edt"]').val("");
        $('#current_model_edit').val("");
        
        $('#Modal_Edit').modal('hide');
        location.reload(true);
    });
    
    
    // Handle del button
    $('#mytable').on('click', '.item-del', function () {
        $('#Modal_Delete').modal('show');
        var getcode = $(this).data('kode_barang');
        $('#code_barang_delete').val(getcode);
    });

    // Handle del to send
    $('#btn_delete').on('click', function () {
        var kode = $('#code_barang_delete').val();
        console.log(kode);

        $.ajax({
            type: "POST",
            url: "/alfabank/inventory/del",
            cache: false,
            data: {kode_barang: kode},
            dataType: "JSON",
            success: function (response) {
                $('#code_barang_delete').val("");
                location.reload(true);
            }
        });
        
        $('#Modal_Delete').modal('hide');
    });

    // Handle Add to sending
    $('#btn_add').on('click', function () {
        var kode_barang = $('#kodebarang').val();
        var no_model = $('#nomodel').val();
        var nama_barang = $('#namabarang').val();
        var merk = $('#merk').val();
        var status = $('#status').val();
        var tanggalmasuk = $('#tanggalmasuk').val();


        $.ajax({
            type: "POST",
            url: "/alfabank/inventory/add",
            cache: false,
            data: {kode_barang: kode_barang, 
                id_model: no_model, 
                status: status, 
                tanggal_masuk: tanggalmasuk, 
                nama_barang: nama_barang, 
                merk: merk},
            dataType: "JSON",
            success: function (response) {
                
            }
        });

        $('#kodebarang').val("");
        $('#nomodel').val("");
        $('#namabarang').val("");
        $('#merk').val("");
        $('#status').val("");
        $('#tanggalmasuk').val("");

        $('#myModal').modal('hide');
        location.reload(true);
    });
});