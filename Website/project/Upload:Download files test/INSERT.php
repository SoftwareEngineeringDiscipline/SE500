<?php
$dbName="Projects";

	
	//$conn=mysqli_connect($serverName, $userName, $password);	//create connection
	$con = mysqli_connect("localhost","spr_erau","asdf","SE500spr");

if (!$con)
  {
    die('Could not connect: ' . mysql_connect_error());
  }
else {
echo " succeded logging into the database!"; 
}
$db=mysqli_select_db($con, "SE500spr");
if (!$db){		//check connection
			die("failed to connect SE500spr: " . mysql_error());
	}	
	else{
      echo " succededed logging into the SE500spr database!";  
    } 
$sql="INSERT INTO $dbName (Project_ID, Project_Name)
VALUES 
('30','ll50')";
$search_query = mysqli_query($con, $sql);
if (!$search_query) 
    echo "beng1";
else 
	echo "hao1";

while ($row = mysqli_fetch_row($search_query))
{
	echo $row[0];
	echo $row[1];
	echo $row[2];
	echo $row[3];
}
mysqli_close($con);
?>