<?php
$nisn = $_GET['nisn'];
?>
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3>Masukkan Nilai</h3>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<form action="index.php?halaman=proses&nisn=<?php echo  $nisn ?>" method="POST">

				<div class="form-grup">
					<label>NISN</label>
					<input type="text" class="form-control" value="<?php echo $nisn ?>" disabled>
					<input type="hidden" class="form-control" value="<?php echo $nisn ?>" name="nisn">
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-grup">
							<label>Fisika</label>
							<input type="text" class="form-control" placeholder="10-100" name="fisika" aria-autocomplete="OFF" autofocus required>
						</div>
						<div class="form-grup">
							<label>Biologi</label>
							<input type="text" class="form-control" placeholder="10-100" name="biologi" autofocus required>
						</div>
						<div class="form-grup">
							<label>Matematika</label>
							<input type="text" class="form-control" placeholder="10-100" name="matematika" autofocus required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-grup">
							<label>Sejarah</label>
							<input type="text" class="form-control" placeholder="10-100" name="sejarah" autofocus required>
						</div>
						<div class="form-grup">
							<label>Geografi</label>
							<input type="text" class="form-control" placeholder="10-100" name="geografi" autofocus required>
						</div>
						<div class="form-grup">
							<label>Bahasa Indonesia</label>
							<input type="text" class="form-control" placeholder="10-100" name="bi" autofocus required>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="y" name="cek">Pastikan Data yang Dimasukkan Sudah Benar</label>
						</div>
						<input type="submit" value="Kirim" class="btn btn-info" style="margin-top:20px">
					</div>
				</div>
			</form>
		</div>
		<br />
		<div class="col-sm-5"></div>
	</div>