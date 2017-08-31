<?php @include("base_includes/header.php");
      @include("actions/functions.php");
      @require("auth/mastercontrol.php");
?>


<?php
 if (isset($_POST['Message'])) {
 	@$FirstName = $_POST['FirstName'];
 	@$FirstName = CleanUp($FirstName);
 	@$LastName = $_POST['LastName'];
 	@$LastName = CleanUp($LastName);
 	@$CompanyName = $_POST['CompanyName'];
 	@$CompanyName = CleanUp($CompanyName);
 	@$Email = $_POST['Email'];
 	@$Email = CleanUp($Email);
 	@$PhoneNumber = $_POST['PhoneNumber'];
 	@$PhoneNumber = CleanUp($PhoneNumber);
 	@$TheMessage = $_POST['TheMessage'];
 	@$TheMessage = CleanUp($TheMessage);
 	

 	$FeedBackToBrowser = '<div class="mdl-grid">
 	                       <div class="mdl-cell mdl-cell--4-col"></div>
 	                       <div class="mdl-cell mdl-cell--4-col blanqxCenter">
 	                         <style>
 	                         body{
 	                         	background-color:#001e31;
 	                         	color:#fff;
 	                         }
 	                         </style>
 	                         <span class="">Thanks for the message<br>We will contact you back shortly.</span><br>
 	                         <img src="img/test/13.gif" width="50%"/>
 	                       </div>
 	                       <div class="mdl-cell mdl-cell--4-col"></div>
 	                      </div>';

 	echo $FirstName."<br>".$LastName."<br>".$CompanyName."<br>".$Email."<br>".$PhoneNumber."<br>".$TheMessage."<br>".@$FeedBackToBrowser;
     
    $QueryStoreMessage = "INSERT INTO messages(FirstName,LastName,CompanyName,Email,PhoneNumber,Message) VALUES('$FirstName','$LastName','$CompanyName','$PhoneNumber','$TheMessage')";

    $ExecuteStoreMessage = mysqli_query($conn,$QueryStoreMessage);

 }else{

       @include("base_includes/feedback-contact-us_form.php");

      }
?>
<?php @include("base_includes/footer.php");?>