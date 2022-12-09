<?php
  session_start();
  require "connect.php";

  ?>
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
    
    <!-- buat date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Bellagio Hotel</title>
</head>
<style>
     body{
        box-sizing : border-box;
        overflow-x: hidden;
        width: 100%;
        height : 100%;
        margin : 0;
        padding : 0;
        background-color:#f7f8fa;


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

    #tagline{
      font-family : 'patrick', cursive;
      font-weight : bold;
      color : rgb(103, 57, 20);

    }

    #judulFooter{
      font-family : 'patrick', cursive;
      font-size: 1.5rem;
    }
    .carousel-inner{
      height: 200%;
    }
    #judulKamar{
      text-align : center;
      color: white;
      font-weight : bold;
      font-size : 1.5rem;
    }

    #judulFasilitas{
      text-align : center;
      color: white;
      font-weight : bold;
      font-size : 1.5rem;
    }

    #room::before{
      content: "";
      border-top: 1px solid #404041;
    }
    
    #coba{
      object-fit : cover;
      transition : 0.1s
    }

    #coba:hover{
      /* cursor : pointer; */
      transform : translateY(-10px);
      transition : all ease 0.3s;
    }
    #coba:active{
      transform = scale(0.8);
    }

    #judulReview{
      text-align : center;
      color: white;
      font-weight : bold;
      font-size : 1.5rem;
    }

    /* review */
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
      
    }

    .review-box{
      width : 500px;
      box-shadow : 2px 2px 30px rgba(0,0,0,0.1);
      background-color : white;
      padding : 1rem;
      margin : 1rem;
      cursor : pointer;
      height :auto;
      align-self : normal; 
      /* biar besarnya sama */
    
    }

  .review p{
    font-size: 0.9rem;
    color: rgb(102, 98, 96);
  }

  .review-box:hover{
    transform : translateY(-10px);
    transition : all ease 0.3s;
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

.socmed{
  margin-right :2%;
}

.socmed:hover{
  color : white;
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
<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hotelnew6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lobby3n.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pool3n.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div id = "welcome">
<div class="row justify-content-evenly">
    <div class="col-4" style = "margin-top : 3%;">
    <div id = "judul" style = "font-weight : bold; font-size : 2rem ">
    Stay and Relax at <br>
    Bellagio Hotel <br>
  </div>
  <div id = "isi" style = "margin-top :3%; text-align : justify;">
    It is our pleasure to welcome you by providing a complete facility and friendly service as you need while in Surabaya. You will feel a different atmosphere by feeling like recharging yourself when entering the Bellagio Hotel Surabaya. With the new Bellagio Hotel, that’s where you will feel very relaxed by being in the right hotel to stay overnight.
    <br><br>
    <h5 id = "tagline">"We make the ordinary, extraordinary"</h5>
  </div>
  </div>
    <div class="col-4">
    <img src="images/relax3.jpg" style = "max-width: 110%; margin-top : 2rem;
  height: auto;">
       <img src="images/team2.jpg" style = "max-width: 110%;
  height: auto;">
    </div>
  </div>
</div>
  </div>

<!-- ROOM -->
<div id = "kamar" style = "margin-top : 3rem;">
<div id = "room" >
  <p id ="judulKamar" style = "background-color :rgb(143, 124, 112); height : 3rem; text-align: center; margin-left : 5rem; margin-right: 5rem; margin-button: 3rem;  margin-top: 3rem;" >Our Rooms</p>

  <div class="container">
    <div class = "row">
          <?php
          $sql = "SELECT * FROM room WHERE id_room = 'R001' ";
          $res1 = mysqli_query($con, $sql);
          
          if(!empty($res1))
          {
            while($row=mysqli_fetch_array($res1))
            {
              $data1 = isset($row['id_room']) ? $row['id_room'] : '';
              $counter = 1;
              echo " <div class='col-lg-4 col-md-6 my-3'>";
              echo " <div class='card border-0 shadow' style='max-width: 350px; margin : auto;'>";
              echo " <img src='".$row["image"]."'class='card-img-top' alt='...'>";
              echo "<div class='card-body'>";
              echo "<h5 class='card-title'><b>".$row["tipe_room"]."</b></h5>";
              echo " <h6 class = 'mb-4'>Rp ".$row["harga"]."/ night </h6>";
              echo "<div class = 'features mb-4'>";
              echo "<h6 class = 'mb-1'> Features</h6>";
              
                $sql2 = "SELECT * FROM features INNER JOIN room on features.id_room = room.id_room WHERE room.id_room = 'R001'";
                $res2 = mysqli_query($con, $sql2);
              while($row=mysqli_fetch_array($res2)){
                echo "<span class = 'badge rounded-pill bg-light text-dark text-wrap'>".$row["nama"]."</span>";
              }
            }
            $sql = "SELECT * FROM room WHERE id_room = 'R001' ";
         
          $res1 = mysqli_query($con, $sql);

          if(!empty($res1))
          {
            while($row=mysqli_fetch_array($res1))
            {
              
              echo "</div>";
              echo "<p class='card-text'><br>".$row["detail"]."</p><br><br>";
              if (!isset ($_SESSION["id"])){
                echo '<button type="button" class="btn btn-success"  style = "float: right" disabled >Book Now</button>';
              }
              if (isset ($_SESSION["id"])){
                echo " <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal' id ='modalButton' style = 'float: right'>Book Now</button>";
              }
              echo "</div>";
   
            }
            

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


          
   

<?php
          // $sql= "SELECT * FROM room WHERE id_room = 'R001' OR id_room = 'R002' or id_room = 'R003' ";
          $sql = "SELECT * FROM room WHERE id_room = 'R002' ";
         
          // $res=mysqli_query($con,$sql);
          $res1 = mysqli_query($con, $sql);
          
          if(!empty($res1))
          {
            while($row=mysqli_fetch_array($res1))
            {
              $data1 = isset($row['id_room']) ? $row['id_room'] : '';
              // echo("tes");
              // echo $data1;
              $counter = 1;
              echo " <div class='col-lg-4 col-md-6 my-3'>";
              echo " <div class='card border-0 shadow' style='max-width: 350px; margin : auto;'>";
              echo " <img src='".$row["image"]."'class='card-img-top' alt='...'>";
              echo "<div class='card-body'>";
              echo "<h5 class='card-title'><b>".$row["tipe_room"]."</b></h5>";
              echo " <h6 class = 'mb-4'>Rp ".$row["harga"]."/ night </h6>";
              echo "<div class = 'features mb-4'>";
              echo "<h6 class = 'mb-1'> Features</h6>";
              // $sql2 = "SELECT * FROM features INNER JOIN room on features.id_room = room.id_room WHERE room.id_room = ".$data1;
                $sql2 = "SELECT * FROM features INNER JOIN room on features.id_room = room.id_room WHERE room.id_room = 'R002'";
                $res2 = mysqli_query($con, $sql2);
              while($row=mysqli_fetch_array($res2)){
                echo "<span class = 'badge rounded-pill bg-light text-dark text-wrap'>".$row["nama"]."</span>";
               
              }
            }

              $sql = "SELECT * FROM room WHERE id_room = 'R002' ";
         
              // $res=mysqli_query($con,$sql);
              $res1 = mysqli_query($con, $sql);
    
              if(!empty($res1))
              {
                while($row=mysqli_fetch_array($res1))
                {
              
              echo "</div>";
              echo "<p class='card-text'><br>".$row["detail"]."</p><br><br>";
              if (!isset ($_SESSION["id"])){
                echo '<button type="button" class="btn btn-success"  style = "float: right" disabled >Book Now</button>';
              }
              if (isset ($_SESSION["id"])){
                echo " <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal' id ='modalButton' style = 'float: right'>Book Now</button>";
              }
					
    echo "</div>";
    echo "</div>";
    echo "</div>";
                }
              
            }
          }
        ?>
        <?php
          $sql = "SELECT * FROM room WHERE id_room = 'R003' ";
         
          $res1 = mysqli_query($con, $sql);
          
          if(!empty($res1))
          {
            while($row=mysqli_fetch_array($res1))
            {
              $data1 = isset($row['id_room']) ? $row['id_room'] : '';

              echo " <div class='col-lg-4 col-md-6 my-3'>";
              echo " <div class='card border-0 shadow' style='max-width: 350px; margin : auto;'>";
              echo " <img src='".$row["image"]."'class='card-img-top' alt='...'>";
              echo "<div class='card-body'>";
              echo "<h5 class='card-title'><b>".$row["tipe_room"]."</b></h5>";
              echo " <h6 class = 'mb-4'>Rp ".$row["harga"]."/ night </h6>";
              echo "<div class = 'features mb-4'>";
              echo "<h6 class = 'mb-1'> Features</h6>";
                $sql2 = "SELECT * FROM features INNER JOIN room on features.id_room = room.id_room WHERE room.id_room = 'R003'";
                $res2 = mysqli_query($con, $sql2);
              while($row=mysqli_fetch_array($res2)){
                echo "<span class = 'badge rounded-pill bg-light text-dark text-wrap'>".$row["nama"]."</span>";
              }
            }
              $sql = "SELECT * FROM room WHERE id_room = 'R003' ";
         
              $res1 = mysqli_query($con, $sql);
            
              if(!empty($res1))
              {
                while($row=mysqli_fetch_array($res1))
                {
              echo "</div>";
              echo "<p class='card-text'>".$row["detail"]."</p><br>";
              if (!isset ($_SESSION["id"])){
                echo '<button type="button" class="btn btn-success"  style = "float: right" disabled >Book Now</button>';
              }
              if (isset ($_SESSION["id"])){
                echo " <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#exampleModal' id ='modalButton' style = 'float: right'>Book Now</button>";
              }

                }
            }
          }
        ?>
            

        </div>
        </div>
  </div>

        



      <div class="col-lg-12 text-center">
        <a href = "#" class = "btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Details >>> </a>
      </div>
  </div>
</div>

<!-- Facility -->
<div id = "facility">
   <p id ="judulFasilitas" style = "background-color :rgb(143, 124, 112); height : 3rem; text-align: center; margin-left : 5rem; margin-right: 5rem; margin-button: 3rem;  margin-top: 3rem;" >Facilities</p>
   <div class="container">
    <div class="row justify-content-evenly">
      <!-- <div id = "coba"> -->
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id ="coba">
              <img id = "image1" src="svg/wifi.svg" width = "50%"  onclick = "changeImage()">
              <h5 id= "wifi" style = "margin-top: 1rem">Free Wifi</h5> 
            <script>
                function changeImage(){
                  let displayImage = document.getElementById('image1');
                  var text = document.getElementById("wifi");
                  if(displayImage.src.match('svg/wifi.svg')){
                    displayImage.src = 'fasilitas/wifi.jpg'
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/wifi.svg'
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
          </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
      <img src="svg/parking.svg" width = "40%" onclick = "changeImage2()" id= "image2">
          <h5 id ="parking"style = "margin-top: 0.5rem">Free Parking</h5>
            <script>
                function changeImage2(){
                  let displayImage = document.getElementById('image2');
                  var text = document.getElementById("parking");
                  if(displayImage.src.match('svg/parking.svg')){
                    displayImage.src = 'images/fasilitas/parking2.jpg'
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/parking.svg'
                    displayImage.width = "70";
                    text.style.display= "block";
                  }
                }
            </script>
        
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
          <img src="svg/swimmingpool.svg" width = "50%" onclick = "changeImage3()" id= "image3">
          <h5 id ="pool" style = "margin-top: 0.7rem">Swimming Pool</h5>
            <script>
                function changeImage3(){
                  let displayImage = document.getElementById('image3');
                  var text = document.getElementById("pool");
                  if(displayImage.src.match('svg/swimmingpool.svg')){
                    displayImage.src = 'images/pool2.jpg'
                    // displayImage.src = 'fasilitas/pool2fasil2.jpg'
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/swimmingpool.svg'
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id ="coba">
          <img src="svg/gym.svg" width = "50%" onclick = "changeImage4()" id= "image4">
          <h5 id ="gym"style = "margin-top: 1.3rem">Gym</h5>
            <script>
                function changeImage4(){
                  let displayImage = document.getElementById('image4');
                  var text = document.getElementById("gym");
                  if(displayImage.src.match('svg/gym.svg')){
                    displayImage.src = 'images/fasilitas/gym.jpg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/gym.svg';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
        <img src="svg/playground.png" width = "50%" onclick = "changeImage5()" id= "image5" >
          <h5 id ="playground" style = "margin-top: 0.7rem">Playground</h5>
            <script>
                function changeImage5(){
                  let displayImage = document.getElementById('image5');
                  var text = document.getElementById("playground");
                  if(displayImage.src.match('svg/playground.png')){
                    displayImage.src = 'images/fasilitas/playground1.jpg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/playground.png';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
              </script>
      </div>
    </div>
   </div>
   <div class="container">
    <div class="row justify-content-evenly">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
          <img src="svg/laundry2.png" width = "55%" onclick = "changeImage6()" id= "image6">
          <h5 id ="laundry">Laundry Service</h5>
            <script>
                function changeImage6(){
                  let displayImage = document.getElementById('image6');
                  var text = document.getElementById("laundry");
                  if(displayImage.src.match('svg/laundry2.png')){
                    displayImage.src = 'images/fasilitas/laundry.jpg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/laundry2.png';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>

      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
        <img src="svg/spa.svg" width = "50%" onclick = "changeImage7()" id= "image7">
          <h5 id ="spa" style = "margin-top: 1rem">Spa</h5>
            <script>
                function changeImage7(){
                  let displayImage = document.getElementById('image7');
                  var text = document.getElementById("spa");
                  if(displayImage.src.match('svg/spa.svg')){
                    displayImage.src = 'images/fasilitas/spa.jpg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/spa.svg';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
        <img src="svg/resto.svg" width = "50%" onclick = "changeImage8()" id= "image8">
          <h5 id= "restaurant" style = "margin-top: 0.6rem">Restaurant</h5>
            <script>
                function changeImage8(){
                  let displayImage = document.getElementById('image8');
                  var text = document.getElementById("restaurant");
                  if(displayImage.src.match('svg/resto.svg')){
                    displayImage.src = 'images/fasilitas/dining2.jpeg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/resto.svg';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
      <img src="svg/bar.svg" width = "55%" onclick = "changeImage9()" id= "image9" style = "margin-top: 0.5rem">
          <h5 id = "bar" style = "margin-top: 0.6rem">Bar</h5>
            <script>
                function changeImage9(){
                  let displayImage = document.getElementById('image9');
                  var text = document.getElementById("bar");
                  if(displayImage.src.match('svg/bar.svg')){
                    displayImage.src = 'images/fasilitas/bar.jpg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/bar.svg';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" id = "coba">
        <img src="svg/airport.svg" width = "55%" onclick = "changeImage10()" id= "image10" style = "margin-top: 0.5rem" >
          <h5 id= "shuttle" style = "margin-top: 0.7rem">Airport Shuttle</h5>
            <script>
                function changeImage10(){
                  let displayImage = document.getElementById('image10');
                  var text = document.getElementById("shuttle");
                  if(displayImage.src.match('svg/airport.svg')){
                    displayImage.src = 'images/fasilitas/shuttle.jpg';
                    displayImage.width = "160";
                    text.style.display= "none";
                  }
                  else {
                    displayImage.src = 'svg/airport.svg';
                    displayImage.width = "100";
                    text.style.display= "block";
                  }
                }
            </script>
      </div>
    </div>
</div>

<!-- Review -->
<div id = "review">
   <p id ="judulReview" style = "background-color :rgb(143, 124, 112); height : 3rem; text-align: center; margin-left : 5rem; margin-right: 5rem; margin-button: 3rem;  margin-top: 3rem;" >Review</p>
   <div class = "review-box-container">
    <?php
      $sql= "SELECT * FROM review ORDER BY id_review DESC LIMIT 4";
      $res=mysqli_query($con,$sql);
     if(!empty($res))
     {
      while($row=mysqli_fetch_array($res))
      {
        echo "<div class = 'review-box'>";
        echo "<div class = 'box-top'>";
        echo "<div class = 'profile'>";
        echo "<strong>".$row["nama"]."</strong>";
        echo "<br><h8>".$row["check_in"]."</h8>";
        echo "</div>";
        echo "</div>";
        echo "<div class = 'review'>";
        echo " <p>".$row["detail"]."</p>";
        echo "</div>";
        echo "</div>";
      }
    }
    ?>
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
