var interval = 20000;  // 1000 = 1 second, 3000 = 3 seconds
realtime();
function realtime() {
    $.ajax({
            type: 'POST',
            url: '/alfabank/welcome/realtime',
            // data: $(this).serialize(),
            data: '',
            cache: false,
            dataType: 'JSON',
            success: function (data) {
                $('#jnormal').html(data.jnormal);
                $('#jrusak').html(data.jrusak);
                $('#jbarang').html(data.jbarang);
                $('#tjual').html(data.tjual);
                
            },
            complete: function (data) {
                    // Schedule the next
                    setTimeout(realtime, interval);
            }
    });
}


setTimeout(realtime, interval);
