<?php @include("base_includes/header.php");?>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only">
		<div class="blanqxspace"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<!-- Textfield with Floating Label --> 
<div class="blanqxLegend">
<form action="#" method="POST">
  
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
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
    <input class="mdl-textfield__input" type="text" id="sample1" value="" readonly tabIndex="-1">
    <label for="sample1" class="mdl-textfield__label">Paper for insides</label>
    <ul for="sample1" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
        <li class="mdl-menu__item">Bond Paper</li>
        <li class="mdl-menu__item">Art Paper</li>
        <li class="mdl-menu__item">Catridge Paper</li>
        <li class="mdl-menu__item">Please advice</li>
    </ul>
  </div>
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