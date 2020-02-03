$(document).ready(function () {
    /**
     * set data in select add
     */
    $('#tambah').on('click', function () {
        var thn = $('#jurusan_thn > option').length
        var bln = $('#jurusan_bln > option').length
        var itf = $('#jurusan_itf > option').length
        $.ajax({
            type: "GET",
            url: "/alfabank/program/data_select_xhr",
            data: "",
            dataType: "JSON",
            success: function (response) {
                response['thn'].forEach(element => {
                    if(thn < 1){
                        $('#jurusan_thn').append($('<option>').val(element.jurusan).text(element.jurusan));
                    }
                });
                response['bln'].forEach(element => {
                    if(bln < 1){
                        $('#jurusan_bln').append($('<option>').val(element.jurusan).text(element.jurusan));
                    }
                });
                response['itf'].forEach(element => {
                    if(itf < 1){
                        $('#jurusan_itf').append($('<option>').val(element.jurusan).text(element.jurusan));
                    }
                });
            }
        });
    });

    /**
     * set data in select EDIT
     */
    $('#mytable').on('click', '.item-edit',function () {
        var thn = $('#jurusan_thn_edit > option').length
        var bln = $('#jurusan_bln_edit > option').length
        var itf = $('#jurusan_itf_edit > option').length
        $.ajax({
            type: "GET",
            url: "/alfabank/program/data_select_xhr",
            data: "",
            dataType: "JSON",
            success: function (response) {
                response['thn'].forEach(element => {
                    if(thn < 1){
                        $('#jurusan_thn_edit').append($('<option>').val(element.jurusan).text(element.jurusan));
                    }
                });
                response['bln'].forEach(element => {
                    if(bln < 1){
                        $('#jurusan_bln_edit').append($('<option>').val(element.jurusan).text(element.jurusan));
                    }
                });
                response['itf'].forEach(element => {
                    if(itf < 1){
                        $('#jurusan_itf_edit').append($('<option>').val(element.jurusan).text(element.jurusan));
                    }
                });
            }
        });
    });
});