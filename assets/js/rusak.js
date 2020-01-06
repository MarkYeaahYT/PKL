$(document).ready(function () {
    //handle btn edit
    $('#mytable').on('click', '.item-edit', function () {
        var kode_barang = $(this).data('kode_barang');
        var no_inventaris = $(this).data('no_inventaris');
        var nama = $(this).data('nama');
        var cat = $(this).data('cat');
        var kondisi = $(this).data('kondisi');
        var tanggal_beli = $(this).data('tanggal_beli');
        var harga = $(this).data('harga');
        var status = $(this).data('status');
        var ruang = $(this).data('ruang');

        $('#kode_barang_edit').val(kode_barang);
        $('#no_inventaris_edit').val(no_inventaris);
        $('#nama_edit').val(nama);
        $('#cat_edit').val(cat);
        $('#kondisi_edit').val(kondisi);
        $('#tanggalbeli_edit').val(tanggal_beli);
        $('#harga_edit').val(harga);
        $('#status_edit').val(status);
        $('#ruang_edit').val(ruang);

        $('#Modal_Edit').modal('show');
    });

    // Handle Edit to send
    $('#btn_update').on('click', function () {
        var kode_barang = $('#kode_barang_edit').val();
        var no_inventaris = $('#no_inventaris_edit').val();
        var nama = $('#nama_edit').val();
        var cat = $('#cat_edit').val();
        var kondisi = $("#kondisi_edit").val();
        var tanggal_beli = $('#tanggalbeli_edit').val();
        var harga = $('#harga_edit').val();
        var status = $('#status_edit').val();
        var ruang = $('#ruang_edit').val();
        
        $.ajax({
            type: "POST",
            url: "/alfabank/inventory/update",
            cache: false,
            data: {
                kode_barang: kode_barang,
                no_inventaris: no_inventaris,
                nama: nama,
                cat: cat,
                kondisi: kondisi,
                tanggal_beli: tanggal_beli,
                harga: harga,
                status: status,
                ruang: ruang
            },
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
            }
        });
        
        // Clear
        $('#kode_barang_edit').val("");
        $('#no_inventaris_edit').val("");
        $('#nama_edit').val("");
        $('#cat_edit').val("");
        $("#kondisi_edit").val("");
        $('#tanggalbeli_edit').val("");
        $('#harga_edit').val("");
        $('#status_edit').val("");
        $('#ruang_edit').val("");
        
        $('#Modal_Edit').modal('hide');
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
        // console.log(kode);

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

});