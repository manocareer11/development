

<?php

$connection = mysqli_connect('127.0.0.1', 'root', '','temp');
if (mysqli_connect_errno())
{
  echo "<br>Failed to connect to MySQL: " . mysqli_connect_error();
}


if($_GET['type'] == 1)
{
	  $bName = $_GET['flt_brand_name'];
	  $sql_select = "select DISTINCT store_state from store_details where brand = '$bName' order by store_state ";
	  $query = mysqli_query($connection, $sql_select); 

	  $encode = array();
		while($row = mysqli_fetch_assoc($query)) {
		   $encode[] = $row;
		}
		echo json_encode($encode);
}

if($_GET['type'] == 2)
{
	  $bName = $_GET['flt_brand_name'];
	  $sName = $_GET['flt_state_name'];
	  $sql_select = "select DISTINCT store_city from store_details where brand = '$bName' and store_state = '$sName' order by store_city";
	  $query = mysqli_query($connection, $sql_select); 

	  $encode = array();
		while($row = mysqli_fetch_assoc($query)) {
		   $encode[] = $row;
		}
		echo json_encode($encode);
}

if($_GET['type'] == 3)
{
	  $bName = $_GET['flt_brand_name'];
	  $sName = $_GET['flt_state_name'];
	  $cName = $_GET['flt_city_name'];

	  $sql_select = "select  GROUP_CONCAT(`brand`) brand_list, store_address, land_line, email from store_details where store_state = '$sName' and store_city = '$cName' group by store_address, land_line, email order by brand_list";
	  $query = mysqli_query($connection, $sql_select); 

	  $encode = array();
		while($row = mysqli_fetch_assoc($query)) {
		   $encode[] = $row;
		}
		echo json_encode($encode);	

}


?>