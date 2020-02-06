$(document).ready(function () {

    $('#btn_auth').on('click', function () {
        var user = $('#username').val();
        var pass = $('#password').val();

        $.ajax({
            type: "POST",
            url: "/alfabank/anggaran/auth",
            data: {
                username: user,
                password: pass
            },
            dataType: "JSON",
            success: function (response) {
                if(response.status == "fail"){
                    alert("Login Fail")
                }else{
                    response.forEach(element => {
                        window.location.href = "/alfabank/anggaran/";

                    });
                }
            }
        });
    });
});