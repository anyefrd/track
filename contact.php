
 
<?php include('header.php');
/* include ('DBConnection');
if(isset($_POST['submit'])){
$YourName=$_POST['YourName'];
$YourEmail=$_POST['YourEmail'];	
$YourPhone=$_POST['YourPhone'];
$Message=$_POST['Message'];
$status="Pending";
$query="INSERT INTO `contactus`(`sender_name`, `sender_email`, `msg`, `msg_status`) VALUES ('$YourName','$YourEmail','$YourPhone','$Message','Pending')";
$results=mysqli_query($conn,$query);
if($result){
	echo('<script>alert("Message sent successfully");
	window.location="index.php";
	</script>');	
}else {
	echo ("The message was not submited");
	echo('<script>
	window.location="index.php";
	</script>');
	
}

};


*/
?>

     <!-- end header inner -->

     <!-- end header -->


<!-- contact -->
<br><br>
<div id="contact" class="contact">
  <div class="container-fluid padding_left2">
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
		  
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form class="contact_bg" method="POST" action="contact_us_processor.php">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2>Contact <strong class="yellow">Us:670912857</strong></h2>
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Name" type="text" name="YourName" required="yes" min="1" max="64">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Email" type="text" name="YourEmail" required="yes" min="1" max="64">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Your Phone" type="text" name="YourPhone" required="yes" min="9" max="12">
                </div>
                <div class="col-md-12">
                  <textarea class="textarea" rows="5" placeholder="Message" type="text" name="Message" required="YES" min="1" max="255"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <input type="submit" value="submit" name="submit" class="send">  
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<button type="reset" value="Cancel" name="reset" class="send">Cancel</button>
				</div><br>

              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- end contact -->


<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Facts <strong class="yellow">About Tracking Deal</strong></h2>
                 </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Designed By:</h3>
            <span>Anye Deran S.</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Follow Us</h3>
            <span>Facebook</span>
            <span>Instagram</span>
            <span>Twitter</span>
			
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Contact Us</h3>
            <span>6 70 91 28 57</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Develope In:</h3>
            <span>2024</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>History:</h3>
            <span>lurem profile</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->



    <!--  footer -->
    <?php include('footer.php'); ?>
    <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of HTTTC Kumba,
// Cameroon.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
	 lat: 4.638386,  
      lng: 9.438380
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
	 lat: 4.638386,  
      lng: 9.438380
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>