<div class="container-fluid">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h3>Lengkapi Data</h3>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<form action="input_dtdiri.php" method="POST">
				<div class="panel panel-info">
					<div class="panel-body">
						<div class="form-grup">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required autocomplete="off" autofocus>
						</div>
						<div class="form-grup">
							<label>NISN</label>
							<input type="text" class="form-control" name="nisn" placeholder="123456789" required autocomplete="off">
						</div>
						<div class="form-grup">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required autocomplete="off">
						</div>
						<div class="form-grup">
							<label>Asal Sekolah</label>
							<input type="text" class="form-control" name="smp" placeholder="contoh : SMUN 1 Karawang" required autocomplete="off">
						</div>
						<div class="form-grup">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggallahir" required autocomplete="off">
						</div>
						<div>
							<label>Jenis Kelamin</label>
							<div class="radio">
								<label><input type="radio" name="jk" value="L">Laki-laki</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="jk" value="P">Perempuan</label>
							</div>
						</div>
						<div class="form-grup">
							<label>Agama</label>
							<select class="form-control" id="agama" name="agama">
								<option value="islam">Islam</option>
								<option value="kristen">Kristen</option>
								<option value="hindu">Hindu</option>
								<option value="budha">Budha</option>
							</select>
						</div>
						<div class="form-grup" style="margin-top:10px">
							<input type="submit" class="btn btn-info">
						</div>
					</div>
			</form>
		</div>
	</div>
	<div class="col-sm-4">
		<div id="myDIV">
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">Edit / Update Nilai <div style="float:right">
				</div>
				<div class="panel-body">
					<script type="text/javascript">
						function myFunction() {

							var x = document.getElementById("myDIV");
							if (x.style.display === "none") {
								x.style.display = "block";
							} else {
								x.style.display = "none";
							}
						}
					</script>
					<form action="ceknisn.php" method="POST">
						<div class="form-grup">
							<label>Cek NISN Anda</label>
							<select class="form-control" id="nisn_cek" name="nisn_cek">
								<!-- <option value="islam">Islam</option> -->
								<?php
								include 'koneksi.php';
								$data = mysqli_query($konek, "SELECT * FROM data_diri");
								while ($new_data = mysqli_fetch_array($data)) { ?>
									<option value="<?php echo $new_data[0] ?>"><?php echo $new_data[0] . "-" . $new_data[1] ?></option>
								<?php	}
								?>
							</select>
						</div>
						<div class="form-grup" style="margin-top:10px">
							<input type="submit" class="btn btn-info">
						</div>
					</form>
				</div>
			</div>
			<br>
			<hr>
			<div id="info_nilai">
				<div class="panel panel-info">
					<div class="panel-heading">Lihat Nilai<div style="float:right">
						</div>
					</div>
					<script type="text/javascript">
						function info() {

							var x = document.getElementById("info_nilai");
							if (x.style.display === "none") {
								x.style.display = "block";
							} else {
								x.style.display = "none";
							}
						}
					</script>
					<div class="panel-body">
						Masukkan NISN Anda
						<form action="#" method="POST">
							<input type="text" class="form-control" name="nisn" required autocomplete="off"><br />
							<input type="submit" class="btn btn-info">
						</form>
						<div class="panel panel-info">
							<div class="panel-body">
								<?php
								include 'koneksi.php';
								@$id = $_POST['nisn'];
								$data = mysqli_query($konek, "SELECT * FROM nilai where nisn=$id");
								echo "<ul>";
								while (@$newdat = mysqli_fetch_array($data)) {
									echo '<li><a href="index.php?halaman=dataku&id=' . $newdat[0] . '">' . 'NISN ' . $newdat['nisn'] . ' Pada Tanggal:' . $newdat[8] . '</a></li>';
								}
								echo "</ul>";
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-1">

			</div>
		</div>
	</div>