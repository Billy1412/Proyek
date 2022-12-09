<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "jquery-3.6.1.js" type= "text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <style>
        body{font : 14px sans-serif;}
        .wrapper{width: 360px; padding : 20px; margin : 0 auto;}
    </style>
    <title>Log In</title>
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
    <div class = "wrapper">
        <form action = "loginprocess.php" method = "post">
            <h2>Login</h2>
            <p class = "hint-text">Enter Login Details</p>
            <div class="mb-3">
                <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="id">
                    <div id = "emailHelp" class = "form-text"> We'll never share your email with anyone else. </div>
            </div>
            <div class="mb-3">
                <label for = "exampleInputPassword1" class = "form-label">Password</label>
                    <input type="password" class="form-control" name="password">
            </div>
            <div class = "form-group">
                <button type = "submit" name ="save" class ="btn btn-success btn-lg btn-block">
                Login</button>
            </div>
            <p>Don't have an account? <a href = "register.php">Register Here</a>.</p>
        </form>
    </div>
</body>
</html>