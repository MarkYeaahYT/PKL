$(document).ready(function () {
    
    var totalsaldo = 0
    var kastangan
    var atm
    var datenow = new Date().toISOString().slice(0,10);
    
    var total_harga_item = 0
    var sisa = 0

    function renderrow(row, id, item, harga, metode) {
        if(metode == "Transfer"){
            var rowtable = "<tr> "+
                            "<th scope='row'> "+row+"</th>"+
                            "<td> <input type='text' class='form-control item' data-status='saved' data-id='"+id+"' value='"+item+"'> </td>"+
                            "<td>"+
                                "<select name='metode' class='from-control metode' >"+
                                    "<option value='Transfer'>Transfer</option>"+
                                    "<option value='Tunai'>Tunai</option>"+
                                "</select> "+
                            "</td>"+
                            "<td> <input type='number' class='form-control Rp' value='"+harga+"'> </td>"+
                            "<td> "+
                                "<a title='Accept' href='javascript:void(0)' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></a>"+
                                "<a title='Reject' href='javascript:void(0)' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></a>"+
                            " </td>"+
                           "</tr>";

        }else if(metode == "Tunai"){
            var rowtable = "<tr> "+
                            "<th scope='row'> "+row+"</th>"+
                            "<td> <input type='text' class='form-control item' data-status='saved' data-id='"+id+"' value='"+item+"'> </td>"+
                            "<td>"+
                                "<select name='metode' class='from-control metode' >"+
                                    "<option value='Tunai'>Tunai</option>"+
                                    "<option value='Transfer'>Transfer</option>"+
                                "</select> "+
                            "</td>"+
                            "<td> <input type='number' class='form-control Rp' value='"+harga+"'> </td>"+
                            "<td> "+
                                "<a title='Accept' href='javascript:void(0)' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></a>"+
                                "<a title='Reject' href='javascript:void(0)' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></a>"+
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
                            "<a title='Accept' href='javascript:void(0)' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></a>"+
                            "<a title='Reject' href='javascript:void(0)' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></a>"+
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
                var action;
                total_harga_item += parseInt(Rp);
                
                // console.log(item)
                // console.log(metode)
                // console.log(Rp)
                if(id_update != undefined){
                    action = "update";
                    console.log(action);
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
                    console.log(action);

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
                                    if(response.length > 1){
                                        response.forEach(element => {
                                            id = element.id;
                                            
                                            $('#mytable tr').each(function (index, element) {
                                            
                                                $(this).find(".item").attr("data-status", "saved")
                                                $(this).find(".item").attr("data-id", id)
                                            });
                                        });
                                    }else{
                                        id = response[0].id;
                                        $('#mytable tr').each(function (index, element) {
                                            // element == this
                                            $(this).find(".item").attr("data-status", "saved")
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
        sisa = parseInt(totalsaldo) - parseInt(total_harga_item);
        $('.total_harga_item').text("Rp "+total_harga_item.toLocaleString());
        $('.sisa').text("Rp "+sisa.toLocaleString());
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
                    var first = true;
                    response.forEach(element => {
                        if(first){
                            id = element.id;
                            item = element.item;
                            harga = element.harga;
                            total_harga_item += parseInt(harga);
                            metode = element.metode;
                            $('#mytable tr').each(function (index, element) {
                                $(this).find(".item").val(item)
                                $(this).find(".Rp").val(harga)
                                $(this).find(".metode").val(metode)

                                $(this).find(".item").attr("data-status", "saved")
                                $(this).find(".item").attr("data-id", id)
                                
                            });
                            first = false
                        }else{
                            id = element.id;
                            item = element.item;
                            harga = element.harga;
                            total_harga_item += parseInt(harga);
                            metode = element.metode;
                            row += 1;
                            render = renderrow(row, id, item, harga, metode);
                            $('#mytable').find('tbody').append(render);
    
                        }
                    });
                    
                }else{
                    // console.log("No < 1");
                    var id;
                    var item;
                    var harga;
                    var metode;
                    var render;
                    // console.log("Y F");
                    id = response[0].id;
                    item = response[0].item;
                    harga = response[0].harga;
                    total_harga_item += parseInt(harga);
                    metode = response[0].metode;
                    // console.log(id);
                    // console.log(item);
                    // console.log(harga);
                    // console.log(metode);
                    $('#mytable tr').each(function (index, element) {
                        $(this).find(".item").val(item)
                        $(this).find(".Rp").val(harga)
                        $(this).find(".metode").val(metode)

                        $(this).find(".item").attr("data-status", "saved")
                        $(this).find(".item").attr("data-id", id)
                        
                    });
                }

                // 
                sisa = totalsaldo - total_harga_item;
                $('.total_harga_item').text("Rp "+total_harga_item.toLocaleString());
                $('.sisa').text("Rp "+sisa.toLocaleString());
                
         }
     });

    //   End Show Item

});