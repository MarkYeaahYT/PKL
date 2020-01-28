
    <div class="border pr-4">
    <!-- <div class="container border"> -->
        <div class="pl-4 row bg-light">
            <h3 id="param" class="display-7 text-primary p-3"></h3>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="mytable">
                    <thead>
                        <tr class="bg-light">
                            <th>No</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>No Tlp</th>
                            <th>Program</th>
                            <th>Jurusan</th>
                            <th>Tahun Lulus</th>
                            <th>Status</th>
                            <th>Mulai Tanggal</th>
                            <th>Jabatan Pekerjaan</th>
                            <th>Gaji Pertama</th>
                            <th>Perusahaan Penerima</th>
                            <th>Alamat Perusahaan</th>
                            <th>No Tlp</th>
                            <th>Ket</th>
                            <th>Action</th>
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

<script>
    var url_str = window.location.href;
    var url = new URL(url_str);
    var status = url.searchParams.get('status');
    var program = url.searchParams.get('program');
    var param = "";

    if(status != 'null'){
        // param += "status=";
        param = status;
    }else if(program != 'null'){
        // param += "program=";
        param = program;
    }

    if(param == "sb"){
        $('#param').text("Sudah Bekerja");
    }else if(param == "bb"){
        $('#param').text("Belum Bekerja");
    }else if(param == "thn"){
        $('#param').text("Program 1 Tahun");
    }else if(param == "bln"){
        $('#param').text("Profesi 6 Bulan");
    }else if(param == "itf"){
        $('#param').text("Intensif");
    }


    var table = $('#mytable').DataTable({
        ajax: {
            url: '/alfabank/alumni/filter_xhr?param='+param,
            dataSrc: ''
        },
        columns: [
            {data: 'id'},
            {data: 'nama'},
            {render: function(data, type, row){
                return row.te_lahir+" "+row.ta_lahir;
            }},
            {data: 'alamat'},
            {data: 'no_hp'},
            {data: 'program'},
            {data: 'jurusan'},
            {data: 'tahun_lulus'},
            {data: 'status'},
            {data: 'mulai_tanggal'},
            {data: 'posisi_pekerjaan'},
            {render: function(data, type, row){
                return 'Rp '+row.gaji_pertama;
            }},
            {data: 'perusahaan_penerima'},
            {data: 'alamat_perusahaan'},
            {data: 'no_tlp_perusahaan'},
            {data: 'ket'},
            {render: function(data, type, row){
                return '<a href="javascript:void(0);" class="btn btn-info item-edit"'+
                        'data-nama="'+row.nama+
                        '"data-id="'+row.id+
                        '"data-te_lahir="'+row.te_lahir+
                        '"data-ta_lahir="'+row.ta_lahir+
                        '"data-alamat="'+row.alamat+
                        '"data-program="'+row.program+
                        '"data-jurusan="'+row.jurusan+
                        '"data-tahun_lulus="'+row.tahun_lulus+
                        '"data-status="'+row.status+
                        '"data-mulai_tanggal="'+row.mulai_tanggal+
                        '"data-posisi_pekerjaan="'+row.posisi_pekerjaan+
                        '"data-perusahaan_penerima="'+row.perusahaan_penerima+
                        '"data-alamat_perusahaan="'+row.alamat_perusahaan+
                        '"data-no_hp="'+row.no_hp+
                        '"data-ket="'+row.ket+
                        '"data-no_tlp_perusahaan="'+row.no_tlp_perusahaan+
                        '"data-gaji_pertama="'+row.gaji_pertama+
                        '" >Edit</a>'+
                        '<a href="javascript:void(0);" class="btn btn-danger item-del" data-id="'+row.id+'">Del</a>'
            }}
        ]
    });
     table.on('order.dt search.dt', function(){
         table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) { 
             cell.innerHTML = i + 1;
          });
    })
</script>
