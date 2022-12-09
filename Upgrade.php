<!doctype html>
<?php
session_start();
require "connect.php";
if(!isset($_SESSION["id"])){
	header("Location: login.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Transaction Details</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Import jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous">
	</script>
	
	<script src=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity=
"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous">
	</script>
</head>

<body>
	
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Bellagio Hotel</a>
        <button class="navbar-toggler" id= "navbartoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav" >
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rooms</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="Rooms.php?room_id=R001">Classic Twin</a></li>
					<li><a class="dropdown-item" href="Rooms.php?room_id=R002">Classic Deluxe</a></li>
					<li><a class="dropdown-item" href="Rooms.php?room_id=R003">King Suite</a></li>
				</ul>
        	</li>
            <li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meeting Rooms</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="Rooms.php?room_id=R004">Rafflesia</a></li>
					<li><a class="dropdown-item" href="Rooms.php?room_id=R005">Fuchsia</a></li>
					<li><a class="dropdown-item" href="Rooms.php?room_id=R006">Cruss</a></li>
				</ul>
        	</li>
            <li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Compare Rooms</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="Compare Hotel Rooms.php">Hotel Rooms</a></li>
					<li><a class="dropdown-item" href="Compare Meeting Rooms.php">Meeting Rooms</a></li>
				</ul>
        	</li>
            <li class="nav-item">
            <a class="nav-link "  href="<?php echo (isset($_SESSION['id']))?'wishlist.php':'login.php' ?>"  style = "margin-right: 2ex">Wishlist</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="<?php echo (isset($_SESSION['id']))?'Order Summary.php':'login.php' ?>" style = "margin-right: 2ex">Order Summary</a>
            </li>
        </ul>
        <div class = "login" >
			<?php
				if(isset($_SESSION["id"])){
					echo "<button type='button' class='btn btn-outline-danger'><a href = 'logout.php'>Logout</a></button>";
				}
				else{
					echo '<button type="button" class="btn btn-outline-success"><a href = "login.php">Login </a></button>
            			<button type="button" class="btn btn-outline-primary"><a href = "register.php">Register</a></button>';
			}
			?>
        </div>
    </div>
</nav>
		<?php
		$t_id=$_GET['id_transaksi'];
		$sql="Select in_date, out_date, nights, harga_room, amount, d.detail, tipe_room, breakfast, smoking FROM detail_transaksi d JOIN room r ON d.id_room = r.id_room WHERE id_transaksi='".$t_id."'";
 			$res=mysqli_query($con,$sql);
			if(!empty($res))
			{		
				while($row=mysqli_fetch_array($res))
				{
					$in_date=$row['in_date'];
					$out_date=$row['out_date'];
					$nights=$row['nights'];
					$harga=$row['harga_room'];
					$tipe = $row['tipe_room'];
					$amount=$row['amount'];
					$detail = $row['detail'];
					$breakfast = $row['breakfast'];
					$smoking = $row['smoking'];
				}
			}
		?>
		<h1 class="text-center mt-4 mb-3">Transaction details</h1>
		<div style="margin-left: 20vw; margin-right: 20vw;">
			<form action="update.php" method="post">
				<div class="mb-3 row">
					<label class="col-sm-2">Transaction Id</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="t_id" value="<?php echo $t_id; ?>" readonly>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2">Tipe Ruangan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="r_type" value="<?php echo $tipe; ?>" disabled>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2">Check In Date</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="in_date" value="<?php echo $in_date; ?>" disabled>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2">Check Out Date</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="out_date" value="<?php echo $out_date; ?>" disabled>
						<div class="mb-3 row">
							<p> </p>
							<label class="col-sm-5">Total Nights: <?php echo $nights;?></label>
						</div>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2">Detail</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="detail" value="<?php echo $detail; ?>">
					</div>
				</div>
				<div class="mb-3">
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="checkbox" name="breakfast" value="1" <?php echo ($breakfast=='1')?'checked disabled':'' ?>>
				  <label class="form-check-label" for="inlineCheckbox1">Breakfast</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="checkbox" name="smoking" value="1" <?php echo ($smoking=='1')?'checked disabled':'' ?>>
				  <label class="form-check-label" for="inlineCheckbox2">Smoking</label>
				</div>
				</div>
			<button name="update" type="submit" class="btn btn-outline-primary mb-3" style="width: 50%; margin-left: 25%">Upgrade<i class='fas fa-save' style='color:blue'></i></button>
				
			</form>
			<a class='btn btn-primary btn-lg' role='button' href='Order Summary.php' style="width: 50%; margin-left: 25%;">Back</a>
		</div>
</body>
</html>