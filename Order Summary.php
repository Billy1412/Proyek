<?php
session_start();
require "connect.php";
if(!isset($_SESSION["id"])){
	header("Location: login.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order Summary</title>
	<script src = "jquery-3.6.1.js" type= "text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
	<style>
    .nav-link{
        text-decoration:none;
        color:rgba(34,54,69,7);
        font-weight : 500;
        margin-top : 0.2rem;

    }
    .nav-link:hover{
        color :rgb(143, 124, 112);
    }

    ul {
        list-style-type : none;
    }

    .navbar{
        background : white;
        height : 0rem;
        min-height : 10vh;
       
    }

    .navbar .navbar-brand a {
        padding : 1rem 0;
        display : block;
        text decoration : none;
    }

    .navbar-brand{
        font-family : 'patrick', cursive;
        margin-right : 2%;
        margin-top : 0.2rem;
    }
</style>
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
	<div class="card"  style="max-width: 80vw; margin-left: 2vw; margin-top: 5vh">
	  <div class="card-body">
		<h1 class="card-title" style="padding-bottom: 2vh">Order Summary</h1>
		<?php
				$sql="Select * from transaksi WHERE id_member='".$_SESSION["id"]."';";
 				$res=mysqli_query($con,$sql);
				if(!empty($res))
				{		
					while($row=mysqli_fetch_array($res))
					{ 
						$sql2 = "Select image FROM detail_transaksi det JOIN room r ON det.id_room = r.id_room WHERE id_transaksi = '".$row['id_transaksi']."' LIMIT 1;";
						$res2=mysqli_query($con,$sql2);
						$row2=mysqli_fetch_array($res2);
						$status = "";
						if($row['status'] == 1){
							$status = "Paid";
						}
						else{
							$status = "Not yet paid";
						}
						
						echo "<div class='card mb-3 item' style='max-width: 80vw; margin-left: 2vw;'>";
						echo "<div class='row g-0'>";
						echo "<div class='col-md-4'>";
						echo "<img src='".$row2['image']."' class='img-fluid rounded-start' alt='...'>";
						echo "</div>";
						echo "<div class='col-md-8'>";
						echo "<div class='card-body'>";
						echo "<h5 class='card-title'>".$row['id_transaksi']."</h5>";
						echo "<p>Status: ".$status."</p>";
						echo "<p>Transaction Date: ".$row['tanggal_transaksi']."</p>";
						echo "<p>Total Cost: Rp ".$row['total_transaksi']."</p>";
						echo "<a class='btn btn-primary btn-lg mr-3' role='button' href='Upgrade.php?id_transaksi=".$row['id_transaksi']."'>Upgrade</a>&nbsp<a class='btn btn-primary btn-lg' role='button' href='Payment.php?id_transaksi=".$row['id_transaksi']."'>Pay Now</a>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
					}
				}
			  else{
					echo "No data found";
					}
			?>
	  </div>
	</div>
		</div>
	</div>
</body>
</html>