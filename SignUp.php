 
<html>
<head>
<title>
Delanco's Cupcakes
</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: -10;
    overflow: hidden;
    float: right;
    width: 400px;
    background-color: 00CCCC;
}

li {
    float: left;
	width: 100px;	
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: 99FFFF;
}
</style>
</head>
<body>  

<h2><img src="Title Mark.png"></h2>

<ul>
  <li><a class="active" href="homepage.php">Home</a></li>
  <li><a href="menu.html">Menu</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<div class = "wrapper">
<table style = "width:100%">
<tr>
<th>
<style>
form {
    border: 3px solid #f1f1f1;
    width: 25%;
    
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: fff40e;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;

}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $genderErr = $passwordErr = $phonenumberErr "";
$fname = $lname = $address = $email = $gender = $phonenumber = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $fnameErr = "First Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

   if (empty($_POST["name"])) {
    $lnameErr = " Last Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $website = test_input($_POST["address"]);
  }

  if (empty($_POST["phonenumber"])) {
    $phonenumberErr = "";
  } else {
    $comment = test_input($_POST["Phone Number is required"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  align = "center"} else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2 align = "center">
<font  color= 00CCCC>
Create An Account 
</font>
</h2>

<center>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
	?>" method = "post">
<div class = "container">
<font align = "center" color="black">

  <label><b>First Name</b></label>
  <input type="text" placeholder= "First Name" name="fname" required>
  <br>

  <label><b>Last Name</b></label>
  <input type="text" placeholder= "Last Name" name="lname" required>
  <br>

  <label><b>Home Address</b></label>
  <input type = "text" placeholder = "Address" address = "address" required>
  <br>

  <label><b>City</b></label>
  <input type = "text" placeholder = "City" city = "city" required>
  <br>

  <label><b>Phone Number</b></label> 
  <input type="text" placeholder = "Phone Number" number="phonenumber">
  <br>

  <label><b>E-mail</b></label>
  <input type="text" placeholder = "Email" name="email" required>
  <br>

  <label><b>Password</b></label>
  <input type = "password" placeholder = "Password" name = "password" required>
  <br>

  <label><b>Gender</b></label><br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br><br>


  <button type="submit">Create!</button>

</div>
</center>
</font>
</form>



</body>
</html>