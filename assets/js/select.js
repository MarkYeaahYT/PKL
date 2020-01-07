$(document).ready(function () {

    // handle in add
    $('#tambah').on('click', function () {
        var oplength = $('#ruang > option').length;
        $.ajax({
            type: "GET",
            url: "/alfabank/ruang/show_data",
            data: "",
            dataType: "JSON",
            success: function (response) {
                if(oplength < 1){
                    response.forEach(el => {
                        $('#ruang').append($('<option>').val(el.ruang).text(el.ruang));
                    });
                }
            }
        });
        
    });

    // handle in edit
    $('#mytable').on('click', '.item-edit',function () {
        var oplength = $('#ruang_edit > option').length;
        $.ajax({
            type: "GET",
            url: "/alfabank/ruang/show_data",
            data: "",
            dataType: "JSON",
            success: function (response) {
                if(oplength < 1){
                    response.forEach(el => {
                        $('#ruang_edit').append($('<option>').val(el.ruang).text(el.ruang));
                    });
                }
            }
        });
        
    });

});