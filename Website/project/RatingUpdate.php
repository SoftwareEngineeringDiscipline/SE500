<?php


if(isset($_POST['submit'])){
	echo "RatingUpdate";
    
   
	UpdateRating();
    
}

/* session_start(); */
function UpdateRating()
{


$con = mysqli_connect("localhost","spr_erau","asdf", "SE500spr");

if (!$con)
  {
    die('Could not connect: ' . mysqli_connect_error());
  }

mysqli_select_db("SE500spr", $con);

$Value = $_POST['Rating']; 
$Project=$_GET["ID"];
   echo $Project;
  
  $query = "
  UPDATE Projects AS p SET p.Rating_Total = ($Value + p.Rating_Total) AND p.Number_of_Ratings = (1 + p.Number_of_Ratings) WHERE Project_ID = $Project";
		
	
	if (mysqli_query($con, $query)) {
    header("Location:project.php?ID='$Project'");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

	
	mysqli_close($con);
	
}
?>