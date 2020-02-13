$(document).ready(function () {
    
    var totalsaldo = 0
    var kastangan
    var atm
	var datenow = new Date().toISOString().slice(0,10);

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
                            "<a href='javascript:void(0)' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></a>"+
                            "<a href='javascript:void(0)' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></a>"+
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
        $('.total_saldo').text("Rp "+totalsaldo);
        $.ajax({
            type: "POST",
            url: "/alfabank/anggaran/save_dana",
            data: {
                datenow: datenow,
                atm: atm
            },
            dataType: "JSON",
            success: function (response) {
                console.log(response)
                console.log("save saldo")
            }
        });
    });

    /**
     * get data with each in table
     */
    $('.save-item').on('click', function () {
        var isfirst = true;
        var total_harga_item = 0
        var sisa = 0
        $('#mytable tr').each(function (index, element) {
            // element == this
            if (isfirst){
                isfirst = false
            }else{
                var item = $(this).find(".item").val();
                var metode = $(this).find(".metode").val();
                var Rp = $(this).find(".Rp").val();
                total_harga_item += parseInt(Rp);
                // console.log(item)
                // console.log(metode)
                // console.log(Rp)
            }
        });
        // 
        sisa = parseInt(totalsaldo) - parseInt(total_harga_item);
        $('.total_harga_item').text("Rp "+total_harga_item);
        $('.sisa').text("Rp "+sisa);
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
            // console.log(response);
            kastangan = $('#kastangan').val();
            atm = $('#atm').val();
            totalsaldo = parseInt(kastangan) + parseInt(atm)
            $('.total_saldo').text("Rp "+totalsaldo);
        }
    });
    /**
     * End show
     */

});