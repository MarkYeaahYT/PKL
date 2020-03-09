$(document).ready(function () {

    /**
     * Handle Inventory
     * Upload
     */

    var id;
    $("#inventory").find(".myicon").click(function (param) {
        $("#FileUpload1").click();
        id = "1";
    });
    
    $("#FileUpload1").change(function (e) { 
        e.preventDefault();
        var fd = new FormData();
        var files = $('#FileUpload1')[0].files[0];
        fd.append('file', files);
        fd.append('id', id);

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/upload",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                var imgtag = $("#inventory").find(".myicon");
                imgtag.attr("src", "/alfabank/uploads/"+response);
            }
        });
    });

    /**
     * Handle Data Alumni
     * Upload
     */
    $("#profile").find(".myicon").click(function (param) {
        $("#FileUpload2").click();
        id = "2";
    });
    
    $("#FileUpload2").change(function (e) { 
        e.preventDefault();
        var fd = new FormData();
        var files = $('#FileUpload2')[0].files[0];
        fd.append('file', files);
        fd.append('id', id);

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/upload",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                var imgtag = $("#profile").find(".myicon");
                imgtag.attr("src", "/alfabank/uploads/"+response);
            }
        });
    });

    /**
     * Handle Anggaran
     * Upload
     */
    $("#contact").find(".myicon").click(function (param) {
        $("#FileUpload3").click();
        id = "3";
    });
    
    $("#FileUpload3").change(function (e) { 
        e.preventDefault();
        var fd = new FormData();
        var files = $('#FileUpload3')[0].files[0];
        fd.append('file', files);
        fd.append('id', id);

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/upload",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                var imgtag = $("#contact").find(".myicon");
                imgtag.attr("src", "/alfabank/uploads/"+response);
            }
        });
    });

    /**
     * Handle Marketing
     * Upload
     */
    $("#marketing").find(".myicon").click(function (param) {
        $("#FileUpload4").click();
        id = "4";
    });
    
    $("#FileUpload4").change(function (e) { 
        e.preventDefault();
        var fd = new FormData();
        var files = $('#FileUpload4')[0].files[0];
        fd.append('file', files);
        fd.append('id', id);

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/upload",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                var imgtag = $("#marketing").find(".myicon");
                imgtag.attr("src", "/alfabank/uploads/"+response);
            }
        });
    });

    ///////////////////////////

    /**
     * Handle Save Appname
     */
    $(".save").click(function (e) { 
        e.preventDefault();
        var id = $(this).data("id");
        var appname;
        if (id == "1"){
            appname = $("#iinventory").val();
            iicode = $("#iicode").val();
            $.ajax({
                type: "POST",
                url: "/alfabank/profile/save",
                data: {
                    appname: appname,
                    iicode: iicode,
                    id: id
                },
                dataType: "JSON",
                success: function (response) {
                    $("#iinventory").val(response);
                }
            });
        }else if(id == "2"){
            appname = $("#idalumni").val();
            $.ajax({
                type: "POST",
                url: "/alfabank/profile/save",
                data: {
                    appname: appname,
                    id: id
                },
                dataType: "JSON",
                success: function (response) {
                    $("#idalumni").val(response);
                }
            });
            
        }else if(id == "3"){
            appname = $("#ianggaran").val();
            $.ajax({
                type: "POST",
                url: "/alfabank/profile/save",
                data: {
                    appname: appname,
                    id: id
                },
                dataType: "JSON",
                success: function (response) {
                    $("#ianggaran").val(response);
                }
            });
            
        }else if(id == "4"){
            appname = $("#imarketing").val();
            $.ajax({
                type: "POST",
                url: "/alfabank/profile/save",
                data: {
                    appname: appname,
                    id: id
                },
                dataType: "JSON",
                success: function (response) {
                    $("#imarketing").val(response);
                }
            });

        }
        
    });

    ///////////////////////////////////

    /**
     * Set Logo And Appname
     * this is direct so after reload this is will executed
     */
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/dataprofile",
        data: "",
        dataType: "JSON",
        success: function (response) {
            /**
             * In inventory
             */
            $("#inventory").find(".myicon").attr("src", "/alfabank/uploads/"+response[0].logo);
            $("#iinventory").val(response[0].app);

            /**
             * In Data Alumni
             */
            $("#profile").find(".myicon").attr("src", "/alfabank/uploads/"+response[1].logo);
            $("#idalumni").val(response[1].app);

            /**
             * In Anggaran
             */
            $("#contact").find(".myicon").attr("src", "/alfabank/uploads/"+response[2].logo);
            $("#ianggaran").val(response[2].app);

            /**
             * In Marketing
             */
            $("#marketing").find(".myicon").attr("src", "/alfabank/uploads/"+response[3].logo);
            $("#imarketing").val(response[3].app);

        }
    });

    /////////////////////////
    /**
     * Save Home Profile
     */
    $(".savehome").click(function (e) { 
        e.preventDefault();
        var id = $(this).data("id");
        var ishome = true;
        var title = $("#titlehome").val();
        var alamat = $("#alamat").val();
        var tlp = $("#tlp").val();
        $.ajax({
            type: "POST",
            url: "/alfabank/profile/save",
            data: {
                id: id,
                ishome: ishome,
                title: title,
                alamat: alamat,
                tlp: tlp
            },
            dataType: "JSON",
            success: function (response) {
                
            }
        });
    });

    /**
     * Set data in Home profile
     */
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/dataprofile",
        data: {
            ishome: true,
        },
        dataType: "JSON",
        success: function (response) {
            $("#titlehome").val(response[0].title);
            $("#alamat").val(response[0].alamat);
            $("#tlp").val(response[0].tlp);
        }
    });

    /**
     * Uploda Image in home
     */
    $("#home").find("img").click(function () {
        $("#filehome").click();
    });

    $("#filehome").change(function (e) { 
        e.preventDefault();
        var fd = new FormData();
        var files = $("#filehome")[0].files[0];
        fd.append('file', files);
        fd.append('ishome', true);

        $.ajax({
            type: "POST",
            url: "/alfabank/profile/upload",
            processData: false,
            contentType: false,
            data: fd,
            dataType: "JSON",
            success: function (response) {
                $("#home").find("img").attr("src", "/alfabank/uploads/"+response);
            }
        });
    });

    /**
     * Set image to home
     */
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/dataprofile",
        data: {
            ishome: true
        },
        dataType: "JSON",
        success: function (response) {
            $("#home").find("img").attr("src", "/alfabank/uploads/"+response[0].logo);
            
        }
    });

    /**
     * Set Inventory Code
     */
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/geticode",
        data: "",
        dataType: "JSON",
        success: function (response) {
            $("#iicode").val(response[0].code);
        }
    });
});