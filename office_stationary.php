<?php

@require("auth/mastercontrol.php");
@require("actions/functions.php");
 
if (isset($_POST['Office_Stationary_Order'])) {
  @$TypeOfBook = $_POST['TypeOfBook'];
  @$TypeOfBook = CleanUp($TypeOfBook);
  @$Quantity = $_POST['Quantity'];
  @$Quantity = CleanUp($Quantity);
  @$BookSize = $_POST['BookSize'];
  @$BookSize = CleanUp($BookSize);
  @$ProductionCopy = $_POST['ProductionCopy'];
  @$ProductionCopy = CleanUp($ProductionCopy);
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

  
  
  @$OrderDetails = "Type Of Book: ".$TypeOfBook."<br>Quantity : ".$Quantity."<br> Book Size: ".$BookSize."<br> Production Copies : ".$ProductionCopy."<br> Printing Sides : ".$PrintSides."<br> Delivery Date : ".$DeliveryDate."<br>Notes for the Order: ".$ProjectDetails."<br> Sample files: ".$UploadsDestination."<br>".$OrderNumber;

  //echo "Order Number: #".$OrderNumber."<hr>Delivery Date : ".$DeliveryDate."<hr>".$OrderDetails;
  $OrderSummary = "Office Stationary &nbsp; >>>Type Of Book :".$TypeOfBook."&nbsp; Quantity :".$Quantity;


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
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
    <input class="mdl-textfield__input" name="TypeOfBook" type="text" id="sample1" value="" readonly tabIndex="-1">
    <label for="sample1" class="mdl-textfield__label">Type Of Book</label>
    <ul for="sample1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
        <li class="mdl-menu__item">Invoice Book</li>
        <li class="mdl-menu__item">Delivery Book</li>
        <li class="mdl-menu__item">Receipt Book</li>
        <li class="mdl-menu__item">Order Book</li>
        <li class="mdl-menu__item">Captain Order Book</li>
        <li class="mdl-menu__item">LPO Book</li>
        <li class="mdl-menu__item">Other</li>
    </ul>
  </div>
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" name="Quantity" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="quantity">
    <label class="mdl-textfield__label" for="quantity">Quantity</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  <span id=" ">
  <br>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="A6">
    <input type="radio" id="A6" class="mdl-radio__button" name="BookSize" value="A6">
    <span class="mdl-radio__label">A6</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="A5">
    <input type="radio" id="A5" class="mdl-radio__button" name="BookSize" value="A5">
    <span class="mdl-radio__label">A5</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="A4">
    <input type="radio" id="A4" class="mdl-radio__button" name="BookSize" value="A4">
    <span class="mdl-radio__label">A4</span>
  </label>
  </span>
  <br> 
  <span id=" ">
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="duplicate">
    <input type="radio" id="duplicate" class="mdl-radio__button" name="ProductionCopy" value="Duplicate">
    <span class="mdl-radio__label">Duplicate</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="triplicate">
    <input type="radio" id="triplicate" class="mdl-radio__button" name="ProductionCopy" value="Triplicate">
    <span class="mdl-radio__label">Triplicate</span>
  </label>
  </span>
  <br> 
  <span id=" ">
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="printBothSides">
    <input type="radio" id="printBothSides" class="mdl-radio__button" name="PrintSides" value="Print Both Sides" >
    <span class="mdl-radio__label">Print Both Sides</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="printOneSide">
    <input type="radio" id="printOneSide" class="mdl-radio__button" name="PrintSides" value="Print One Side">
    <span class="mdl-radio__label">Print One Side</span>
  </label>
  </span>
  <br> <hr>
  <span>
  	<p id="askForSamples">Sample Files(Artwork / Pre-designs)</p>
  	<input type="file" name="ArtworkSamplesFiles" id="artworkSamplesFiles" class="inputFile" multiple="" />
    <label class="inputFileArtworkLabel" for="artworkSamplesFiles">Upload art work</label> Attach samples of artwork here
  </span>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="DeliveryDate" type="date" id="width">
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
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Office_Stationary_Order" type="submit">Complete Order</button>
  </span>
</form>
</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only" >
   <?php @include("base_includes/side_payment_options.php");?>
    <br>
    <?php @include("base_includes/side_contacts.php");?> 
  </div>
</div>

<?php @include("base_includes/footer.php");?>