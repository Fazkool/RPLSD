<html>
	<head>
	</head>

	<body>

		<?php
			include "connect.php"; 
			$result = mysql_query("SELECT * FROM restaurant WHERE id = ". $_GET['id']);
			$resto  = mysql_fetch_assoc($result);
		
			$testimoni_result = mysql_query("SELECT * FROM testimon WHERE resto_id = ". $_GET['id']);	
		?>

		<img src="<?php echo $resto['gambar'] ?>" height="200" width = "200">
		<div><?php echo $resto['nama'] ?></div>
		<?php
			$i = 1;
			while($testimoni = mysql_fetch_assoc($testimoni_result)){
		?>
		<div>#<?php echo $i ?></div>
		<div>Rating : <?php echo $testimoni['rate'] ?>/10</div>
		<div>Testimoni : <?php echo $testimoni['testi'] ?></div>
		<br>
		<?php
				$i++;
			}
			if($i == 1){
				echo '<div>Be The First to testify!';
			}
		?>

	</body>
</html>