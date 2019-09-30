<html>
<head>
<title>Signup</title>
<!--<link href="CSS/login.css" rel="stylesheet" type="text/css">
<link href="CSS/signup.css" rel="stylesheet" type="text/css">-->
<link href="CSS/css.css" rel="stylesheet" type="text/css">
<link href="CSS/try.css" rel="stylesheet" type="text/css">
<link href="CSS/popup.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
		var check = function() 
		{
  				if (document.getElementById('password').value == document.getElementById('cpassword').value) 
  				{
    				document.getElementById('message').style.color = 'green';
    				document.getElementById('message').innerHTML = 'matching';
  				} 
  				else 
  				{
    					document.getElementById('message').style.color = 'red';
    					document.getElementById('message').innerHTML = 'not matching';
  				}
    
</script>
<script>
		// When the user clicks on <div>, open the popup
		function myFunction() 
		{
  				var popup = document.getElementById("myPopup");
  				popup.classList.toggle("show");
		}
</script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body style="background:url(images/back0.jpg); height:100%; width:100%;">
<h2>	
				<font face="Courier New, Courier, monospace" color="#990000"size="6" >PMS Pharmacy Management System</font>
				<a href="login.php" class="fa fa-user-circle" style="float:right"></a>
				<a href="https://www.instagram.com/amrinderss1" class="fa fa-instagram" style="float:right"></a>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" class="fa fa-twitter"style="float:right"></a>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#" class="fa fa-facebook" style="float:right"></a>
		</h2>
		<br>
		<div class="topnav">
  				<a class="active" href="index.php">Home</a>
  				
  				<div class="dropdown">
    				<a href="login.php">Login</a>
    						<div class="dropdown-content">
     								 <a href="#">Customer</a>
     				 				 <a href="#">Shopkeeper</a>
				            </div>
    	 		</div>
  				<a href="#contact">Medicines</a>
 			    <a href="#contact">Contact</a>
 			    <a href="#about">About</a>
 		</div>
 		
 		<div class="register">
 			<div class="container">
 			<form action="regs.php" method="post" id="register">
 				<h1>Sign Up</h1><br>
 				<p>Your Name:</p><br>
 				&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="name" placeholder="Enter your name" required><br>
 				<p>Email ID :</p><br>
 				&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="email" placeholder="Enter your email id" required><br>
 				<p>Phone Number:</p><br>
 				
					 &nbsp;&nbsp;&nbsp;&nbsp;<input type="phone" name="phone" id="phone" placeholder="Enter your 10 digit phone number" required><br>
					 <p>Password:</p><br>
					 &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password" placeholder="create your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
					 <p>Re-Enter Password:</p><br>
					 &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="cpassword" id="confirm_password" placeholder="Re-Enter your created password" required><br>
				 
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Submit" value="submit" id="sub"><br> 				 			<div id="message">
 								 <h3>Password must contain the following:</h3>
  										<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  										<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  										<p id="number" class="invalid">A <b>number</b></p>
  										<p id="length" class="invalid">Minimum <b>8 characters</b></p>
							</div>
						
			 </form>

 </body>
 <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</html>
