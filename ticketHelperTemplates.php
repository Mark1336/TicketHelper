<!--Change Subscription HTML-->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Account</title>
  <link rel="icon" href="images/BillingLogo.png">
  <?php include 'includes.php'; ?>
  <script src="js/instructionTemplates.js"></script>
</head>

<body>
  <!--Include the nav-bar menu-->
  <?php include 'ticketHelperMenu.php'; ?>

<img src="images/BillingLogoLarge.png" style="display:block;margin-left: auto; margin-right: auto;">

<h3>Templates</h3>

<input type="text" value="524288000" id="temp0">
<button onclick="temp0()">Data Storage</button>
<br><br>
<input type="text" value="Promotional credits are automatically applied and can be used on future purchases." id="temp1">
<button onclick="temp1()">Promo Credit Explanation</button>
<br><br>
<input type="text" value="Charge refunded since within time limit. Ticket" id="temp4">
<div class="tooltip">
<button onclick="temp4()" onmouseout="outFunc()">
  <span class="tooltiptext" id="myTooltip2">Copy to clipboard</span>
  Full Refund
  </button>
</div>
<br><br>
<input type="text" value="Office Phone ###-###-#### OPT. 3 Monday-Friday 8:00AM-5:00PM CST. or support@company.com" id="temp2">
<div class="tooltip">
<button onclick="temp2()" onmouseout="outFunc()">
  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
  Contact Informaiton
  </button>
</div>
<br><br>
<input type="textarea" value="(You can put a formula here for refund calculations) Ticket" id="temp3">
<div class="tooltip">
<button onclick="temp3()" onmouseout="outFunc()">
  <span class="tooltiptext" id="myTooltip1">Copy to clipboard</span>
  Refund Calculation
  </button>
</div>
<br><br>Test Area:<br>
<textarea id="textarea">Text</textarea>
<br>

<br><br>Recording Check Template:<br>
<textarea id="mlsCKTempID" rows="4" cols="140">
(Company Name) Check Record
Check Number: #
Check Date:
Check Received in Billing: mm-dd-yyyy
Total Check Amount: (Total Amount on Check)</textarea>
<br><button class="btn" onclick="mlsCKTemp()"><i class="fa fa-clipboard"></i> Copy</button>

<br><br>Billing Response:<br><!--no js-->
<textarea id="crmlsResponseID" rows="4" cols="140">
Hello ,

We have set your account up on the requested plan! You can now login into your account and use it as normal.

Let us know if you need any further assistance and thanks for using Company!

</textarea>
<br><button class="btn" onclick="crmlsResponse()"><i class="fa fa-clipboard"></i> Copy</button>

<br><br>Billing Response:<br><!--no js-->
<textarea id="realCompResponseID" rows="4" cols="140">
Hello ,

We have set your account up on the requested plan! You can now login into your account and use it as normal.

Let us know if you need any further assistance and thanks for using Company!

</textarea>
<br><button class="btn" onclick="realCompResponse()"><i class="fa fa-clipboard"></i> Copy</button>

<!--Billing Update Change-->
<br><br>Error in Billing:<br><!--no js-->
<textarea id="cnNumID" rows="4" cols="140">
Hello ,

You may have received an auto generated email for an account cancellation. You may disregard this notice as your account is unaffected.

This auto notice was sent because we are making some changes on our end. Please note that your billing is unaffected by these changes.
No changes have been made to your account, we are just making some changes on our end to create a better customer experience for you!
</textarea>
<br><button class="btn" onclick="cnNum()"><i class="fa fa-clipboard"></i> Copy</button>

<!--Add a sub account-->
<br><br>Add Account Instructions:<br><!--no js-->
<textarea id="addSubAccountStepsID" rows="4" cols="140">
To add a team member to your account:
1. Log into your account
2. Click your name in the top right corner
3. Select add account
4. Follow the onscreen instructions.
</textarea>
<br><button class="btn" onclick="addSubAccountSteps()"><i class="fa fa-clipboard"></i> Copy</button>

<!--Change Payment Method on file-->
<br><br>Change Payment Method:<br><!--no js-->
<textarea id="chngPayMethodID" rows="4" cols="140">
To change the payment method:
1. Login to your account
2. Click your name in the top right corner
3. Click "Update Card" from the drop down menu
4. Follow the onscreen instructions</textarea>
<br><button class="btn" onclick="chngPayMethod()"><i class="fa fa-clipboard"></i> Copy</button>

<!--Invoices instructions-->
<br><br>Download Invoices:<br><!--no js-->
<textarea id="invoiceInstructionsID" rows="4" cols="140">
To Download Invoices:
1. Login to your account
2. Click your name in the top right corner
3. Click "Invoices" from the drop down menu
4. Download or search for the invoice</textarea>
<br><button class="btn" onclick="invoiceInstructions()"><i class="fa fa-clipboard"></i> Copy</button>

<!--Remove a sub-account-->
<br><br>Remove Account:<br><!--no js-->
<textarea id="removeSubAccountStepsID" rows="4" cols="140">
To remove an account:
1. Log into your account
2. Click your name in the top right corner
3. Click "Remove Account"
4. Follow the on screen instructions.
</textarea>
<br><button class="btn" onclick="removeSubAccountSteps()"><i class="fa fa-clipboard"></i> Copy</button>

<!--Authenticate Email Template-->
<br><br>Authenticate email Email Template:<br><!--no js-->
<textarea id="sendGridEmailTemplateID" rows="4" cols="140">
Hello, please authenticate your domain with your email service.</textarea>
<br><button class="btn" onclick="sendGridEmailTemplate()"> <i class="fa fa-clipboard"></i> Copy</button>

<br><br>Ticket Upgrade Confirmation:<br><!--no js-->
<textarea id="templateWWLID" rows="4" cols="140">
Hello ,

We have upgraded your account!

Thanks for using Company Name!
</textarea>
<br><button class="btn" onclick="templateWWL()"><i class="fa fa-clipboard"></i> Copy</button>

<br><br>Ticket Downgrade Confirmation<br><!--no js-->
<textarea id="templateWOWLID" rows="4" cols="140">
Hello ,

We have downgraded your account!

Thanks for using Company Name!
</textarea>
<br><button class="btn" onclick="templateWOWL()"><i class="fa fa-clipboard"></i> Copy</button>

<script>
function temp0() {
  var copyText = document.getElementById("temp0");
  copyText.select();
  document.execCommand("copy");
  //alert("Copied the text: " + copyText.value);
}

function temp1() {
  var copyText = document.getElementById("temp1");
  copyText.select();
  document.execCommand("copy");
  //alert("Copied the text: " + copyText.value);
}

function temp2() {
  var copyText = document.getElementById("temp2");
  copyText.select();
  document.execCommand("copy");

  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function temp3() {
  var copyText = document.getElementById("temp3");
  copyText.select();
  document.execCommand("copy");

  var tooltip = document.getElementById("myTooltip1");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function temp4() {
  var copyText = document.getElementById("temp4");
  copyText.select();
  document.execCommand("copy");

  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

/*check recording template*/
function mlsCKTemp() {
  let textarea = document.getElementById("mlsCKTempID");
  textarea.select();
  document.execCommand("copy");
}

/*Response for upgrades*/
function crmlsResponse() {
  let textarea = document.getElementById("crmlsResponseID");
  textarea.select();
  document.execCommand("copy");
}

/*Response for upgrades*/
function realCompResponse(){
  let textarea = document.getElementById("realCompResponseID");
  textarea.select();
  document.execCommand("copy");
}

/*Custom Number Ticket for Changes*/
function cnNum() {
  let textarea = document.getElementById("cnNumID");
  textarea.select();
  document.execCommand("copy");
}

function sendGridEmailTemplate(){
  let textarea = document.getElementById("sendGridEmailTemplateID");
  textarea.select();
  document.execCommand("copy");
}

function templateWWL(){
  let textarea = document.getElementById("templateWWLID");
  textarea.select();
  document.execCommand("copy");
}

function templateWOWL(){
  let textarea = document.getElementById("templateWOWLID");
  textarea.select();
  document.execCommand("copy");
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>

</body>
</html>
