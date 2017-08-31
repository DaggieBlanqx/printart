<?php

@require("auth/mastercontrol.php");
@require("actions/functions.php");
 
if (isset($_POST['Presentation_folder_Order'])) {

  @$Quantity = $_POST['Quantity'];
  @$Quantity = CleanUp($Quantity);
  @$Height = $_POST['Height'];
  @$Height = CleanUp($Height);
  @$Width = $_POST['Width'];
  @$Width = CleanUp($Width);
  @$laminationType = $_POST['laminationType'];
  @$laminationType = CleanUp($laminationType);
  @$PaperType = $_POST['PaperType'];
  @$PaperType = CleanUp($PaperType);
  @$PrintSides = $_POST['PrintSides'];
  @$PrintSides = CleanUp($PrintSides);
  @$DeliveryDate = $_POST['DeliveryDate'];
  @$DeliveryDate = CleanUp($DeliveryDate);
  @$ProjectDetails = $_POST['ProjectDetails'];
  @$ProjectDetails = CleanUp($ProjectDetails);


  @$ClientPhone = $_POST['PhoneNumber'];
  @$ClientPhone = CleanUp($ClientPhone);
  @$ClientEmail = $_POST['Email'];
  @$ClientEmail = CleanUp($ClientEmail);
  @$ClientName = $_POST['FullName'];
  @$ClientName = CleanUp($ClientName);
  @$ClientCompanyName = $_POST['companyName'];
  @$ClientCompanyName = CleanUp($ClientCompanyName);

  @$OrderNumber = rand();
  
  @$ArtworkSamplesFilesName = $_FILES["ArtworkSamplesFiles"]["name"];
  @$ArtworkSamplesFilesType = $_FILES["ArtworkSamplesFiles"]["type"];
  @$ArtworkSamplesFilesSize = ($_FILES["ArtworkSamplesFiles"]["size"]/1024);
  @$ArtworkSamplesFilesTmpName = $_FILES["ArtworkSamplesFiles"]["tmp_name"];
  @$ArtworkSamplesFilesTypeExtension = pathinfo($ArtworkSamplesFilesName,PATHINFO_EXTENSION);
  @$UploadsDestination = "uploads/".$OrderNumber.".".$ArtworkSamplesFilesTypeExtension;
  move_uploaded_file($ArtworkSamplesFilesTmpName, $UploadsDestination);

  
  
  @$OrderDetails = "Quantity: ".$Quantity."<br>Height : ".$Height."<br> Width: ".$Width."<br> Paper Type : ".$PaperType."<br> Printing Sides : ".$PrintSides."<br> Lamination Type : ".$laminationType."<br> Delivery Date : ".$DeliveryDate."<br>Notes for the Order: ".$ProjectDetails."<br> Sample files: ".$UploadsDestination."<br>".$OrderNumber;

  //echo "Order Number: #".$OrderNumber."<hr>Delivery Date : ".$DeliveryDate."<hr>".$OrderDetails;

  $OrderSummary = "Presentation Folder &nbsp; >>>Height :".$Height."&nbsp; Quantity :".$Quantity;


  $InsertOrder = "INSERT INTO orders(OrderNumber, ClientEmail, ClientPhone,ClientName, OrderDetails,OrderSummary, DeliveryDate, FileLink,FileType) VALUES('$OrderNumber', '$ClientEmail', '$ClientPhone','$ClientName', '$OrderDetails', '$OrderSummary','$DeliveryDate', '$UploadsDestination', '$ArtworkSamplesFilesType')";
  $ExecuteQuery = mysqli_query($conn,$InsertOrder);

}

?>

<?php @include("base_includes/header.php");?>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only">
		<div class="blanqxspace"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<!-- Textfield with Floating Label --> 
<div class="blanqxLegend">
<form action="#" method="POST" enctype="multipart/form-data">
 <span id="orderInfo">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" name="Quantity" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="quantity">
    <label class="mdl-textfield__label" for="quantity">Quantity</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="Height" type="text" id="height">
    <label class="mdl-textfield__label" for="height">Height</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="Width" type="text" id="width">
    <label class="mdl-textfield__label" for="width">Width</label>
  </div>
  <br>
  <span id=" ">
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="artCardGloss">
    <input type="radio" id="artCardGloss" class="mdl-radio__button" name="PaperType" value="Art Card Gloss" >
    <span class="mdl-radio__label">Art Card Gloss</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="artCardMatt">
    <input type="radio" id="artCardMatt" class="mdl-radio__button" name="PaperType" value="Art Card Matt">
    <span class="mdl-radio__label">Art Card Matt</span>
  </label>
  </span>
  <br> 
  <span id=" ">
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="glossFinish">
    <input type="radio" id="glossFinish" class="mdl-radio__button" name="laminationType" value="Gloss Finish" >
    <span class="mdl-radio__label">Gloss Finish</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="mattFinish">
    <input type="radio" id="mattFinish" class="mdl-radio__button" name="laminationType" value="Matt Finish">
    <span class="mdl-radio__label">Matt Finish</span>
  </label>
  </span>
  <br> 
  <span id=" ">
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="printBothSides">
    <input type="radio" id="printBothSides" class="mdl-radio__button" name="printSides" value="Print Both Sides" >
    <span class="mdl-radio__label">Print Both Sides</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="printOneSide">
    <input type="radio" id="printOneSide" class="mdl-radio__button" name="printSides" value="Print One Side">
    <span class="mdl-radio__label">Print One Side</span>
  </label>
  </span>
  <br> <hr>
  <span>
  	<p id="askForSamples">Sample Files(Artwork / Pre-designs)</p>
  	<input type="file" name="ArtworkSamplesFiles" id="artworkSamplesFiles" class="inputFile" />
    <label class="inputFileArtworkLabel" for="artworkSamplesFiles">Upload art work</label>
  </span>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" placeholder="Datew" name="Width" type="date" id="width">
    <label class="mdl-textfield__label" for="width">Delivery date</label>
  </div>
   
  <br>
  *Please provide us with as much detail as possible for your project so that we can give you the best possible quote/proposal.Enter the projects details below:<br>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="projectDetails" name="ProjectDetails"></textarea>
    <label class="mdl-textfield__label" for="projectDetails">Other Details</label>
  </div><br>
  <span class="blanqxButton blanqxHidden" id="next">N E X T</span>
  </span>
  <span id="deliveryInfo">
  <hr><span class="blanqxCenter">
  SHIPPING/DELIVERY INFORMATION
  </span>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="FullName" type="text" id="fullName">
    <label class="mdl-textfield__label" for="fullName">Full Name</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="CompanyName" type="text" id="companyName">
    <label class="mdl-textfield__label" for="companyName">Company Name</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="Email" type="text" id="email">
    <label class="mdl-textfield__label" for="email">Email Address</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" name="PhoneNumber" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="phoneNumber">
    <label class="mdl-textfield__label" for="phoneNumber">Phone Number</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div><br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Presentation_folder_Order">SUBMIT ORDER</button>
</form>
</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only" ></div>
</div>

<?php @include("base_includes/footer.php");?>