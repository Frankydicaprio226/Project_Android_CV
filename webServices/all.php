<?php

include("db_connect.php");

$response=array();

$req=mysqli_query($cnx, " select * from appcv ");

if(mysqli_num_rows($req) >  0)
{
	
	$tmp=array();
	$response["users"]=array();
	
	while($cur=mysqli_fetch_array($req))
	{
		$tmp["id"]=$cur["id"];
		$tmp["first_name"]= $cur["first_name"];
		$tmp["last_name"]= $cur["last_name"];
		$tmp["age"]=$cur["age"];
		$tmp["email"]=$cur["email"];
		$tmp["adress"]=$cur["adress"];
		$tmp["telephone"]=$cur["telephone"];
		$tmp["specialite"]=$cur["specialite"];
		$tmp["niveauEtude"]=$cur["niveauEtude"];
		$tmp["experienceProfessionnelle"]=$cur["experienceProfessionnelle"];
		
		
		
		array_push($response["users"],$tmp);
	}
	$response["success"]=1;
	echo json_encode($response);
		
}
else
{
	$response["success"]=0;
	$response["message"]="no data found";
	echo json_encode($response);
	
}

?>