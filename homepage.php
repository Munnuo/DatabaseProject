<?php
   ob_start();
   session_start();

	$_Server = "localhost";
	$_username = "";
	$_pass = "";
	$_dbname = "group 3";

	$conn = new mysqli($_Server, $_username, $_pass, $_dbname);

	if(mysqli_connect_error()){
	die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; 
?>

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
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
  <div class="imgcontainer">

  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" 
required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:00CCCC">
    <a href="SignUp.php"><button type="button" class="cancelbtn">Create an Account</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</th>
</table>

hi everyone
</div>
</body>



<footer class = "footer">
<center><img src="Footer Mark.png"></center>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    width: 400px;
}

li {
	width: 100px;	
}

li a {
    display: list-item;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
}
</style>
<div class = "nav_bottom">
	<div class = "column">
		<ol list-style-type = none>
			<li><a href = "contactus.html"> Contact Us </a></li>
			<li><a href = "news.html"> News </a></li>
		</ol>
	</div>
	<div class = "column">
		<ol>
			<li><a href = "forum.html"> Forums </a></li>
		</ol>
	</div>
	<div class = "nav_bottom lower">
	
	<p class="copyright">&copy; <span></span> De Lanclo's Cupcakes, Inc. All rights reserved.</p>
	</div>
</div>
</footer>

</htmt>
