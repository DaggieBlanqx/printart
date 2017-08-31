<?php @include("base_includes/header.php");?>
	
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only">
		<div class="blanqxspace"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<!-- Textfield with Floating Label --> 
<div class="blanqxLegend">
<form action="actions/order_form.php" method="POST">
  <?php @include("base_includes/pidd.php");?>
  <br>
  <div class="blanqxServiceCheckList blanqxLegend">Select services you would like to order for:<br>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="service[]" value="Brochures" unchecked>
  <span class="mdl-checkbox__label">Brochures</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
  <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="service[]" value="Flyers" unchecked>
  <span class="mdl-checkbox__label">Flyers</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
  <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" name="service[]" value="Posters" unchecked>
  <span class="mdl-checkbox__label">Posters</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
  <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="service[]" value="Menus" unchecked>
  <span class="mdl-checkbox__label">Menus</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
  <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="service[]" value="Catalogues" unchecked>
  <span class="mdl-checkbox__label">Catalogues</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
  <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input" name="service[]" value="Event Programs" unchecked>
  <span class="mdl-checkbox__label">Event Programs</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-7">
  <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input" name="service[]" value="Invitation Cards" unchecked>
  <span class="mdl-checkbox__label">Invitation Cards</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-8">
  <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input" name="service[]" value="Bookmarks" unchecked>
  <span class="mdl-checkbox__label">Bookmarks</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-9">
  <input type="checkbox" id="checkbox-9" class="mdl-checkbox__input" name="service[]" value="Tent Cards" unchecked>
  <span class="mdl-checkbox__label">Tent Cards</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-10">
  <input type="checkbox" id="checkbox-10" class="mdl-checkbox__input" name="service[]" value="Folders" unchecked>
  <span class="mdl-checkbox__label">Folders</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-11">
  <input type="checkbox" id="checkbox-11" class="mdl-checkbox__input" name="service[]" value="Package Labels" unchecked>
  <span class="mdl-checkbox__label">Package Labels</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-12">
  <input type="checkbox" id="checkbox-12" class="mdl-checkbox__input" name="service[]" value="Others" unchecked>
  <span class="mdl-checkbox__label">Others</span>
  </label>
  </div> <div class="mdl-textfield mdl-js-textfield">
       <input class="mdl-textfield__input" name="Quantity" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="quantity">
       <label class="mdl-textfield__label" for="quantity">Quantity</label>
       <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" name="Height" type="text" id="height">
        <label class="mdl-textfield__label" for="height">(Size)Height eg 8.8</label>
      </div> 
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" name="Width" type="text" id="width">
        <label class="mdl-textfield__label" for="width">(font-size)Width eg 4.8</label>
      </div>
      <br>
      <span id=" ">
       <span style="color: #000;font-size: 15px;opacity: 0.9;">Finish - Lamination:</span><br>
       <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="glossFinish">
        <input type="radio" id="glossFinish" class="mdl-radio__button" name="laminationType" value="Gloss Finish" >
        <span class="mdl-radio__label">Gloss</span>
       </label>
       <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="mattFinish">
        <input type="radio" id="mattFinish" class="mdl-radio__button" name="laminationType" value="Matt Finish">
        <span class="mdl-radio__label">Matt</span>
       </label>
      </span>
      <br>
      <span id=" ">
       <span style="color: #000;font-size: 15px;opacity: 0.9;">Card border-corners:</span><br>
       <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="artCardGloss">
        <input type="radio" id="artCardGloss" class="mdl-radio__button" name="PaperType" value="Art Card Gloss" >
        <span class="mdl-radio__label">Round</span>
       </label>
       <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="artCardMatt">
        <input type="radio" id="artCardMatt" class="mdl-radio__button" name="PaperType" value="Art Card Matt">
        <span class="mdl-radio__label">Square</span>
       </label>
      </span>
      <br>
      <span id=" ">
       <span style="color: #000;font-size: 15px;opacity: 0.9;">Printing Sides:</span><br>
       <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="printBothSides">
        <input type="radio" id="printBothSides" class="mdl-radio__button" name="printSides" value="Print Both Sides" >
        <span class="mdl-radio__label">Print Both Sides</span>
       </label>
       <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="printOneSide">
        <input type="radio" id="printOneSide" class="mdl-radio__button" name="printSides" value="Print One Side">
        <span class="mdl-radio__label">Print One Side</span>
       </label>
      </span>
      <br>
      <hr>
      <span>
       <p id="askForSamples">Sample Files(Artwork / Pre-designs)</p>
       <input type="file" name="artworkSamplesFiles" id="artworkSamplesFiles" class="inputFile" />
       <label class="inputFileArtworkLabel" for="artworkSamplesFiles">Upload art work</label> Attach Sample Artwork / Designs
      </span>
      <br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" placeholder="Datew" name="Width" type="date" id="width">
       <label class="mdl-textfield__label" for="width">Delivery date</label>
      </div>
  <hr>
  *Please provide us with as much detail as possible for your project so that we can give you the best possible quote/proposal.Enter the projects details below:
  <br>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="projectDetails" name="ProjectDetails"></textarea>
    <label class="mdl-textfield__label" for="projectDetails">Project Details</label>
  </div><br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Order_Now">SUBMIT ORDER</button>
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