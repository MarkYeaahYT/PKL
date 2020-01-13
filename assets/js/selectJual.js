$(document).ready(function () {
   $('#status_edit').change(function (e) { 
       e.preventDefault();
       if($(this).val() == "Dijual"){
           $('#Modal_Jual').modal('show');
       }
       
   }); 

    // handle save to send
    $('#save_jual').on('click', function () {
        var no_inventaris = $('#no_inventaris_edit').val();
        var hargajual = $('#harga_jual').val();
        var tanggaljual = $('#date_jual').val();
        var status = $('#status_jual').val();

        $.ajax({
            type: "POST",
            url: "/alfabank/jual/save",
            data: {
                no_inventaris: no_inventaris,
                harga: hargajual,
                tanggaljual: tanggaljual,
                status: status
            },
            dataType: "JSON",
            success: function (response) {
                $('#date_jual').val("");
                $('#status_jual').val("");
                $('#harga_jual').val("");
                $('#Modal_Jual').modal('hide');
                
            }
        });
    });

});