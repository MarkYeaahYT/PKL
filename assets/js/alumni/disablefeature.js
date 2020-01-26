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
});