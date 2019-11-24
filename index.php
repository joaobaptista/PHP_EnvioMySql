<?php 
$conn = mysqli_connect('localhost','root','','gtfs');

$open = fopen('routes.txt','r');

while (!feof($open)) 
{
	$getTextLine = fgets($open);
	$explodeLine = explode(",",$getTextLine);
	
	list($route_id,$agency_id,$route_short_name,$route_desc,$route_type, $route_url, $route_color, $route_text_color) = $explodeLine;
	
	$qry = "insert into routes (route_id,agency_id,route_short_name,route_desc,route_type,route_url,route_color,route_text_color) values('".$route_id."','".agency_id."','".$route_short_name."','".$route_desc."','".$route_type."','".$route_url."','".$route_color."','".$route_text_color."')";
	mysqli_query($conn,$qry);
}

fclose($open);


?>
