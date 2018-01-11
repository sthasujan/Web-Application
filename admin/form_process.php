<?php session_start(); ?>
<?php 
$user = $_POST['username'];
$password=$_POST['password'];


$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("hamrocar", $link) or die("Cannot select the database!");
$query = "SELECT Username,Password FROM login where Username='$user' and Password='$password' ";
$result = mysql_query($query, $link) or die (mysql_error().$query);    
$content = mysql_fetch_array($result);
if($content<=0)
{
    $_SESSION["NEW_USER"] = "INVALID USERNAME/PASSWORD";
	
		header("Location:index.php");
	//header("Location:"."form.php?message='Please sign up first'");
	}
	
	else
	{
		$_SESSION["SS_USER"]='test';
		
	header("Location:"."Entry_Form.php");
}
?>