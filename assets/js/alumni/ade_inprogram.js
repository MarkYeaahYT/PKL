$(document).ready(function () {
    $('#content').css('width', '100%');

    /**
     * show modal add
     */
    $('#tambah').on('click', function () {
        $('#myModal').modal('show');
    });
    
    /**
     * handle add to send in server
     */
    $('#btn_add').on('click', function () {
        var program = $('#program').val();
        var jurusan = $('#jurusan').val();


        $.ajax({
            type: "POST",
            url: "/alfabank/program/add",
            data: {
                jurusan: jurusan,
                program: program
            },
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
            }
        });
    });

    /**
     * show modal EDIT
     */
    $('#mytable').on('click', '.item-edit',function () {
        var id = $(this).data('id');
        var jurusan = $(this).data('jurusan');
        var program = $(this).data('program');

        $('#id_edit').val(id);
        $('#jurusan_edit').val(jurusan);
        $('#program_edit').val(program);

        $('#Modal_Edit').modal('show');
    });

    /**
     * send EDIT to server
     */
    $('#btn_update').on('click', function () {
        var id = $('#id_edit').val();
        var jurusan = $('#jurusan_edit').val();
        var program = $('#program_edit').val();

        $.ajax({
            type: "POST",
            url: "/alfabank/program/edit",
            data: {
                id: id,
                jurusan: jurusan,
                program: program
            },
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
            }
        });
    });

    /**
     * show del Modal
     */
    $('#mytable').on('click', '.item-del',function () {
        var id = $(this).data('id');
        $('#id_del').val(id);

        $('#Modal_Delete').modal('show');
    });

    /**
     * handle DEL send to server
     */
    $('#btn_delete').on('click', function () {
        var id = $('#id_del').val();
        $.ajax({
            type: "POST",
            url: "/alfabank/program/del",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
            }
        });
    });
});