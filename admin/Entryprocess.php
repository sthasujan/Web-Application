 <?php
 session_start();
 ?>
 <?php
 
$brand = $_POST['Brand'];
$vehicletype=$_POST['Vehicle_Type'];
$selectmodel=$_POST['Select_Model'];
$selectbudget=$_POST['Select_Budget'];
$selectmileage=$_POST['Select_Mileage'];
$selectengine=$_POST['Select_Engine'];
$selecttype=$_POST['Select_Type'];
$target_dir = "../uploads/";
$imageName = rand()*time();
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$target_file;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageNameFull = $imageName.'.'.$imageFileType;
$target_file_new = $target_dir . $imageName.'.'.$imageFileType;
//$created_date = nDate();
echo $_FILES["fileToUpload"]["name"];
if($_FILES["fileToUpload"]["name"] != null){
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
	$_SESSION["upload_exist"] = "Sorry, photo already exists!";
    $uploadOk = 0;
// Check file size
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 5000000) {
	echo "Sorry,your file is too large.";
	$uploadOk =0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
//echo $uploadOk;
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else{
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file_new)){
		echo "the file".basename($_FILES["fileToUpload"]["name"])."has been uploaded";
	}else{
		echo "Sorry, there was ana error uploading your file.";
	}
}	
$link = mysql_connect("localhost", "root", "") or die("Cannot Connect to the database!"); 

mysql_select_db("hamrocar", $link) or die("Cannot select the database!");
$query = "INSERT INTO entry_data (Brand,Vehicle_type,Model,Budget,Mileage,Engine,Type,Photo)"." values('$brand','$vehicletype','$selectmodel','$selectbudget','$selectmileage','$selectengine','$selecttype','$imageNameFull')";// name' set to UNIQUE 
echo $query;
if (!mysql_query($query, $link)) {
	 die("This username already exists...");
} else {
	echo "just";
    echo "New record saved successfully!";
    header("Location:" . "Entry_Form.php");
}
}
?>
