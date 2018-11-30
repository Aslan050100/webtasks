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
		<div id = "head">
			<a href="task2.php?category=all">All</a> |
			<a href="task2.php?category=toyota_cars">Toyota</a> |
			<a href="task2.php?category=bmw_cars">BMW</a>
		</div>
		<?php 

		$dbhost = 'localhost';
		$dbuser =  'root';
		$dbpassword = '';
		$link = mysqli_connect($dbhost,$dbuser,$dbpassword,'cars');
		if (!$link) {
		    die('Could not connect: ' . mysqli_error());
		}

		$sql="select * from cars";

		$sql2="select * from cars where maker='Toyota'";

		$sql3 = "select * from cars where maker = 'BMW'";


		$query=mysqli_query($link,$sql);
		$query2=mysqli_query($link,$sql2);
		$query3=mysqli_query($link,$sql3);
		$num=mysqli_num_rows($query);
		$num2=mysqli_num_rows($query2);
		$num3=mysqli_num_rows($query3);

		if(isset($_GET['category'])){
			$category = $_GET['category'];
				if($category == "all"){	
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
				}
		}
		if(isset($_GET['category'])){
			$category = $_GET['category'];
				if($category == "toyota_cars"){	
					for ($i=0; $i <$num2 ; $i++) { 
						$result=mysqli_fetch_array($query2);
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
				}
		}
		if(isset($_GET['category'])){
			$category = $_GET['category'];
				if($category == "bmw_cars"){	
					for ($i=0; $i <$num3 ; $i++) { 
						$result=mysqli_fetch_array($query3);
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
				}
		}
		mysqli_close($link);
		?>

	</body>

</html>