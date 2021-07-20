<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style>
		*{
			margin: 0,auto;
		}
		.outerbox{
			background-color: silver;
			margin-left:2%;
			margin-top:3%;
			height:625px;
			width:1450px;

		}
		.dis{
			display: flex;
		}
		.head h1{
			padding-left: 30px;
			padding-top: 40px;
			text-align: left;
			font-size: 60px;
		}
		.but{
			margin-left: 40%;
			margin-top: 2%;
		}
		.but button{
			height: 100px;
			width: 270px;
			font-size: 25px;
			font-weight: bold;
		}

		.tab{
			margin-top: 3%;
			margin-left: 2%;
			margin-right: 2%;
		}
		.nores h1{
			text-align: center;
			margin-top: 10%;
			
		}
		
.zoom{
	transition: transform .2s;
}
.zoom:hover {
  transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
	</style>

</head>
<body style="background-color: #a6a6a6 ;">

	<div class="outerbox">
		<div class="dis">
			<div class="head">
				<h1>Employee Details</h1>

			</div>
			<div class="but">
				<button type="button" class="btn btn-outline-secondary zoom" onclick="window.location.assign('form.html')">Add New Employee </button>
			</div>
		</div>
		<div class="tab">
			<?php
				$server="localhost";
				$username="root";
				$password="";
				$db="employeedetails";
				$conn=mysqli_connect($server,$username,$password,$db);
				$query="SELECT * from userdetails";
				$result = mysqli_query($conn, $query);

				if (mysqli_num_rows($result) > 0) {
					echo "<table class='table table-dark table-hover'><tr><th>ID</th><th>Name</th><th>Address</th><th>Salary</th></tr>";
				  while($row = mysqli_fetch_assoc($result)) {
				  	echo "<tr class='zoom'><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['salary']."</td></tr>";
				  }
				echo "</table>";
				} else {
				  echo "<div class='nores'><h1>THERE IS NO DATA IN THE DATABASE</h1></div>";
				}
		
			?>
	</div>	
	</div>
</body>

</html>
