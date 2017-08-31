<?php @include("base_includes/header.php");?>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only">
		<div class="blanqxspace"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<!-- Textfield with Floating Label --> 
<div class="blanqxLegend">
<form action="actions/order_form.php" method="POST">
 <br>What do you require designed (Description)<br>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="projectDetails" name="ProjectDetails"></textarea>
    <label class="mdl-textfield__label" for="projectDetails">Project Details</label>
  </div><br>


  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" name="TypeOfBook" type="text" id="typeOfBook">
    <label class="mdl-textfield__label" for="typeOfBook">Who is the target audience</label>
  </div>
  	<p id="askForSamples">Sample Files(Artwork / Pre-designs)</p>
  	<input type="file" name="artworkSamplesFiles" id="artworkSamplesFiles" class="inputFile" />
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
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Order_Now">SUBMIT ORDER</button>
</form>
</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only" ></div>
</div>

<?php @include("base_includes/footer.php");?>