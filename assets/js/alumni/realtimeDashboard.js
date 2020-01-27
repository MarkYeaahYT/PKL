$(document).ready(function () {
    var interval = 20000;  // 1000 = 1 second, 3000 = 3 seconds
    realtime();
    function realtime() {
        $.ajax({
                type: 'POST',
                url: '/alfabank/alumni/realtime',
                // data: $(this).serialize(),
                data: '',
                cache: false,
                dataType: 'JSON',
                success: function (data) {
                    $('#jum_siswa').html(data.jswa);
                    $('#j_sbekerja').html(data.jsb);
                    $('#j_bbekerja').html(data.jbb);
                    $('#j_thn').html(data.jthn);
                    $('#j_bln').html(data.jbln);
                    $('#j_itf').html(data.jitf);

                },
                complete: function (data) {
                        // Schedule the next
                        setTimeout(realtime, interval);
                }
        });
    }


    setTimeout(realtime, interval);
});