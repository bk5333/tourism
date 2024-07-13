<?php 
if(isset($_GET['id'])){
    $packages = $conn->query("SELECT * FROM `packages` where md5(id) = '{$_GET['id']}'");
    if($packages->num_rows > 0){
        foreach($packages->fetch_assoc() as $k => $v){
            $$k = $v;
        }
    }


$review = $conn->query("SELECT r.*,concat(firstname,' ',lastname) as name FROM `rate_review` r inner join users u on r.user_id = u.id where r.package_id='{$id}' order by unix_timestamp(r.date_created) desc ");
$review_count =$review->num_rows;
$rate = 0;
$feed = array();
while($row= $review->fetch_assoc()){
    $rate += $row['rate'];
    if(!empty($row['review'])){
        $row['review'] = stripslashes(html_entity_decode($row['review']));
        $feed[] = $row;
    }
}
if($rate > 0 && $review_count > 0)
$rate = number_format($rate/$review_count,0,"");
$files = array();
if(is_dir(base_app.'uploads/package_'.$id)){
    $ofile = scandir(base_app.'uploads/package_'.$id);
    foreach($ofile as $img){
        if(in_array($img,array('.','..')))
        continue;
        $files[] = validate_image('uploads/package_'.$id.'/'.$img);
    }
}
}
?>

<style>
section.page-section{
	align-items: center;
}
</style>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
            <div id="tourCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
      <div class="carousel-inner h-100">
          <?php foreach($files as $k => $img): ?>
          <div class="carousel-item  h-100 <?php echo $k == 0? 'active': '' ?>">
              <img class="d-block w-100  h-100" src="<?php echo $img ?>" alt="">
          </div>
          <?php endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#tourCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#tourCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
                <div class="w-100">
                    <hr class="border-warning">
                    <h5>Ratings (<?php echo $review_count ?>)</h5>
                    <div>
                        <div class="stars">
                                <input disabled class="star star-5" id="star-5" type="radio" name="star" <?php echo $rate == 5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label> 
                                <input disabled class="star star-4" id="star-4" type="radio" name="star" <?php echo $rate == 4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label> 
                                <input disabled class="star star-3" id="star-3" type="radio" name="star" <?php echo $rate == 3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label> 
                                <input disabled class="star star-2" id="star-2" type="radio" name="star" <?php echo $rate == 2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label> 
                                <input disabled class="star star-1" id="star-1" type="radio" name="star" <?php echo $rate == 1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label> 
                        </div>
                    </div>
                    <hr>
                    <div class="w-100 d-flex justify-content-between">
                        <span class="rounded-3 btn bg-gray btn-primary btn-flat btn-sm d-flex align-items-center  justify-content-between"><i class="fa fa-tag"></i> <span class="ml-1"><?php echo number_format($cost) ?></span></span>
                        <button class="btn btn-flat btn-secondary" type="button" id="book">Book Now</button>

                        

<!DOCTYPE html>
<html>
<head>
    
    <!-- Include Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Additional CSS for styling -->
    <style>
        /* Center the modal content vertically */
        .modal-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 80vh; /* Adjust this value to your preference */
        }

        /* Style for form inputs */
        .form-control {
            border-radius: 0;
        }

        /* Style for "Confirm Booking" button */
        #confirmBooking {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        #confirmBooking:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <script>
        $(function(){
    var selectedSeat = null;

    $('#seatSelector').change(function() {
        selectedSeat = $(this).val(); // Store the selected seat value
    });

    $('#book').click(function(){
        if ("<?php echo $_settings->userdata('id') ?>" > 0) {
            // Open the customer details modal
            $('#customerDetailsModal').modal('show');
        } else {
            uni_modal("", "login.php", "large");
        }
    });

    // Handle confirm booking button click within the modal
    $('#confirmBooking').click(function() {
        // Get customer details from the form
        var customerName = $('#name').val();
        $('#customerDetailsModal').modal('hide');
    });
});

    </script>
</body>
</html>




                </div>
</div>
                <br>

                
                        <span class="rounded-3 btn bg-gray btn-primary btn-flat btn-sm d-flex align-items-center  justify-content-between"><span class="ml-1">
                        <label for="sel_seats" style="font-size: 15px;"> Select Seats &nbsp;&nbsp;&nbsp;

    
<select id="seatSelector" style="width: 310px; height: 25px; align-content: center;" required>
<?php

$seatsQuery = $conn->query("SELECT SUM(seats) AS total_seats FROM book_list WHERE md5(package_id) = '{$_GET['id']}'");
if ($seatsQuery) {
$seatsRow = $seatsQuery->fetch_assoc();
$bookedSeats = $seatsRow['total_seats'];

$availableSeats = $seats - $bookedSeats; // Calculate available seats

if ($availableSeats <= 0) {
    echo '<option value="0">No seats available</option>'; // Display "No seats available"
} else {
    for ($i = 1; $i <= $availableSeats; $i++) {
        echo '<option value="' . $i . '">' . $i . '</option>';
    }
}
} else {
// Handle query error
echo '<option value="0">No seats available</option>'; // Display an error option
}

?>


</select>
                        </span></span>


                    
                

            </div>
            <div class="col-md-7">
                <h3><?php echo $title ?></h3>
                <hr class="border-warning">
                <small class='text-muted'>Location: <?php echo $tour_location ?></small>
                <h4>Details</h4>
                <div><?php echo stripslashes(html_entity_decode($description)) ?></div>
                <hr>
                <h5>Reviews (<?php echo count($feed) ?>)</h5>
                <hr class="border-primary">
                <?php foreach($feed as $r): ?>
                <div class="w-100 d-flex justify-content-between  align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo validate_image('assets/img/user.jpg') ?>" class="border mr-3 review-user-avatar" alt="">
                        <span><?php echo $r['name'] ?></span>
                    </div>
                    <span class='text-muted'><?php echo date("Y-m-d H:i A",strtotime($r['date_created'])) ?></span>
                </div>
                <div class="w-100 review-feedback">
                    <?php echo $r['review'] ?>
                </div>
                <hr class='border-light'>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
$(function(){
    var selectedSeat = null;

    $('#seatSelector').change(function() {
        selectedSeat = $(this).val(); // Store the selected seat value
    });

    $('#book').click(function(){
        if ("<?php echo $_settings->userdata('id') ?>" > 0) {
            uni_modal("Details", "book_form.php?package_id=<?php echo $id ?>&seats=" + selectedSeat);
            
        } else {
            uni_modal("", "login.php", "large");
        }
    });
});
</script>