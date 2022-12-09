<?php
require "connect.php";

if(isset($_POST['showgambar1'])){
	$id1 = $_POST['id1'];
	$sql = "SELECT * FROM room WHERE id_room = '$id1'";

	$result = mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($result)){
		echo "<div>
					<img src = 'asset/$row[5]'>
				</div>

				<div class = 'col-md-12'>
					<table class = 'table text-center' style = 'background-color: white'>
						<tr>
							<th style = 'text-align: left'>Room Type</th>
							<td class = 'text-center'>$row[1]</td>
						</tr>
						<tr>
							<th style = 'text-align: left'>Price</th>
							<td class = 'text-center'>Rp. $row[2] / night</td>

						</tr>
						<tr>
							<th style = 'text-align: left'>Room Size</th>
							<td class = 'text-center'>$row[4] m2</td>

						</tr>
						<tr>
							<th style = 'text-align: left'>Description</th>
							<td class = 'text-center'>$row[6]</td>
						</tr>
						<tr>
							<th style = 'text-align: left'>Features</th>
							<td class = 'text-center' id = 'features1'>
								
							</td>
						</tr>


					</table>
				</div>";
	}
	

	exit();

}
if(isset($_POST['showgambar2'])){
	$id2 = $_POST['id2'];
	$sql = "SELECT * FROM room WHERE id_room = '$id2'";
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
		echo "<div>
					<img src = 'asset/$row[5]'>
				</div>

				<div class = 'col-md-12'>
					<table class = 'table text-center' style = 'background-color: white'>
						<tr>
							<th style = 'text-align: left'>Room Type</th>
							<td class = 'text-center'>$row[1]</td>
						</tr>
						<tr>
							<th style = 'text-align: left'>Price</th>
							<td class = 'text-center'>Rp. $row[2] / night</td>

						</tr>
						<tr>
							<th style = 'text-align: left'>Room Size</th>
							<td class = 'text-center'>$row[4] m2</td>

						</tr>
						<tr>
							<th style = 'text-align: left'>Description</th>
							<td class = 'text-center'>$row[6]</td>
						</tr>
						<tr>
							<th style = 'text-align: left'>Features</th>
							<td class = 'text-center' id = 'features1'>
						</tr>


					</table>
				</div>";
	}
	exit();
	
}


?>
<html>
<head>
	<script src="jquery-3.6.1.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.2.0/css/bootstrap.css">
	<style>
		#compare1 img{
			width: 450px;
			height: 250px;
		}
		#compare2 img{
			width: 450px;
			height: 250px;
		}
		td {
			margin-left: 60px;
		}
		#compare1{
			box-shadow: 5px 5px;
		}
		#compare2{
			box-shadow: 5px 5px;
		}
		h1{
			text-shadow: 3px;
			color: black;
		}
	</style>
</head>
<body>
	<h1 class ="display-5 my-5 text-center"> <strong>Compare Meeting Room</strong></h1>
	<div class = "container">
		<div class = "row">
			<div class = "col text-center">
				<select class = "form-control" id = "select1">
					<option value = "0" class = "text-center">-- Select Room To Compare --</option>

					<option value= "R004" class = "text-center">Rafflesia</option>

					<option value= "R005" class = "text-center">Fussia</option>

					<option value= "R006" class = "text-center">Cruss</option>
				</select>

				<!-- Untuk tempat hasil compare 1 -->
				<div id = "compare1" class = "text-center" style="margin-top: 50px;">
				
				</div>
			</div>

			

			<div class = "col text-center"> <h1>VS</h1> </div>

			<div class = "col text-center">
				<select class = "form-control" id = "select2">
					<option value = "0" class = "text-center">-- Select Room To Compare --</option>

					<option value= "R004" class = "text-center">Rafflesia</option>

					<option value= "R005" class = "text-center">Fussia</option>

					<option value= "R006" class = "text-center">Cruss</option>
				</select>

				<!-- Untuk tempat hasil compare 2 -->
				<div id = "compare2" style="margin-top: 50px;">
				
				</div>
			</div>
		</div>

	</div>

	
	<script>
		$(document).ready(function(){
			$('#select1').change(function(){
				v_id1 = $("#select1").val();
				$.ajax({
					url : "compare2.php",
					type : "POST",
					async : true,
					data : {
						showgambar1 : 1,
						id1 : v_id1
					},
				success : function(result){
					$("#compare1").html(result);
				
				}
				})
			})

			$('#select2').change(function(){
				v_id2 = $("#select2").val();
				$.ajax({
					url : "compare2.php",
					type : "POST",
					async : true,
					data : {
						showgambar2 : 1,
						id2 : v_id2
					},
				success : function(result){
					$("#compare2").html(result);
					
				}
				})
			})


			
		});

		
	</script>

</body>
</html>