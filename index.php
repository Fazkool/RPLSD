<html>
	<head>
	</head>

	<?php 
		include "connect.php"; 
		$result = mysql_query("SELECT * FROM restaurant");
	?>

	<table>
		<div>Daftar Restoran Sebandung</div>
		<?php 
				while ($row = mysql_fetch_assoc($result)){
			?>
		<tr>
			<td>
				<img src="<?php echo $row['gambar'] ?>" height="200" width = "200">
			</td>
			<td>
				<div>Nama : <?php echo $row['nama'] ?></div>
				<div>Deskripsi : <?php echo $row['deskripsi'] ?></div>
				<div>Alamat : <?php echo $row['alamat'] ?></div>
				<?php if(isset($promo['row'])) {?><div>Promo : <?php echo $row['promo'] ?></div> <?php } ?>

				<?php
					//SEARCHING RATING
					$rate_result = mysql_query("SELECT AVG(rate) AS rate FROM `testimon` WHERE resto_id='". $row['id'] ."'");
					$rate_row = mysql_fetch_assoc($rate_result);
					if ($rate_row['rate']){
						$rate = $rate_row['rate'];
					}else{
						$rate = 0;
					}
				?>
				<div>Rating : <?php echo $rate; ?>/10</div>
				<div><a href="testimoni.php?id=<?php echo $row['id'] ?>">Rate now!</a> <a href="see_testimony.php?id=<?php echo $row['id'] ?>">See testimony</a></div>
				<div></div>
 			</td>
		</tr>
		<?php
			}
		?>
	</table>
</html>