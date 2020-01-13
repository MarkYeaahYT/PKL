<div class="col-md-10 border pt-4 pr-4 col-sm-8">
    <div class="container border">
        <div class="row bg-light">
            <h3 class="display-7 p-3">Data Barang Terjual</h3>
        </div>
        <div class="row pt-4 pb-4">
            <div class="container">                
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>No Inventaris</th>
                            <!-- <th>Kondisi</th> -->
                            <th>Tanggal Jual</th>
                            <th>Harga Jual</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">
                        <!-- js process -->
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>
</div>

<script>
    // $('#mytable').DataTable()
    var table = $('#mytable').DataTable({
        ajax: {
            url: '/alfabank/jual/show',
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'no_inventaris'},
            {data: 'tanggal_jual'},
            {render: function(data, type, row){
                return 'Rp '+row.harga;
            }},
            {data: 'status'}
        ]
    });

    table.on('order.dt search.dt', function(){
        table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
            cell.innerHTML = i + 1;
         });
    })
</script>
