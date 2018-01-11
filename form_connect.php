<?php
$name = $_POST['name'];
$email =$_POST['email'];
$email1 = $_POST['email1'];
$website = $_POST['website'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];


$link = mysql_connect("localhost","root","") or die ("cannot connect through database");
mysql_select_db("hamrocar", $link) or die("cannot select the database");
$query = "INSERT INTO form(name,email,confirm email,website,comment,gender) values ('".$name."','".$email."','".$email1."','".$website."','".$comment."','".$gender."')";
if(!mysql_query($query, $link)){
	die("SORRY");
}
else{
	echo"new record saved successfully";
	header("Location"."Signup_form.php");
}
?>