$(document).ready(function () {
    document.title += " | User";
        
    var table = $("#mytable").DataTable({
        ajax: {
            url: "/alfabank/anggaran/show_data",
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'date'},
            {render: function (data, type, row) {
                if(row.atm != null){
                    var Rp = parseInt(row.atm) ;
                    return 'Rp '+Rp.toLocaleString();
                }else{
                    var Rp = 0;
                    return 'Rp '+Rp.toLocaleString();
                }
             }},
            {render: function (data, type, row) {
                if(row.pengeluaran != null){
                    var Rp = parseInt(row.pengeluaran) ;
                    return 'Rp '+Rp.toLocaleString();
                }else{
                    var Rp = 0;
                    return 'Rp '+Rp.toLocaleString();
                }
             }},
            {render: function (data, type, row) {
                if(row.pengeluaran_transfer != null){
                    var Rp = parseInt(row.pengeluaran_transfer) ;
                    return 'Rp '+Rp.toLocaleString();
                }else{
                    var Rp = 0;
                    return 'Rp '+Rp.toLocaleString();
                }
             }},
             {render: function (data, type, row) {
                if(row.sisa != null){
                    var Rp = parseInt(row.sisa) ;
                    return 'Rp '+Rp.toLocaleString();
                }else{
                    var Rp = 0;
                    return 'Rp '+Rp.toLocaleString();
                }
             }}
        ]
    })

    // 
    table.on('order.dt search.dt', function(){
        table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
            cell.innerHTML = i + 1;
        });
    })

    /**
     * Set Total Tunai & Transfer
     */
    var ttunai = 0;
    var ttransfer = 0;
    $.ajax({
        type: "GET",
        url: "/alfabank/anggaran/show_data",
        data: "",
        dataType: "JSON",
        success: function (response) {
            response.forEach(element => {
                if(element.pengeluaran != null){
                    ttunai += parseInt(element.pengeluaran);
                }

                if(element.pengeluaran_transfer != null){
                    ttransfer += parseInt(element.pengeluaran_transfer);
                }
            });
            
            $("#ttunai").text("Rp "+ttunai.toLocaleString());
            $("#ttransfer").text("Rp "+ttransfer.toLocaleString());
        }
    });

    /**
     * Handle Filter
     */

    
    // 
    
    $("#btn_filter").on("click", function () {
        $.fn.dataTableExt.afnFiltering.push(function (oSettings, aData, iDataIndex){ 
            var from = $("#from").val();
            var to = $("#to").val();
    
            var evalDate = aData[1];
            if(evalDate >= from && evalDate <= to){
                return true;
            }else{
                return false;
            }
        });
        table.draw();


        var from = $("#from").val();
        var to = $("#to").val();
        var text = "Pengeluaran "+from+" to "+to;

        from = from.replace(/-/g, "");
        to = to.replace(/-/g, "");
        var Rp = 0;
        var Rptransfer = 0;
        // ajax
        $.ajax({
            type: "POST",
            url: "/alfabank/anggaran/filter_data",
            data: {
                from: from,
                to: to
            },
            dataType: "JSON",
            success: function (response) {
                response.forEach(element => {
                    if(element.pengeluaran != null){
                        Rp += parseInt(element.pengeluaran);
                    }
                    if(element.pengeluaran_transfer != null){
                        Rptransfer += parseInt(element.pengeluaran_transfer);
                    }
                });
                $("#infofilter").text(text);
                $(".txttunai").text("Tunai");
                $(".txttransfer").text("Transfer");
                $("#renderRp").text("Rp "+Rp.toLocaleString());
                $("#renderRp_transfer").text("Rp "+Rptransfer.toLocaleString());
                location.href = "#infofilter";
                $("#renderRp").fadeOut();
                $("#renderRp").fadeIn();
                $("#renderRp_transfer").fadeOut();
                $("#renderRp_transfer").fadeIn();
            }
        });
        // endajax
    });
    
});