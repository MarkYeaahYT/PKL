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
            <div class="form-inline">
                <div class="col-auto">
                    <label for="from">From</label>
                    <input type="date" class="form-control" id="from">
                </div>
                <div class="col-auto">
                    <label for="to">To</label>
                    <input type="date" class="form-control" id="to">
                </div>
                <div class="col-auto pt-4">
                    <!-- <label for="to">F</label> -->
                    <input type="button" class="btn btn-info" id="btn_filter" value="Filter">
                </div>
            </div>
    </div>
    <br>
    <div class="container-fluid">
        <table class="table table-striped" id="mytable">
            <thead>
                <tr class="bg-light">
                    <td>No</td>
                    <td>Date</td>
                    <td>Atm</td>
                    <td>Pengeluaran Tunai</td>
                    <td>Pengeluaran Transfer</td>
                    <td>Sisa</td>
                </tr>
            </thead>
            <tbody>
                <!-- JS -->
            </tbody>
        </table>
    </div>
    <div class="container d-block pb-5">
        <br>
        <div>
            <div class="float-left">
                <h6 class="text-info">Total Tunai</h6>
                <h5 id="ttunai"></h5>
                <h6 class="text-info">Total Transfer</h6>
                <h5 id="ttransfer"></h5>
            </div>
            <div class="float-right">
                <h6 class="text-info" id="infofilter"></h6>
                <h6 class="text-info txttunai"></h6>
                <h5 id="renderRp"></h5>
                <h6 class="text-info txttransfer"></h6>
                <h5 id="renderRp_transfer"></h5>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <script src="<?php echo base_url("assets/js/anggaran/userdata.js"); ?>"></script>
</div>