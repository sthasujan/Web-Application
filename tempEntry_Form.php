<!DOCTYPE html>
<html lang="en">
<head>
<title>ADMIN PANNEL</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h4><font color="#2424B2">ADMIN ENTRY FORM</font></h4>
<form action="Entryprocess.php" method="post" enctype="multipart/form-data">
 BRAND:<br>
<input list="Brand" name="Brand">
<datalist id="Brand">
  <option value="Hyundai">
  <option value="Maruti">
  <option value="Honda">
  <option value="Toyota">
  <option value="Suzuki">
  <option value="Volkaswagen">
  <option value="Skoda">
  <option value="Tata">
  <option value="Ford">
  <option value="Mahindra">
  <option value="Chevrolet">
</datalist><br>
  VEHICLE TYPE:<br>
  <input list="Vehicle Type" name="Vehicle_Type">
    <datalist id="Vehicle Type">
    <option value="Hatchback">
    <option value="Minivan">
    <option value="SUV">
    <option value="Sedans">
    <option value="MUV">
	<option value="Convertible">
	<option value="Coupe">
	</datalist>
  
<br>
MODEL:<br>
<input type="varchar" name="Select_Model">
<br>
  BUDGET:<br>
  <input type="varchar" name="Select_Budget">
  <br><br>
  MILEAGE:<br>
  <input type="varchar" name="Select_Mileage">
  <br><br>
  ENGINE:<br>
  <input type="varchar" name="Select_Engine">
  <br><br>


  
SELECT IMAGES: <input type="file" name="fileToUpload" id="fileToUpload" multiple>
<br>
  <input type="submit" name="submit"> <br>
</form>
</form>
</div>
</body>
</html>