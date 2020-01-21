$(document).ready(function () {

    $(".modal").css('overflow-y', 'auto');

    $('#program').change(function (e) { 
        e.preventDefault();
        
        var selected = $(this).val();
        if(selected == "1 Tahun"){
            $("#Modal_Thn").modal('show');
            
        }else if(selected == "Profesi 6 Bulan"){
            $("#Modal_Bln").modal('show');
            
        }else if(selected == "Intensif"){
            $("#Modal_Itf").modal('show');
            
        }else if(selected == "Privat"){
            $("#Modal_Prv").modal('show');
            
        }
    });
    
    // Storing data in below program select
    $('#save_thn').on('click', function () {
        var jurusan = $('#jurusan_thn').val();
        $('#programplaceholder').val("1 Tahun  >  "+jurusan);
        $("#Modal_Thn").modal('hide');
    });
    
    $('#save_bln').on('click', function () {
        var jurusan = $('#jurusan_bln').val();
        $('#programplaceholder').val("Profesi 6 Bulan  >  "+jurusan);
        $("#Modal_Bln").modal('hide');
    });
    
    $('#save_itf').on('click', function () {
        var jurusan = $('#jurusan_itf').val();
        $('#programplaceholder').val("Intensif  >  "+jurusan);
        $("#Modal_Itf").modal('hide');
    });
    
    $('#save_prv').on('click', function () {
        var jurusan = $('#jurusan_prv').val();
        $('#programplaceholder').val("Privats  >  "+jurusan);
        $("#Modal_Prv").modal('hide');
    });

});