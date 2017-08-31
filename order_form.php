<?php @include("base_includes/header.php");?>
	
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only">
		<div class="blanqxspace"></div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<!-- Textfield with Floating Label --> 
<div class="blanqxLegend">
<form action="actions/order_form.php" method="POST">
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
  <div class="blanqxServiceCheckList">Select services you would like to order for:<br>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="service[]" value="Graphic Design" unchecked>
  <span class="mdl-checkbox__label"> Graphic Design</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
  <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="service[]" value="Web Design/Development" unchecked>
  <span class="mdl-checkbox__label">Web Design/Development</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
  <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" name="service[]" value="E-Commerce" unchecked>
  <span class="mdl-checkbox__label">E-Commerce (Sell Online)</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
  <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input" name="service[]" value="Marketing Services" unchecked>
  <span class="mdl-checkbox__label">Marketing Services</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
  <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input" name="service[]" value="Content Development" unchecked>
  <span class="mdl-checkbox__label">Content Development</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
  <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input" name="service[]" value="Hosting" unchecked>
  <span class="mdl-checkbox__label">Hosting</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-7">
  <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input" name="service[]" value="Printing" unchecked>
  <span class="mdl-checkbox__label">Printing</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-8">
  <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input" name="service[]" value="Branding or Logo" unchecked>
  <span class="mdl-checkbox__label">Branding/Logo</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-9">
  <input type="checkbox" id="checkbox-9" class="mdl-checkbox__input" name="service[]" value="Geo-Location" unchecked>
  <span class="mdl-checkbox__label">Geo-Location</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-10">
  <input type="checkbox" id="checkbox-10" class="mdl-checkbox__input" name="service[]" value="Restaurant Services" unchecked>
  <span class="mdl-checkbox__label">Restaurant Services</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-11">
  <input type="checkbox" id="checkbox-11" class="mdl-checkbox__input" name="service[]" value="Menus" unchecked>
  <span class="mdl-checkbox__label">Menus</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-12">
  <input type="checkbox" id="checkbox-12" class="mdl-checkbox__input" name="service[]" value="To-Go Menus" unchecked>
  <span class="mdl-checkbox__label">To-Go Menus</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-13">
  <input type="checkbox" id="checkbox-13" class="mdl-checkbox__input" name="service[]" value="Sluggers" unchecked>
  <span class="mdl-checkbox__label">Sluggers</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-14">
  <input type="checkbox" id="checkbox-14" class="mdl-checkbox__input" name="service[]" value="Tables" unchecked>
  <span class="mdl-checkbox__label">Tables</span>
  </label>
  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-15">
  <input type="checkbox" id="checkbox-15" class="mdl-checkbox__input" name="service[]" value="Others" unchecked>
  <span class="mdl-checkbox__label">Others</span>
  </label>
  </div>
  *Please provide us with as much detail as possible for your project so that we can give you the best possible quote/proposal.Enter the projects details below:<br>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="projectDetails" name="ProjectDetails"></textarea>
    <label class="mdl-textfield__label" for="projectDetails">Project Details</label>
  </div><br>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Order_Now">SUBMIT ORDER</button>
</form>
</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only" ></div>
</div>


<?php @include("base_includes/footer.php");?>