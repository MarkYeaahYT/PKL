<div class="border p2">
    <div class="container-fluid border">
        <div class="pl-4 row bg-light">
            <p>
                <a href="#"><i class="fas fa-angle-double-right"></i> data</a>
            </p>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <table class="table table-striped" id="mytable">
            <thead>
                <tr class="bg-light">
                    <td>No</td>
                    <td>Date</td>
                    <td>Atm</td>
                    <td>Pengeluaran</td>
                    <td>Sisa</td>
                </tr>
            </thead>
            <tbody>
                <!-- JS -->
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready(function () {
        document.title += " | Admin";
        var table = $('#mytable').DataTable({
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
        });

        // 
        table.on('order.dt search.dt', function(){
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
                cell.innerHTML = i + 1;
          });
    })
        
    });
    </script>
</div>