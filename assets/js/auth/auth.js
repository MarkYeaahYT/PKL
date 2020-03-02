$(document).ready(function () {
    
    $("#auth").click(function (e) { 
        var user = $("#username").val();
        var pass = $("#password").val();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/alfabank/auth/auth",
            data: {
                username: user,
                password: pass
            },
            dataType: "JSON",
            success: function (response) {
                if(response.status == "fail"){
                    alert("Failed");
                }else{
                    response.forEach(element => {
                        window.location.href = "/alfabank/";
                    });
                }
            }
        });
    });
});