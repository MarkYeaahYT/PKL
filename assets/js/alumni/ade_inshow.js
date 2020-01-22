$(document).ready(function () {
    /**
     * Add
     * Delete
     * Edit
     */
    $('#btn_add').on('click', function () {
        var nama = $('#nama').val();
        var te_l = $('#te_l').val();
        var ta_l = $('#ta_l').val();
        var alamat = $('#alamat').val();
        var program = $('#programplaceholder').val();
        var tahun_lulus = $('#tahun_lulus').val();
        var status = $('#status').val();
        var tanggal_mulai = $('#tanggal_mulai').val();
        var posisi_pekerjan = $('#posisi_pekerjan').val();
        var perusahaan_penerima = $('#perusahaan_penerima').val();
        var alamat_perusahaan = $('#alamat_perusahaan').val();
        var no_hp = $('#no_hp').val();
        var ket = $('#ket').val();

        $.ajax({
            type: "POST",
            url: "alfabank/alumni/add",
            data: {
                nama: nama,
                te_l: te_l,
                ta_l: ta_l,
                alamat: alamat,
                program: program,
               tahun_lulus:tahun_lulus,
               tahun_lulus:tahun_lulus,
            },
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    });
});