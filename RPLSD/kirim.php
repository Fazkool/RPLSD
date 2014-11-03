<html>
	<head>

	</head>

	<body>
		<form action="proseskirim.php" method="POST">
			<input type="hidden" name="id" id="id" value="1"></input>

			<label> Nama Lengkap </label>
			<input type="text" name="nama" id="nama"></input>
			<br>

			<label> Alamat </label>
			<input type="text" name="alamat" id="alamat"></input>
			<br>

			<label> Kotamadya </label>
			<select name = "kotamadya">
				<option value="bandung">Bandung</option>
			</select>
			<br>

			<label> Kelurahan </label>
			<select name = "kelurahan">
				<option value="sekejati">Sekejati</option>
			</select>
			<br>

			<label> Outlet Terdekat </label>
			<select name = "outlet">
				<option value="buahbatu">Buah Batu (24 Jam)</option>
			</select>
			<br>

			<label> Nomor Telepon </label>
			<input type="number" name="telepon" min="10" max="12"></input>
			<br>

			<label> Nomor Telepon Alternatif </label>
			<input type="number" name="teleponalt" min="10" max="12"></input>
			<br>

			<input type="submit"></input>
		</form>
	</body>
</html>