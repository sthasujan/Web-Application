<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
  function validateForm() {
    var x = document.forms["myform"]["username"].value;
	var y = document.forms["myform"]["password"].value;
 if (x == null || x == "") {
        alert("Username must be filled out");
        return false;
    }
	 if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
}
  </script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
    <?php
	if(isset($_SESSION['NEW_USER']))
	{
		echo $_SESSION['NEW_USER'];
	}
	?>
  <form name="myform" onsubmit="return validateForm()"role="form" action="form_process.php" method="post">
    <div class="form-group">
      <label for="Email">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter the username" style="max-width:300px">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter the password" style="max-width:300px">
    </div>
	
   
    
    <button type="submit" class="btn btn-primary">Login</button>
	<br>
	<br>
  </form>
</div>

</body>
</html>
