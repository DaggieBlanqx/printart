<?php @include("base_includes/header.php");?>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only">
		<div class="blanqxspace"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<!-- Textfield with Floating Label --> 
<div class="blanqxLegend">
<form action="#" method="POST">
  
  What do you want to be designed for you:<br>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "2" id="projectDetails" name="OrderNotes"></textarea>
    <label class="mdl-textfield__label" for="projectDetails">Description</label>
  </div><br>
  Our designer may call you for clarification in
addition to the above description<br>
Please upload sketch or sample and anything
else needed or that will help to create your design.<br>
We will send you our design brief questionnaire
Upload materials
  <br> <hr>
  <span>
  	<p id="askForSamples">Sample Files(Artwork / Pre-designs)</p>
  	<input type="file" name="artworkSamplesFiles" id="artworkSamplesFiles" class="inputFile" />
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
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="projectDetails" name="OrderNotes"></textarea>
    <label class="mdl-textfield__label" for="projectDetails">Other Details</label>
  </div><br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Office_Stationary_Order" id="submitOrder">SUBMIT ORDER</button>
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