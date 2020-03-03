$(document).ready(function () {
    /**
     * Handle add, edit, del button
     */
    $("#tambah").click(function (e) { 
        e.preventDefault();
        $("#myModal").modal("show");
    });

    $("#mytable").on("click", ".item-edit" ,function () {
        var id = $(this).data("id");
        var username = $(this).data("username");
        var password = $(this).data("password");
        var role = $(this).data("role");
        $("#id_edit").val(id);
        $("#username_edit").val(username);
        $("#password_edit").val(password);
        $("#akses_edit").val(role);
        $("#Modal_Edit").modal("show");
    });

    $("#mytable").on("click", ".item-del" ,function () {
        var id = $(this).data("id");
        $("#id_del").val(id);
        $("#Modal_Delete").modal("show");
    });

    /**
     * Handle edd, edit, del
     * send to Server
     */
    $("#btn_add").click(function (e) { 
        e.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        var akses = $("#akses").val();

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/add",
            data: {
                username: username,
                password: password,
                role: akses
            },
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
            }
        });
    });

    $("#btn_delete").click(function (e) { 
        e.preventDefault();
        var id = $("#id_del").val();
        $.ajax({
            type: "POST",
            url: "/alfabank/profile/del",
            data: {
                id: id
            },
            dataType: "JSOn",
            success: function (response) {
                location.reload(true);
            }
        });
    });

    $("#btn_update").click(function (e) { 
        e.preventDefault();
        var id = $("#id_edit").val();
        var username = $("#username_edit").val();
        var password = $("#password_edit").val();
        var akses = $("#akses_edit").val();

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/edit",
            data: {
                id: id,
                username: username,
                password: password,
                role: akses
            },
            dataType: "JSON",
            success: function (response) {
                location.reload(true);
            }
        });
    });

    /**
     * handle password appearance
     */
    $("#mytable").on("click", ".pass",function () {
        var current = $(this).attr("type");
        $(this).removeAttr("type");
        if(current == "password"){
            $(this).attr("type", "text");
        }else if(current == "text"){
            $(this).attr("type", "password");
        }
    });
});