<div class="border p-2">
    <div class="container-fluid border">
        <div class="pl-4 row bg-light">
            <p>
                <a href="#"><i class="fas fa-angle-double-right"></i> home</a>
            </p>
        </div>
        <hr>
        <div class="container">
			<div class="mydate">
				<p class="text-dark datenow"></p>
			</div>

			<br>
			<input type="hidden" name="kastangan_date" id="kastangan_date">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kas Tangan</th>
                    <th scope="col">ATM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><input id="kastangan" type="number" class="form-control"></td>
                    <td><input id="atm" type="number" class="form-control" placeholder="ex: 1000000"></td>
                  </tr>
                  
                </tbody>
            </table>
            <div class="row d-block p-4">
                <div class="float-left">
                    <p class="text-dark">Total</p>
                </div>
                <div class="float-right">
					<button class="btn btn-success save_saldo">Save</button>
                    <p class="text-dark total_saldo">Rp </p>
                </div>
            </div>

            <!-- Second Table -->

            <table class="table" id="mytable">
              	<thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Item</th>
						<th scope="col">Metode</th>
						<th scope="col">Rp</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td> <input type="text" class="form-control item"> </td>
						<td> 
							<select name="metode" class="from-control metode">
								<option value="Tunai">Tunai</option>
								<option value="Transfer">Transfer</option>
							</select> 
						</td>
						<td> <input type="number" class="form-control Rp"> </td>
						<td> 
							<a href="javascript:void(0)" class="btn status">  </a>
						</td>
					</tr>
				</tbody>
            </table>
			<div class="row d-block p-4">
                <div class="float-left">
					<br>
					<br>
					<p class="text-dark">Total Tunai</p>
					<p class="text-dark">Total Transfer</p>
					<p class="text-info">Sisa Tunai</p>
                    
                </div>
                <div class="float-right">
                    <button class="save-item btn btn-success"> Save </button>
                    <button class="add-item btn btn-success"> <i class="fas fa-plus"></i> </button>
					<br>
					<br>
                    <p class="text-dark total_harga_item">Rp </p>
                    <p class="text-dark total_transfer">Rp </p>
                    <p class="text-info sisa">Rp </p>

                </div>
            </div>
        </div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<hr>
    </div>
	<style>
		.mydate{
			border-left: 7px solid blue;
			border-radius: 5px;
			background: lightblue;
			padding: 5px;
		}

		.mydate > p{
			margin: 0px;
		}
	</style>
	<script>
		$(document).ready(function () {
			var datenow = new Date().toISOString().slice(0,10);
			$('.datenow').text(datenow);

		});
	</script>
	<script src="<?php echo base_url('assets/js/anggaran/userhome.js') ?>"></script>
</div>