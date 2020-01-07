$(document).ready(function () {
    /**
     * ADD
     */
    // handle add
    $('#tambah').on('click', function () {
        
        $('#myModal').modal('show');
    });
    
    // handle add to send
    $('#btn_add').on('click', function () {
        var ruang = $('#ruang').val();
        $.ajax({
            type: "POST",
            url: "/alfabank/ruang/add",
            data: {ruang: ruang},
            dataType: "JSON",
            success: function (response) {
                
                $('#ruang').val("");
                location.reload(true);
                $('#myModal').modal('hide');
            }
        });        
    });
    
    /**
     * EDIT
     */
    // handle edit
    $('#mytable').on('click', '.item-edit', function () {
        var id_edit = $(this).data('id')
        var ruang_edit = $(this).data('ruang')
        $('#id_edit').val(id_edit);
        $('#ruang_edit').val(ruang_edit);
        $('#Modal_Edit').modal('show');
        
    });
    $('#btn_update').on('click', function () {
        var id_edit = $('#id_edit').val();
        var ruang_edit = $('#ruang_edit').val();
        $.ajax({
            type: "POST",
            url: "/alfabank/ruang/edit",
            data: {
                id: id_edit,
                ruang: ruang_edit
            },
            dataType: "JSON",
            success: function (response) {
                
                $('#id_edit').val("");
                $('#ruang_edit').val("");
                $('#Modal_Edit').modal('hide');
                location.reload(true);
            }
        });
        
    });


    /**
     * DEL
     */
    // handle del to send
    $('#btn_delete').on('click', function () {
        var id = $('#id_del').val();
        $.ajax({
            type: "POST",
            url: "/alfabank/ruang/del",
            data: {id: id},
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
                $('#id_del').val("");
            }
        });
    });
    
    // handle del
    $('#mytable').on('click', '.item-del', function () {
        
        var id = $(this).data('id');
        $('#id_del').val(id);
        $('#Modal_Delete').modal('show');
    });

});