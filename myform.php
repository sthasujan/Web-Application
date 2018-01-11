 <?php
$name = $_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phoneno'];
$password=$_POST['password'];
//$role = "normal_user";
$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("hamrocar", $link) or die("Cannot select the database!");
$query = "INSERT INTO sign_up (Name,Address,Age,Gender,Email,Contact_Number,Password) values('". $name ."','". $address ."','". $age ."','". $gender ."','". $email ."','". $phone ."','". $password ."')";// name' set to UNIQUE 
echo $query;
if (!mysql_query($query, $link)) {
	 die("This username already exists...");
} else {
	echo "just";
    echo "New record saved successfully!";
    header("Location:" . "form.php");
}
?>
