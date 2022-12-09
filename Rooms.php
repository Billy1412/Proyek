<!-- Classic Twin -->
<?php
session_start();
require "connect.php";
$tipe = $_GET['room_id'];;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	<?php
		require 'connect.php';
		$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
		$res= mysqli_query($con,$sql);
								
		while($row=mysqli_fetch_array($res)){
			echo $row['tipe_room'];
		}					
		mysqli_close($con);
		?>
	</title>
    <script src = "jquery-3.6.1.js" type= "text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    
    <!-- buat date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<style>
		#gambar{
			margin-top: 20px;
			position: relative;
		}
		#title{
			margin-top: 10px;
			font-family : 'patrick', cursive;
		}
		#gambar img{
			width: 100%;
			height: 400px;
		}
		.p2{
			font-family : 'patrick', cursive;
		}
		.p3 {
		 	font-family: PlayfairDisplay,Georgia,Times New Roman,serif;
		 	color: #333;
		}
		#size {
			margin-top: 20px;
		}
		#features{
			margin-top: 20px;
		}
		#features li{
			margin-left : 20px;
			font-family: PlayfairDisplay,Georgia,Times New Roman,serif;
		}
		body{
        box-sizing : border-box;
        overflow-x: hidden;
        width: 100%;
        height : 100%;
        margin : 0;
        padding : 0;


	    }
	    .nav-link{
	        text-decoration:none;
	        color:rgba(34,54,69,7);
	        font-weight : 500;
	        margin-top : 0.2rem;

	    }
	    hr {
		    border: none;
		    height: 1px;
		    /* Set the hr color */
		    color: #333; /* old IE */
		    background-color: #333; /* Modern Browsers */
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
		.overlay {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  height: 100%;
		  width: 100%;
		  opacity: 0;
		  transition: .3s ease;
		  background-color: lightblue;
		}

		#gambar:hover .overlay {
		  opacity: 1;
		}

		.text {
		  color: white;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -70%);
		  text-align: center;
		  font-family: PlayfairDisplay,Georgia,Times New Roman,serif;
		}
		.text h2{
			font-family: PlayfairDisplay,Georgia,Times New Roman,serif;
		}
	</style>
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

	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 mx-auto" >

				<div id = "gambar">
					<?php
							require 'connect.php';
							$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo "<img src = '".$row['image']."'>";

							}
							
							mysqli_close($con);

							?>
					<!-- size -->
					<div class="overlay">
					    <div class="text">
					    	<?php
							require 'connect.php';
							$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo "<h2>".$row['tipe_room']."</h2><br>";

							}
							
							mysqli_close($con);

							?>
					    	<?php
							require 'connect.php';
							$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo $row[4]." m2";

							}
							
							mysqli_close($con);

							?>
					    </div>
					  </div>
				</div>

				<div id = "title">
					<h3 style="font-size: 23px">Bellagio Hotel</h3>
				</div>

				<div id = "roomType">
					<h3 class = "p3" style="font-size: 30px;">
						<?php
							require 'connect.php';
							$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo $row[1];

							}
							
							mysqli_close($con);

							?>
					</h3>
				</div>
				<div id = "price" style = "text-align: right;">
					<h3 class = "p3" style="font-size: 30px;">
						<?php
							require 'connect.php';
							$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo "Rp. ".$row[2]." / night";

							}
							
							mysqli_close($con);

							?>
					</h3>
				</div>
				
				<hr>

				<div class = "container">
					<div class = "row">
						<div class = "col-7">
							<div id = "description" style="width: 95%">
							<h4>Description</h4>

							<?php
							require 'connect.php';
							$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo $row[6];

							}
							
							mysqli_close($con);

							?>
							<br>
							<br>

							Bellagio Hotel is a CHSE-certified hotel and has been awarded the SafeGuard Hygiene Excellence and Safety Label by Bureau Veritas.
							</div>
							<div id = "size">
								<h4>Room Size</h4>
								<?php
								require 'connect.php';
								$sql = "SELECT * FROM room WHERE id_room='".$tipe."'";
								$res= mysqli_query($con,$sql);
									
								while($row=mysqli_fetch_array($res))
								{
									echo $row[4]." m2";

								}
								
								mysqli_close($con);

								?>

							</div>
							
							<div id  = "features">
							<h4>Features</h4>
							<?php
							require 'connect.php';
							$sql = "SELECT * FROM features WHERE id_room='".$tipe."'";
							$res= mysqli_query($con,$sql);
								
							while($row=mysqli_fetch_array($res))
							{
								echo "<li style = 'margin-top: 5px;'>$row[2]</li>";

							}
							
							mysqli_close($con);

							?>	
							</div>
							
						</div>

						<div class = "col-5 mx-auto" style="text-align: right;">
							<button class = "btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Book Now</button>
							<button class = "btn btn-primary"><i class="fa fa-list-alt" aria-hidden="true"></i> Add To Wishlist</button>
						</div>

					</div>
					<hr>
    			<div class="row">
    				<div class="col-sm-4 text-center" >
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
					</div>
	<hr>
				<div class="mt-5" id="review_content"></div>
				</div>


			</div>
		</div>
	</div>
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
						<?php
						if(isset($_SESSION["id"])){
							require 'connect.php';
							echo '<label>Transaction ID:</label>
									<select class="form-select" aria-label="Default select example" id = "t_id">';
							$sqli="Select * from transaksi t JOIN detail_transaksi d ON t.id_transaksi = d.id_transaksi WHERE id_member='".$_SESSION['id']."' AND t.id_transaksi NOT IN (SELECT id_transaksi FROM review) AND id_room = '".$tipe."';";
							$res=mysqli_query($con,$sqli);
							while($row=mysqli_fetch_array($res)){
								echo "<option value='".$row['id_transaksi']."' id = '".$row['id_transaksi']."'>".$row['id_transaksi']."</option>";
							}
							echo "</select>";
							mysqli_close($con);
						}
						?>
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>
	<!-- footer -->
<div id = "footer" style = "background-color:rgb(190, 172, 161); padding: 2rem; " >
<p id = "judulFooter"> Bellagio Hotel </p>
<div class="row justify-content-around" style = "margin-left : -0.5rem; " >
    <div class="col-4" >
    <h4 style = "margin-top : 1rem;">Contact Us</h4>
    <img src="svg/location.svg" width = "5%"> 
    <h7 style = "margin-left : 0.5rem; color: rgb(255, 255, 255)">Jalan Jawa no 21 Surabaya</h7>
    <br>
    <img src="svg/whatsapp.svg" width = "5% margin-top: 1%;"> 
    <h7 style = "margin-left : 0.5rem; color: rgb(255, 255, 255) ">+62 811329119</h7>
    <br>
    <img src="svg/email.svg" width = "5% margin-top: 1%;"> 
    <h7 style = "margin-left : 0.5rem;  color: rgb(255, 255, 255)">bellagiohotel@gmail.com</h7>
    </div>
    <div class="col-4"  >
    <h4 style = "margin-top : 1rem;">Check in / Check out</h4>
    <h7 style = "  color: rgb(255, 255, 255);">We hope you’ve enjoyed your stay. <br> Please note the check-in / out times below :
    <br>
    Check-in &nbsp;&nbsp;&nbsp;&nbsp;: 2pm
    <br>
    Check-out&nbsp;&nbsp;: 12pm</h7>
    
    </div>
    <div class="col-4">
    <h4 style = "margin-top : 1rem;">Stay in Touch</h4>
        <a class = "socmed" href="https://www.facebook.com/bellagiolasvegas/"><i class="fab fa-facebook fa-2x"></i></a>
        <a class = "socmed" href="https://instagram.com/bellagio_hotel?igshid=NDk5N2NlZjQ="><i class="fab fa-instagram fa-2x"></i></a>
        <a class = "socmed" href="https://www.youtube.com/watch?v=gPzD5OvYp04"><i class="fab fa-youtube fa-2x"></i></a>
        <a class = "socmed" href="https://wa.me/0811329119"><i class="fab fa-whatsapp fa-2x"></i></a>
    </div>
  </div>
</div>

</body>
</html>
<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){
		<?php
		if(!isset($_SESSION["id"])){
			echo "alert('Please Login First!!');";
			echo "window.location.href = 'login.php';";
		}
		else{
			echo "$('#review_modal').modal('show');";
		}
		?>
        

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var t_id = $('#t_id').val();

        var user_review = $('#user_review').val();

        if(!t_id || user_review == '')
        {
            alert("Please Fill Every Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, t_id:t_id, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');
					$('#t_id').find('option:selected').remove().end();
                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
		var tipe_kamar = '<?php echo $tipe; ?>';
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data', tipe_kamar:tipe_kamar},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>