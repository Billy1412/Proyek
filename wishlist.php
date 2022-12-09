<?php
  session_start();
  require "connect.php";
  if (!isset ($_SESSION["id"])){
    header("location: login.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <script src = "jquery-3.6.1.js" type= "text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- buat date picker -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<style>
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
    
    #judulWishlist{
      text-align : center;
      color: white;
      font-weight : bold;
      font-size : 1.5rem;
    }

    .box-top{
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom : 0.5rem;
    }
    .review-box-container{
      display : flex;
      justify-content : center;
      align-items : center;
      flex-wrap : wrap;
      width : 100%;
      height: 100%;
      
    }

    .review-box{
      width : 500px;
      box-shadow : 2px 2px 30px rgba(0,0,0,0.1);
      background-color : white;
      padding : 1rem;
      margin : 1rem;
      cursor : pointer;
    
    }

  .review p{
    font-size: 0.9rem;
    color: rgb(102, 98, 96);
  }

  .review-box:hover{
    transform : translateY(-10px);
    transition : all ease 0.3s;
  }

  #modalButton{
    /* margin-left : 28rem; */
    float : right;
    margin-bottom : 1rem;
  }

  .deleteButton{
    margin-left : 1rem;
    float : right;
    margin-bottom : 1rem;
  }

  /* modal box */
  #plusminus{
  margin-top:3%;
  height: 60%;
  width: 60%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color:#0D33EE;
  color: white;
  border-radius: 8px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);

}
#spanplusminus{
  
  width: 35%;
  text-align: center;
  font-size: 110%;
  cursor: pointer;
  user-select: none;
}

a:link { 
  text-decoration: none; 
  color : black;
}


a:visited { 
  text-decoration: none;
  color : black;
}


a:hover { 
  text-decoration: none;
  color : black;
}


a:active { 
  text-decoration: none; 
  color : black;
}

.fa-heart{
  background :transparent;
  border : none;
  outline : none;
  color: red;
  margin-left : 1rem;
  float : right;
  margin-bottom : 1rem;
  font : 20%;
}

.fa-heart:hover{
  color:rgb(238, 125, 125);
}
</style>
<script>
  //buat date picker booking form check in
    $(function() {
      $('#checkin1').datepicker();
    });

  //buat date picker booking form check out
      $(function() {
      $('#checkout1').datepicker();
    });



</script>

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
<div id = "wishlist">
   <p id ="judulWishlist" style = "background-color :rgb(143, 124, 112); height : 3rem; text-align: center; margin-left : 5rem; margin-right: 5rem; margin-button: 3rem;  margin-top: 3rem;" >Wishlist</p>
   <div class = "review-box-container">
   <form action="loginprocess.php" method="post">
    <?php
        $sql= "SELECT * FROM wishlist INNER JOIN room on wishlist.id_room = room.id_room WHERE wishlist.id_member = '{$_SESSION['id']}'";
        $res=mysqli_query($con,$sql);
        if(!empty($res))
        {
        while($row=mysqli_fetch_array($res))
        { 
            echo "<div class='card mb-3' style='max-width: 70%; height : 100%; margin-left:15%'>";
            echo " <div class='row g-0'>";
            echo "<div class='col-md-4'>";
            echo "<img src='fotonew/".$row['image']."'class='img-fluid rounded-start'>";
            echo "</div>";
            echo "<div class='col-md-8'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>".$row["tipe_room"]."</h5>";
            echo "<div class = 'review'>";
            echo "<p class='card-text'> Check In = ".$row["in_date"]."</p>";
            // echo "<a href='deleteWishlist.php?id=".$row['id_wishlist']."'><button type='button' class='btn btn-danger deleteButton'>Delete</button></a>";  
            echo "<a href='deleteWishlist.php?id=".$row['id_wishlist']."'><i class='fas fa-heart fa-2x'></i></a>";  
            echo " <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal' id ='modalButton' >Book Now</button>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
      
    }


        
    ?>



     <!-- Modal Booking -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
              <div class="modal-dialog" >
                <div class="modal-content" >
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Booking Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <label class="form-label"><b>Check in</b></label>  
                    <div class="input-group date" id="checkin1">
                          <input type="text" class="form-control" >
                          <span class="input-group-append">
                              <span class="input-group-text bg-white d-block">
                                  <i class="fa fa-calendar"></i>
                              </span>
                          </span>
                          
                      </div><br>
                    <label class="form-label"><b>Check Out</b></label>  
                    <div class="input-group date" id="checkout1">
                          <input type="text" class="form-control">
                          <span class="input-group-append">
                              <span class="input-group-text bg-white d-block">
                                  <i class="fa fa-calendar"></i>
                              </span>
                          </span>
                    </div>
                      <br>
                    <div class="row justify-content" >
                      <div class="col-4"> <b>Quantity </b>
                        <div id= "plusminus">
                          <br>
                          <span class="minus" id ="spanplusminus">-</span>
                          <span class="num" id ="spanplusminus">01</span>
                          <span class="plus" id ="spanplusminus">+</span>
                          <script>
                            plus = document.querySelector(".plus"),
                            minus = document.querySelector(".minus"),
                            num = document.querySelector(".num");
                            let a = 1;
                            //Untuk menambah dan mengurangkan jumlah kamar yang akan dipesan
                            plus.addEventListener("click", ()=>{
                              a++;
                                if(a <10){
                                  a = "0" + a;
                                  num.innerText = a;
                                  }
                                else{
                                  num.innerText = a;
                                }
                              });

                            minus.addEventListener("click", ()=>{
                              if(a > 1){
                                a--;
                                if(a<10){
                                  a = "0" + a;
                                  num.innerText = a;
                                }
                                else{
                                  num.innerText = a;
                                }
                              }
                            });

                          </script>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="dropdown"><b>Room Type</b> <br>
                          <button class="btn btn-primary dropdown-toggle" id ="roombutton" type="button" data-bs-toggle="dropdown" aria-expanded="false" style = "background-color:#0D33EE;margin-top:3%">
                            Room 
                          </button>
                          <ul class="dropdown-menu">
                          <li><a class="dropdown-item" id = "kamar1" value= "deluxe" >Classic Deluxe</a></li>
                          <li><a class="dropdown-item" id = "kamar2" value = "twin">Classic Twin</a></li>
                          <li><a class="dropdown-item" id = "kamar3" value = "suite">King Suite</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <script>
                    //untuk mengganti tulisan yang ada di button dropdown
                  $(".dropdown-menu li a").click(function(){

                      $("#roombutton").text($(this).text());
                      $("#roombutton").val($(this).text());

                      });
                  
                  </script>
                    <br>
                  <div id = "request" style = "padding-left : 3%;">
                  <!-- breakfast and smoking room form -->
                  <label class="form-label"><b>Request</b></label>  
                  
                  <div class="row justify-content-center" >
                    <div class="col-4">
                      <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Breakfast
                      </label>
                      </div>
                    </div>
                    <div class="col-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Smoking Room
                      </label>
                      </div>
                    </div>
                  </div>
                  <p style = "margin-top :2%;"> *Breakfast will be charge additional</p>

                  <!-- request -->
                  <div id = "request" style = "margin-top :2%;">
                    <label class="form-label"><b>Extra Request </b></label>  
                    <input type="text" class="form-control" >
                  </div>
                  </div>
                  

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Book</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
</div>

    
</body>
</html>