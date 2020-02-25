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
                var Rp = parseInt(row.atm) ;
                return 'Rp '+Rp.toLocaleString();
             }},
            {render: function (data, type, row) {
                var Rp = parseInt(row.pengeluaran) ;
                return 'Rp '+Rp.toLocaleString();
             }},
            {render: function (data, type, row) {
                var Rp = parseInt(row.sisa) ;
                return 'Rp '+Rp.toLocaleString();
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
                    Rp += parseInt(element.pengeluaran);
                });
                $("#infofilter").text(text);
                $("#renderRp").text("Rp "+Rp.toLocaleString());
                location.href = "#infofilter";
                $("#renderRp").fadeOut();
                $("#renderRp").fadeIn();
            }
        });
        // endajax
    });
    
});