$(document).ready(function () {
    /**
     * Disable some input button in clause
     */
    $('#status').change(function (e) { 
        e.preventDefault();
        
        var selected = $(this).val();
        if(selected == "Mencari Pekerjaan"){
            $('#tanggal_mulai').attr('readonly', "");
            $('#posisi_pekerjan').attr('readonly', "");
            $('#gaji').attr('readonly', "");
            $('#perusahaan_penerima').attr('readonly', "");
            $('#alamat_perusahaan').attr('readonly', "");
            $('#no_tlp_perusahaan').attr('readonly', "");
        }else{
            $('#tanggal_mulai').removeAttr('readonly');
            $('#posisi_pekerjan').removeAttr('readonly');
            $('#gaji').removeAttr('readonly');
            $('#perusahaan_penerima').removeAttr('readonly');
            $('#alamat_perusahaan').removeAttr('readonly');
            $('#no_tlp_perusahaan').removeAttr('readonly');
        }
    });

    /**
     * move to spesific input when click TAB
     */
    $('#status').keyup(function (e) { 
        if(e.keyCode == 9){
            $('#ket').focus();
        }
    });
    
    $('#tanggal_mulai').keyup(function (e) { 
        var attr = $('#tanggal_mulai').attr('readonly');
        if(typeof attr !== typeof undefined && attr !== false){
            if(e.keyCode == 9){
                $('#ket').focus();
            }

        }
        
    });
});