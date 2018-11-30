<!DOCTYPE html>

<html>

	<head>
		<style>
		#first{
			border: 1px solid red;
			border-radius: 8px;
			display: inline-flex;
			width: 270px;
			height: 75px;
			padding: 1px;
			margin: 7px;
		}
		#ffirst{
			display: inline-block;
		}
		img {
			width: 100px;
			height: 75px;
			border-radius: 8px;
		}
		div #big{
			margin: 4px;
			font-size: 15px;
			font-weight: 800;
		}	
		div #small{
			margin: 4px;
			font-size: 14px;
		}
		</style>

	</head>

	<body>

		<?php 

		$dbhost = 'localhost';
		$dbuser =  'root';
		$dbpassword = '';
		$link = mysqli_connect($dbhost,$dbuser,$dbpassword,'cars');
		if (!$link) {
		    die('Could not connect: ' . mysqli_error());
		}

		$sql="select * from cars";

		$query=mysqli_query($link,$sql);

		$num=mysqli_num_rows($query);

		for ($i=0; $i <$num ; $i++) { 
			$result=mysqli_fetch_array($query);
			$img=$result['url'];
			$maker=$result['maker'];

			$model=$result['model'];

			$price=$result['price'];

			$year = $result['year'];

			print '

			<div id = "first">
			<img src="'.$img.'">
			<div id = "ffirst">
				<div id="big">'.$maker.' '.$model.'</div>
				<div id ="small">'.$year.'</div>
				<div id ="small">'.$price.'</div>
			</div>
		</div>';
	}
		mysqli_close($link);
		?>

	</body>

</html>