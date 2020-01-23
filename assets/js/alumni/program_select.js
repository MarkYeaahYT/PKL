$(document).ready(function () {

    $(".modal").css('overflow-y', 'auto');

    /**
     * handle select button to show modal
     * in ADD
     */
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

    /**
     * handle select button to show modal
     * in EDIT
     */
    $('#program_edit').change(function (e) { 
        e.preventDefault();
        
        var selected = $(this).val();
        if(selected == "1 Tahun"){
            $("#Modal_Thn_edit").modal('show');
            
        }else if(selected == "Profesi 6 Bulan"){
            $("#Modal_Bln_edit").modal('show');
            
        }else if(selected == "Intensif"){
            $("#Modal_Itf_edit").modal('show');
            
        }else if(selected == "Privat"){
            $("#Modal_Prv_edit").modal('show');
            
        }
    });
    
    // Storing data in above program select
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
        $('#programplaceholder').val("Privat  >  "+jurusan);
        $("#Modal_Prv").modal('hide');
    });


    // Storing data in above program select EDIT
    $('#save_thn_edit').on('click', function () {
        var jurusan = $('#jurusan_thn_edit').val();
        $('#programplaceholder_edit').val("1 Tahun  >  "+jurusan);
        $("#Modal_Thn_edit").modal('hide');
    });
    
    $('#save_bln_edit').on('click', function () {
        var jurusan = $('#jurusan_bln_edit').val();
        $('#programplaceholder_edit').val("Profesi 6 Bulan  >  "+jurusan);
        $("#Modal_Bln_edit").modal('hide');
    });
    
    $('#save_itf_edit').on('click', function () {
        var jurusan = $('#jurusan_itf_edit').val();
        $('#programplaceholder_edit').val("Intensif  >  "+jurusan);
        $("#Modal_Itf_edit").modal('hide');
    });
    
    $('#save_prv_edit').on('click', function () {
        var jurusan = $('#jurusan_prv_edit').val();
        $('#programplaceholder_edit').val("Privat  >  "+jurusan);
        $("#Modal_Prv_edit").modal('hide');
    });

});