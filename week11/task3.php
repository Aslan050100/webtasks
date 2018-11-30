<!DOCTYPE html>

<html>

	<head>
		<style>
		* {
		 margin: 0px; padding: 0px;
		  }
		body {
			font-size: 120%;
			background: #F8F8FF;
		}
		#first{
			border: 1px solid red;
			border-radius: 8px;
			display: inline-flex;
			width: 270px;
			height: 85px;
			padding: 1px;
			margin: 7px;
		}
		#ffirst{
			display: inline-block;
		}
		img {
			width: 110px;
			height: 85px;
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
		
		.header {
			width: 40%;
			margin: 50px auto 0px;
			color: white;
			background: #5F9EA0;
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		form, .content {
			width: 40%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: white;
			border-radius: 0px 0px 10px 10px;
		}
		.input-group {
			margin: 10px 0px 10px 0px;
		}
		.input-group label {
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input {
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
		}
	</style>

	</head>

	<body>
		<div class="header">
			<h2>Admin Page</h2>	
		</div>
		<form method="post" action="task3.php">
			<div class="input-group">
				<label>Maker</label>
				<input type="text" name="maker" value="">
			</div>
			<div class="input-group">
				<label>Model</label>
				<input type="text" name="model" value="">
			</div>
			<div class="input-group">
				<label>Price</label>
				<input type="text" name="price">
			</div>
			<div class="input-group">
				<label>Year</label>
				<input type="text" name="year">
			</div>
			<div class="input-group">
				<label>Image(url)</label>
				<input type="text" name="url">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="add_new">Add new</button>
			</div>
	</form>

		<?php 
		session_start();

		$dbhost = 'localhost';
		$dbuser =  'root';
		$dbpassword = '';
		$link = mysqli_connect($dbhost,$dbuser,$dbpassword,'cars');
		if (!$link) {
		    die('Could not connect: ' . mysqli_error());
		}
			
			function addNew($imaker,$imodel,$iprice,$iyear,$iurl) {
			    $dbhost = 'localhost';
				$dbuser =  'root';
				$dbpassword = '';
				$link1 = mysqli_connect($dbhost,$dbuser,$dbpassword,'cars');
				if (!$link1) {
				    die('Could not connect: ' . mysqli_error());
				}
					$sqll = "INSERT INTO `cars`(`maker`,`model`,`price`,`year`,`url`) VALUES ('$imaker','$imodel','$iprice','$iyear','$iurl')";
					
				
					mysqli_query($link1,$sqll);
					mysqli_close($link1);
		}

				if (isset($_POST['maker']) && isset($_POST['model']) && isset($_POST['price'])&& isset($_POST['year'])&& isset($_POST['url'])) {
				    $result = addNew($_POST['maker'], $_POST['model'], $_POST['price'], $_POST['year'], $_POST['url']);
				}
			/*function delete($imaker,$imodel,$iprice,$iyear,$iurl) {
			    $dbhost = 'localhost';
				$dbuser =  'root';
				$dbpassword = '';
				$link1 = mysqli_connect($dbhost,$dbuser,$dbpassword,'cars');
				if (!$link1) {
				    die('Could not connect: ' . mysqli_error());
				}
					$sqll = "INSERT INTO `cars`(`maker`,`model`,`price`,`year`,`url`) VALUES ('$imaker','$imodel','$iprice','$iyear','$iurl')";
					echo $iyear;
					mysqli_query($link1,$sqll);
					mysqli_close($link1);
		}

				if (isset($_POST['maker']) && isset($_POST['model']) && isset($_POST['price'])&& isset($_POST['year'])&& isset($_POST['url'])) {
				    $result = addNew($_POST['maker'], $_POST['model'], $_POST['price'], $_POST['year'], $_POST['url']);
				}*/

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
				<a id="delete" href="">Delete</a>
			</div>
		</div>';
	}

		mysqli_close($link);
		?>


	</body>

</html>