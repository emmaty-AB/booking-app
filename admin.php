<?php require_once('includes/initialize.php'); ?>

<?php

$users = User::find_all();



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>QH Booking App</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link data-n-head="true" rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  
  <!-- container containing the list of bookings -->
  <div class="container landing-page">
    <div class="row h-100 justify-content-center  align-items-center">
      <div class="col-12 col-sm-11">
        <div class="container" style="background:rgba(255, 255, 255, 0.5);">
          <br>
          <div class="admin-header">
            <div>
              <h1>USERS</h1></div>
            <div>
              <a href="users.html" class="subNotes">
              <button class="btn btn-primary pull-right">BOOKINGS</button>
            </a>
            </div>
            

          <!-- <form class="navbar-form navbar-left">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</form> -->
</div> <br>

<?php foreach(array_reverse($users) as $user): ?>
	<div >
            <a href="#" data-toggle="collapse" class="list-group-item purpose list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="var-name"><?= $user->username; ?></h6>
                <h6><?= $user->first_name; ?></h6>
                <p><span class="contact"><?= $user->last_name ?></span>
                </p>
              </div>
              <div id="reason" class="collapse font-italic var-purpose">...</div>
            </a>

          </div>
<?php endforeach; ?>
          <br>
        </div>
        <!--closing container div-->
        <!-- Reservation Button -->
        <div>
          <button class="btn btn-info book" type="button" id="myBtn" data-toggle="tooltip" data-placement="top" title="Add a booking"> <i class="fa fa-plus" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <div class="container" align="center">
            <h4 class="modal-title"> Make Your Reservation </h4>
            <img src="logo.png" class="img-rounded" class="img-responsive" width="10%">
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <!-- form -->
          <div class="container" class="justify-content-start">
            <!-- <div class="dv-processing alert alert-warning">Booking...</div>
            <div class="dv-notify-success alert alert-success text-center">Great! Booking was successful.</div>
            <div class="dv-notify-failed alert alert-danger text-center">Sorry, your booking failed. Please select an unallocated time</div>
            <form class="dv-add-oneto:qodehubBookings:bookings dv-label:submitted"> -->
              <div class="form-group">
               <!--  <label for="name" id="usr">What shall we call you?</label> -->
                <input class="form-control" id="name" name="name" placeholder=" Enter Name" type="text" required>
                <input class="form-control" id="name" name="week" placeholder=" Enter Name" type="hidden" required>
              </div>
              <div class="form-group">
                <!-- <label for="Purpose">Please tell us why you need the room?</label> -->
                <input class="form-control" id="purpose" name="purpose" placeholder="Enter Purpose" type="text" required>
              </div>
                <div class=" container ">
                  <div class="form-group">
                    <select name="venue" class="form-control">
                      <option disabled selected>Select Venue</option>
                      <option>Training Room</option>
                      <option>Conference Room</option>
                      
                    </select>
                    
                  

              <label style="vertical-align: middle;" class="form-group" for="Duration"></label>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <select name="starttime" class="form-control">
                    <option disabled selected>Start</option>
                    <option value="8:00">8:00</option>
                    <option value="8:30">8:30</option>
                    <option value="9:00">9:00</option>
                    <option value="9:30">9:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                  </select>
                </div>
                <div class="form-group col-md-0.2">
                  <div class="form-control text-center">-</div>
                </div>
                <div class="form-group col-md-3">
                  <select name="closetime" class="form-control">
                    <option disabled selected>Close</option>
                    <option value="8:30">8:30</option>
                    <option value="9:00">9:00</option>
                    <option value="9:30">9:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                  </select>
                </div>

                <div >
                        <input data-date-format="dd/mm/yyyy" id="datepicker" style="margin-left: 1em;width: 8vw; margin-top: 0.3em;">
                    </div>
                </div>
                    
                </div>

              </div>

            

           <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-info btn-default apply btnReload">
             <!--  <i aria-hidden="true" class="fa fa-plane"></i>  -->
            Submit</button>
        </div>
    </div> 
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script> 
<script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script>

<script type="text/javascript" src="script.js"></script>
    </body>
</html>
