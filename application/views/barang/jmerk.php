<div class="col-md-10 pt-5 col-sm-8 border">
<div class="container border">
        <div class="row bg-light">
            <h3 class="display-7 p-3">Jumlah Merk</h3>
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
                            <th>Merk</th>
                            <th>Total Barang</th>
                            <th>Selengkapnya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach($res as $row): ?>
                        <?php $no++; ?>
                            <tr>
                                <td> <?php echo $no; ?> </td>
                                <td> <?php echo $row->merk; ?> </td>
                                <td> <?php echo $row->count; ?> </td>
                                <td><a href="<? echo base_url('welcome/gbmerk?merk='.$row->merk); ?>">Click</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12"> 
                <nav aria-label="Page Navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a href="" class="page-link">1</a></li>
                        <li class="page-item"><a href="" class="page-link">2</a></li>
                        <li class="page-item"><a href="" class="page-link">3</a></li>
                        <li class="page-item">
                            <a href="" class="page-link" aria-label="Next">
                                <span>&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>

<script>
    $('#mytable').DataTable();
</script>