<?php

include ("db_connect.php");

$response=array();

if( isset($_GET["adress"]) 
	AND isset($_GET["email"]) 
    AND isset($_GET["specialite"]) 
	AND isset($_GET["experience_professionnelle"])
	AND isset($_GET["first_name"]) 
	AND isset($_GET["last_name"]) 
	AND isset($_GET["niveau_etude"]) 
	AND isset($_GET["telephone"]) AND isset($_GET["age"]) )
	
{
	$adress=$_GET["adress"];
	$email = $_GET["email"];
	$specialite = $_GET["specialite"];
	$experience_professionnelle=$_GET["experience_professionnelle"];
	$first_name = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$niveau_etude = $_GET["niveau_etude"];
	$telephone = $_GET["telephone"];
	$age = $_GET["age"];
	
	
	$req=mysqli_query($cnx, " insert into appcv(adress,email,specialite,
	experience_professionnelle,first_name,last_name,niveau_etude,
	telephone,age) values('$adress','$email',
	'$specialite','$experience_professionnelle', 
	'$first_name','$last_name','$niveau_etude','$telephone', '$age') ");
	
	
	if($req)
	{
	$response["success"]=1;
	$response["message"]="inserted !";
	
	echo json_encode($response);
	
	}
	else
		{
			
	$response["success"]=0;
	$response["message"]="request error";
	
	echo json_encode($response);	
		
	}
	
	}
else
{
	$response["success"]=0;
	$response["message"]="required field is missing";
	
	echo json_encode($response);	
}

?>
