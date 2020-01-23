$(document).ready(function () {
    /*******************
     * Add
     * Delete
     * Edit
     * *****************
     */


     /**
      * Handle Click Add
      */
    $('#btn_add').on('click', function () {
        /**
         * Get Data to variable
         */
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
        /**
         * END Get Data to variable
         */

        /**
         * Post Data Add
         */
        $.ajax({
            type: "POST",
            url: "/alfabank/alumni/add",
            data: {
                nama: nama,
                te_l: te_l,
                ta_l: ta_l,
                alamat: alamat,
                program: program,
                tahun_lulus: tahun_lulus,
                status: status,
                tanggal_mulai: tanggal_mulai,
                posisi_pekerjan: posisi_pekerjan,
                perusahaan_penerima: perusahaan_penerima,
                alamat_perusahaan: alamat_perusahaan,
                no_hp: no_hp,
                ket: ket
            },
            dataType: "JSON",
            success: function (response) {
               location.reload(true);
            }
        });
        /**
         * END Post Data Add
         */


        /**
         * Get Clear Data
         */
         $('#nama').val("");
         $('#te_l').val("");
         $('#ta_l').val("");
         $('#alamat').val("");
         $('#programplaceholder').val("");
         $('#tahun_lulus').val("");
         $('#status').val("");
         $('#tanggal_mulai').val("");
         $('#posisi_pekerjan').val("");
         $('#perusahaan_penerima').val("");
         $('#alamat_perusahaan').val();
         $('#no_hp').val("");
         $('#ket').val("");
        /**
         * END Get Clear Data
         */
    });
    /**
      * END Handle Click Add
      */

    //   handle button edit
    $('#mytable').on('click', '.item-edit', function () {
        var id = $(this).data('id');
        var nama_edit = $(this).data('nama');
        var te_l_edit = $(this).data('te_lahir');
        var ta_l_edit = $(this).data('ta_lahir');
        var alamat_edit = $(this).data('alamat');
        var program_edit = $(this).data('program');
        var jurusan_edit = $(this).data('jurusan');
        var tahun_lulus_edit = $(this).data('tahun_lulus');
        var status_edit = $(this).data('status');
        var m_tanggal_edit = $(this).data('mulai_tanggal');
        var p_pekerjaan_edit = $(this).data('posisi_pekerjaan');
        var per_penerima_edit = $(this).data('perusahaan_penerima');
        var al_perusahaan_edit = $(this).data('alamat_perusahaan');
        var no_hp_edit = $(this).data('no_hp');
        var ket_edit = $(this).data('ket');

        $('#id_edit').val(id);
        $('#nama_edit').val(nama_edit);
        $('#te_l_edit').val(te_l_edit);
        $('#ta_l_edit').val(ta_l_edit);
        $('#alamat_edit').val(alamat_edit);
        $('#programplaceholder_edit').val(program_edit+" > "+jurusan_edit);
        $('#tahun_lulus_edit').val(tahun_lulus_edit);
        $('#status_edit').val(status_edit);
        $('#tanggal_mulai_edit').val(m_tanggal_edit);
        $('#posisi_pekerjan_edit').val(p_pekerjaan_edit);
        $('#perusahaan_penerima_edit').val(per_penerima_edit);
        $('#alamat_perusahaan_edit').val(al_perusahaan_edit);
        $('#no_hp_edit').val(no_hp_edit);
        $('#ket_edit').val(ket_edit);

        $('#Modal_Edit').modal('show');
    });
    //   END handle button edit

    /**
     * Send edit to server
     */
    $('#btn_edit').on('click', function () {
        /**
         * Get Data to variable
         */
        var id_edit = $('#id_edit').val();
        var nama_edit = $('#nama_edit').val();
        var te_l_edit = $('#te_l_edit').val();
        var ta_l_edit = $('#ta_l_edit').val();
        var alamat_edit = $('#alamat_edit').val();
        var program_edit = $('#programplaceholder_edit').val();
        var tahun_lulus_edit = $('#tahun_lulus_edit').val();
        var status_edit = $('#status_edit').val();
        var tanggal_mulai_edit = $('#tanggal_mulai_edit').val();
        var posisi_pekerjan_edit = $('#posisi_pekerjan_edit').val();
        var perusahaan_penerima_edit = $('#perusahaan_penerima_edit').val();
        var alamat_perusahaan_edit = $('#alamat_perusahaan_edit').val();
        var no_hp_edit = $('#no_hp_edit').val();
        var ket_edit = $('#ket_edit').val();
        /**
         * END Get Data to variable
         */
        /**
         * Post Data Add
         */
        $.ajax({
            type: "POST",
            url: "/alfabank/alumni/edit",
            data: {
                id_edit: id_edit,
                nama_edit: nama_edit,
                te_l_edit: te_l_edit,
                ta_l_edit: ta_l_edit,
                alamat_edit: alamat_edit,
                program_edit: program_edit,
               tahun_lulus_edit:tahun_lulus_edit,
               status_edit:status_edit,
            },
            dataType: "POST",
            success: function (response) {
                
            }
        });
        /**
         * END Post Data Add
         */
    });
    /**
     * END Send edit to server
     */
});