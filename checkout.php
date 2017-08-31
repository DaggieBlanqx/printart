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
  
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" name="Order_Now">Complete Order</button>
</form>
</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col mdl-layout--large-screen-only" ></div>
</div>


<?php @include("base_includes/footer.php");?>