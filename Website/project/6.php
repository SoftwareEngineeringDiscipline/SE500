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

if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
//展示： 
	 $image = file_get_contents($_FILES["file"]["tmp_name"]);    
	$sql="INSERT INTO $dbName (Project_ID, Project_Name, Project_Description, Source_Code)
VALUES
('$_POST[Project_ID]','$_POST[Project_Name]','$_POST[Project_Description]','$image')";//数据插入到数据库test表中
$search_query = mysqli_query($con, $sql);
if (!$search_query) 
    echo "beng";
else 
	echo "hao";

?>