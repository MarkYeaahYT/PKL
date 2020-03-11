$(document).ready(function () {

    document.title += " | User";

    
    var totalsaldo = 0
    var kastangan
    var atm
    var datenow = new Date().toISOString().slice(0,10);
    
    var total_harga_item = 0
    var total_harga_reject = 0
    var sisa = 0

    function renderrow(row, id, item, harga, metode, status) {
        var html = "";
        var htmlstatus = "";
        if(status == "Accept"){
            html = "<a title='Accepted by Admin' href='javascript:void(0)' class='btn status' ><i class='fa fa-check' aria-hidden='true'></i></a>"
            htmlstatus = "";
        }else if(status == "Reject"){
            total_harga_reject += parseInt(harga);
            html = "<a title='Rejected by Admin' href='javascript:void(0)' class='btn status' ><i class='fa fa-times' aria-hidden='true'></i></a>"
            htmlstatus = "class='rejected'";
        }else{
            html = "<a title='Unresponse' href='javascript:void(0)' class='btn btn-info status'> ? </a>"
            htmlstatus = "";

        }

        if(metode == "Transfer"){
            var rowtable = "<tr> "+
                            "<th scope='row'> "+row+"</th>"+
                            "<td> <input type='text' class='form-control item' data-id='"+id+"' value='"+item+"'> </td>"+
                            "<td>"+
                                "<select name='metode' class='from-control metode' >"+
                                    "<option value='Transfer'>Transfer</option>"+
                                    "<option value='Tunai'>Tunai</option>"+
                                "</select> "+
                            "</td>"+
                            "<td> <input type='number' class='form-control Rp' value='"+harga+"'> </td>"+
                            "<td "+htmlstatus+" > "+
                                html+
                            " </td>"+
                           "</tr>";

        }else if(metode == "Tunai"){
            var rowtable = "<tr> "+
                            "<th scope='row'> "+row+"</th>"+
                            "<td> <input type='text' class='form-control item' data-id='"+id+"' value='"+item+"'> </td>"+
                            "<td>"+
                                "<select name='metode' class='from-control metode' >"+
                                    "<option value='Tunai'>Tunai</option>"+
                                    "<option value='Transfer'>Transfer</option>"+
                                "</select> "+
                            "</td>"+
                            "<td> <input type='number' class='form-control Rp' value='"+harga+"'> </td>"+
                            "<td "+htmlstatus+" > "+
                                html+
                            " </td>"+
                           "</tr>";

        }
        return rowtable;
        
    }

    /**
	Add Item
	 */
    var row = 1;
    $('.add-item').on('click', function () {
        row += 1;
        var html = "<tr> "+
                        "<th scope='row'> "+row+"</th>"+
                        "<td> <input type='text' class='form-control item'> </td>"+
                        "<td>"+
                            "<select name='metode' class='from-control metode'>"+
                                "<option value='Tunai'>Tunai</option>"+
                                "<option value='Transfer'>Transfer</option>"+
                            "</select> "+
                        "</td>"+
                        "<td> <input type='number' class='form-control Rp'> </td>"+
                        "<td> "+
                            "<a title='Unresponse' href='javascript:void(0)' class='btn btn-info status'> ? </a>"+
                        " </td>"+
                    "</tr>";
        $('#mytable').find('tbody').append(html);
    });

    /**
     * 
     * 
     */
    $('.save_saldo').on('click', function () {
        kastangan = $('#kastangan').val();
        atm = $('#atm').val();
        totalsaldo = parseInt(kastangan) + parseInt(atm)
        $('.total_saldo').text("Rp "+totalsaldo.toLocaleString());
        $.ajax({
            type: "POST",
            url: "/alfabank/anggaran/save_dana",
            data: {
                datenow: datenow,
                atm: atm
            },
            dataType: "JSON",
            success: function (response) {
                sisa = totalsaldo - total_harga_item;
                $('.sisa').text("Rp "+sisa.toLocaleString());
            }
        });
    });

    /**
     * get data with each in table
     */
    $('.save-item').on('click', function () {
        var isfirst = true;
        total_harga_reject = 0
        total_harga_item = 0
        sisa = 0
        $('#mytable tr').each(function (index, element) {
            // element == this
            if (isfirst){
                isfirst = false
            }else{
                // $(this).find(".item").attr("data-status", "saved");
                var item = $(this).find(".item").val();
                var metode = $(this).find(".metode").val();
                var Rp = $(this).find(".Rp").val();
                var id_update = $(this).find(".item").data("id");
                var reject = $(this).find(".status").parent().hasClass("rejected");
                var action;
                total_harga_item += parseInt(Rp);
                
                if(reject){
                    total_harga_reject += parseInt(Rp);
                }
                
                // console.log(item)
                // console.log(metode)
                // console.log(Rp)
                if(id_update != undefined){
                    action = "update";
                    // console.log(action);
                    $.ajax({
                        type: "POST",
                        url: "/alfabank/anggaran/save_item",
                        data: {
                            datenow: datenow,
                            item: item,
                            metode: metode,
                            harga: Rp,
                            action: action,
                            id_update: id_update
                        },
                        dataType: "JSON",
                        success: function (response) {
                            
                        }
                    });
                }else{
                    action = "save";
                    // console.log(action);

                    $.ajax({
                        type: "POST",
                        url: "/alfabank/anggaran/save_item",
                        data: {
                            datenow: datenow,
                            item: item,
                            metode: metode,
                            harga: Rp,
                            action: action,
                            id_update: ""
                        },
                        dataType: "JSON",
                        success: function (response) {
                            /**
                             * set id to all so if edit it also become edit
                             */
                            var id;
                            $.ajax({
                                type: "POST",
                                url: "/alfabank/anggaran/show_item",
                                data: {
                                    datenow: datenow
                                },
                                dataType: "JSON",
                                success: function (response) {
                                    var i = 0;
                                    if(response.length > 1){
                                            $('#mytable tr').each(function (index, element) {
                                                // Clean all data then fresh again
                                                $(this).find(".item").removeAttr("data-id")
                                            });

                                            $("#mytable tr").each(function (index, element) {
                                                // element == this
                                                if(index > 0){
                                                    $(this).find(".item").attr("data-id", response[i].id);
                                                    i += 1;
                                                }
                                            });
                                    }else{
                                        id = response[0].id;
                                        $('#mytable tr').each(function (index, element) {
                                            // element == this
                                            // $(this).find(".item").attr("data-status", "saved")
                                            $(this).find(".item").attr("data-id", id)

                                        });
                                    }
                                }
                            });
                        }
                    });

                }
            }
        });
        //
        total_harga_item -= total_harga_reject;
        sisa = parseInt(totalsaldo) - parseInt(total_harga_item);
        $('.total_harga_item').text("Rp "+total_harga_item.toLocaleString());
        $('.sisa').text("Rp "+sisa.toLocaleString());

        /**
         * Save Sisa to database
         */
        $.ajax({
            type: "POST",
            url: "/alfabank/anggaran/save_sisa",
            data: {
                datenow: datenow,
                sisa: sisa,
                pengeluaran: total_harga_item
            },
            dataType: "JSON",
            success: function (response) {
                // console.log(response);
            }
        });
        // console.log(sisa);
    });

    /**
     * show data saldo
     * this is direct so will execute imediately
     */
    $.ajax({
        type: "POST",
        url: "/alfabank/anggaran/show_dana",
        data: {
            datenow: datenow
        },
        dataType: "JSON",
        success: function (response) {
            $('#kastangan').val(response.kas_tangan);
            $("#kastangan").attr("title", "kas tangan "+response.datekas);
            $('#atm').val(response.atm);
            kastangan = $('#kastangan').val();
            atm = $('#atm').val();
            totalsaldo = parseInt(kastangan) + parseInt(atm)
            $('.total_saldo').text("Rp "+totalsaldo.toLocaleString());

            // console.log(response);
        }
    });
    /**
     * End show
     */

     /**
      * show data item
      * this is direct so will execute immediately
      */
    
     $.ajax({
         type: "POST",
         url: "/alfabank/anggaran/show_item",
         data: {
             datenow: datenow
            },
            dataType: "JSON",
            success: function (response) {

                // console.log(response);
                
                if(response.length > 1){
                    // console.log("Yeah > 1");
                    var id;
                    var item;
                    var harga;
                    var metode;
                    var render;
                    var status;
                    var html;
                    var first = true;
                    response.forEach(element => {
                        if(first){
                            /**
                             *  Just handle in FIRST row
                             * why use each yeah because in table 
                             * ABSOLUTLY first row is title
                             */
                            id = element.id;
                            item = element.item;
                            harga = element.harga;
                            total_harga_item += parseInt(harga);
                            metode = element.metode;
                            status = element.status;
                            $('#mytable tr').each(function (index, element) {
                                
                                $(this).find(".item").val(item)
                                $(this).find(".Rp").val(harga)
                                $(this).find(".metode").val(metode)

                                $(this).find(".item").attr("data-id", id)

                                // Set status Feddback
                                if(status == "Accept"){
                                    html = "<i class='fa fa-check' aria-hidden='true'></i>";
                                    $(this).find(".status").html(html);
                                    $(this).find(".status").attr("title", "Accepted by Admin");
                                    // User Act
                                }else if(status == "Reject"){
                                    // User Act
                                    html = "<i class='fa fa-times' aria-hidden='true'></i>";
                                    $(this).find(".status").html(html);
                                    $(this).find(".status").attr("title", "Rejected by Admin");
                                    $(this).find(".status").parent().addClass("rejected");
                                    if(index == 1){
                                        total_harga_reject += parseInt(harga);
                                    }
                                    
                                }else{
                                    // User Act
                                    html = "?";
                                    $(this).find(".status").html(html);
                                    $(this).find(".status").attr("title", "Unresponse");
                                    $(this).find(".status").addClass("btn-info");

                                }
                                
                            });
                            first = false
                        }else{
                            id = element.id;
                            item = element.item;
                            harga = element.harga;
                            total_harga_item += parseInt(harga);
                            metode = element.metode;
                            status = element.status;
                            row += 1;
                            render = renderrow(row, id, item, harga, metode, status);
                            $('#mytable').find('tbody').append(render);
    
                        }
                    });
                    
                }else{
                    // console.log("No < 1");
                    var id;
                    var item;
                    var harga;
                    var metode;
                    var status
                    var render;
                    // console.log("Y F");
                    id = response[0].id;
                    item = response[0].item;
                    harga = response[0].harga;
                    total_harga_item += parseInt(harga);
                    metode = response[0].metode;
                    status = response[0].status;
                    // console.log(id);
                    // console.log(item);
                    // console.log(harga);
                    // console.log(metode);

                    if(id != ""){
                        if(status == "Reject"){
                            total_harga_reject += parseInt(harga);
                        }
                        $('#mytable tr').each(function (index, element) {
                            $(this).find(".item").val(item)
                            $(this).find(".Rp").val(harga)
                            $(this).find(".metode").val(metode)
    
                            $(this).find(".item").attr("data-id", id)
                            // $(this).find(".status").html("?");
                            // $(this).find(".status").attr("title", "Unresponse");
                            // $(this).find(".status").addClass("btn-info");

                            if(status == "Accept"){
                                $(this).find(".status").html("<i class='fa fa-check' aria-hidden='true'></i>");
                                $(this).find(".status").attr("title", "Accepted by Admin");
                            }else if(status == "Reject"){
                                $(this).find(".status").html("<i class='fa fa-times' aria-hidden='true'></i>");
                                $(this).find(".status").attr("title", "Rejected by Admin");
                                $(this).find(".status").parent().addClass("rejected");
                            }else{
                                $(this).find(".status").html("?");
                                $(this).find(".status").attr("title", "Unresponse");
                                $(this).find(".status").addClass("btn-info");
                            }
                        });
                    }else{
                        $('#mytable tr').each(function (index, element) {
                            $(this).find(".item").val(item)
                            $(this).find(".Rp").val(harga)
                            $(this).find(".metode").val(metode)
    
                            // $(this).find(".item").attr("data-id", id)
                            $(this).find(".status").html("?");
                            $(this).find(".status").attr("title", "Unresponse");
                            $(this).find(".status").addClass("btn-info");
                        });

                    }
                }

                // 
                total_harga_item -= total_harga_reject;
                sisa = totalsaldo - total_harga_item;
                // console.log(sisa)
                $('.total_harga_item').text("Rp "+total_harga_item.toLocaleString());
                $('.sisa').text("Rp "+sisa.toLocaleString());
                
         }
     });

    //   End Show Item

});