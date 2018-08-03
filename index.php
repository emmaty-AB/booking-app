<?php require_once('includes/initialize.php'); ?>

<?php
if(isset($_POST['submit'])) {
    $new_booking->name = $_POST['name'];
    $new_booking->reason = $_POST['reason'];
    $new_booking->start = $_POST['start-time'];
    $new_booking->end = $_POST['closing-time'];
    $new_booking->save();
}

//$sql = "SELECT * FROM qhbooking";
$bookings = Booking::find_all();



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>QH Booking App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link data-n-head="true" rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
  <!-- container conaining the list of bookings -->
  <div class="container landing-page">
    <div class="row h-100 justify-content-center  align-items-center ">
      <div class="col-12 col-sm-6 mx-auto">
        <div class="container" style="background-color: white;">
          <br>
          <div class="alert alert-info heading">
            <h2>Bookings For The Day</h2>
          </div>
          <?php foreach(array_reverse($bookings) as $books): ?>
          <!-- List goes here  -->
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h6><?= $books->name; ?></h6>
                <small><?php echo $books->reason; ?></small>
                <p class="mb-1">
                 <?php echo datetime_to_text($books->start);
                 echo " to "; 
                 echo datetime_to_text($books->end); ?></p>
              </div>
            </a>
            
          </div>
          <?php endforeach; ?>
          <br>
        </div>
        <!--closing container div-->
        <!-- Reservation Button -->
        <div>
          <button class="btn btn-info book" style="border-radius: 55%; font-size: 2em;" type="submit" id="myBtn" data-toggle="tooltip" data-placement="top" title="Add a booking"> <i class="fa fa-plus" aria-hidden="true"></i>
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
             <form action="index.php" enctype="multipart/form-data" method="POST" >              
              <div class="form-group">
                <label for="name" id="usr">What shall we call you?</label>
                <input class="form-control" id="name" name="name" placeholder=" Enter Name" type="text" required>
              </div>
              <div class="form-group">
                <label for="Purpose">Please tell us why you need the room?</label>
                <input class="form-control" id="name" name="reason" placeholder="Enter Purpose" type="text" required>
              </div>
              <label style="vertical-align: middle;" class="form-group" for="Duration">Duration</label>
              <div class="form-row">
                <div class="form-group col-md-5.9">
                  <select name="start-time" class="form-control">
                    <option disabled selected>Select Start Time</option>
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
                  <div class="form-control">-</div>
                </div>
                <div class="form-group col-md-5.9">
                  <select name="closing-time" class="form-control">
                    <option disabled selected>Select Closing Time</option>
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
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-info btn-default apply"><i aria-hidden="true" class="fa fa-plane"></i> Submit</button>
              </div>
              
          </div>
        </form>
          <!-- aDDING Jquery functionality -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <!-- aDDING Script for modal (POPUP) -->
          <script type="text/javascript" src="script.js"></script>
          <!-- aDDING bOOTSTRAP JS functionality -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
          <!-- <script src="https://unpkg.com/unpkg"></script> -->
</body>

</html>