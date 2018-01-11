<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fetching Into Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="container-fluid" bgcolor="red">
 
  <p><h3><center><b>Car Details</b></center></h3></p>
  
               
                   
                    <p>
                        <?php
                        $link = mysql_connect("localhost", "root", "");
                        if(!$link)
                            echo("Cannot Connect to the database!");

                        mysql_select_db("hamrocar", $link) or die("Cannot select the database!");
						if(isset($_POST['search'])){
	$searchq = $_POST['search'];
    $searchq=mysql_real_escape_string($_POST['search']);
	//$searchq = preg_replace ('#[^a-zA-Z0-9?!]#i','', $searchq);
	if ($_POST['filter1']=="search by brand"){
		$query = "SELECT * FROM entry_data WHERE Brand LIKE '".$searchq."'  ORDER BY Brand ASC" ;

	}elseif($_POST['filter1']=="search by model"){
		$query = "SELECT * FROM entry_data WHERE Model LIKE '".$searchq."'  ORDER BY Model ASC" ;
	}elseif($_POST['filter1']=="search by budget"){
		$query = "SELECT * FROM entry_data WHERE Budget LIKE '".$searchq."'  ORDER BY Budget ASC" ;
	}elseif($_POST['filter1']=="search by type"){
		$query = "SELECT * FROM entry_data WHERE Type LIKE '".$searchq."'  ORDER BY Type ASC" ;
	}
	$query;
		$resource = mysql_query($query,$link);
		$row = mysql_fetch_assoc($resource);
        if(!$row){
		echo "No Results Found.";
	}elseif($searchq==''){
		echo " No results Found";
	}
    else{
			echo "<table align=\"center\" border=\"0\" width=\"70%\" class=\"table table-hover\">
                                <tr>
								    <td class=\"info\"><center><b>Brand</b></center></td>
                                    <td class=\"danger\"><center><b>Vehicle Type</b></center></td> 
                                    <td class=\"active\"><center><b>Model</b></center></td>
                                    <td class=\"success\"><center><b>Budget</b></center></td>
                                    <td class=\"warning\"><center><b>Mileage</b></center></td>
									<td class=\"info\"><center><b>Engine</b></center></td>
									<td class=\"danger\"><center><b>Type</b></center></td>
                                    
                                    
                                    
                                </tr> ";
	}
	
					
						do
	                    {
	echo "
	<tr>
	<td ><center>" . $row['Brand'] . "</center></td>
	<td ><center>" . $row['Vehicle_type'] . "</center></td>
	<td ><center>" . $row['Model'] . "</center></td>
	<td ><center>" . $row['Budget'] . "</center></td>
	<td ><center>" . $row['Mileage'] . "</center></td>
	<td ><center>" . $row['Engine'] . "</center></td>
	<td ><center>" . $row['Type'] . "</center></td>
	<td><center><img src='uploads/".$row['Photo']."' height='200px' /> </center></td>`
	</tr>";
	       }while($row=mysql_fetch_array($resource));
	}
				
	?>
	</p>
 
</div>
</body>
</html>