<?php @include("base_includes/header.php");?>

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-phone">
    <?php @include("base_includes/dbusiness_cards_pricing.php");?>
  </div>
  <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone">
    <!-- Textfield with Floating Label --> 
    <div class="blanqxLegend">
     <form action="actions/order_form.php" method="POST">
      <?php @include("base_includes/piid.php");?>
      <div class="mdl-textfield mdl-js-textfield">
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
        <label class="mdl-textfield__label" for="width">(Size)Width eg 4.8</label>
      </div>
      <br>
      <!--
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
      -->
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
  <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-phone blanqxcenter" >
    <?php @include("base_includes/side_payment_options.php");?>
    <br>
    <?php @include("base_includes/side_contacts.php");?>
  </div>
</div>

<?php @include("base_includes/footer.php");?>