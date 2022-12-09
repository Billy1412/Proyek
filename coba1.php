<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Book Now
            </button>
            

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
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
                    <div class="dropdown"><b>Room Type</b> <br>
                      <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Room
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" >Classic Deluxe</a></li>
                        <li><a class="dropdown-item">Classic Twin</a></li>
                        <li><a class="dropdown-item">King Suite</a></li>
                      </ul>
                    </div>
                    <br>
                  <!-- breakfast and smoking room form -->
                  <label class="form-label"><b>Request</b></label>  
                  
                  <div class="row justify-content-center" style = "margin-left : -6rem;">
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
                  <p> *breakfast will be charge additional</p>

                  <!-- request -->
                  <div id = "request">
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