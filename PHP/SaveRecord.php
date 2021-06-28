<?php
if (!isset($_SERVER['PATH_INFO']) or $_SERVER['PATH_INFO']=='/') {
			return;
		}

		$this->urlSegments = explode('/', $_SERVER['PATH_INFO']);
		 
		array_shift($this->urlSegments);
		$cutchar = explode("/",$_SERVER['PATH_INFO']);
			
		$serviceProviderName = array_shift($this->urlSegments);
		$serviceProviderFilename = $serviceProviderName;
		include "database.php";
		$con = mysqli_connect($dbaddress,$dbaccount,$dbpassword,"digimktg_base",$dbport);
		$sql= "INSERT INTO `FortuneELuckyDraw`( `times`, `value`, `date_time`) VALUES ('$cutchar[2]','$cutchar[3]','$cutchar[4]')";
		$sqlcheck = mysqli_query($con, $sqlcheck);	
		
		$rec = $sqlcheck->fetch_array();
	
		echo 1;
		
	$con->close();

?>
