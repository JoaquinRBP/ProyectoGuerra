<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Incluir</title>
</head>
<body>
	<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $connectionInfo = array("UID" => "proyearqui@arquitectura", "pwd" => "Guerron123", "Database" => "gps", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:arquitectura.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	$datos="Holasdsef".$_GET['chipid'];
	$datos1="Azure".$_GET['temperatura'];
	$sql="INSERT INTO prueba(id,contenido) values ('$datos','$datos1');";
	$resultado=sqlsrv_query($conn,$sql);
	
	$longi=$_POST['longitud'];
	$lati=$_POST['latitud'];
	echo "La longitud es: ".$longi;
	echo "La latitud es: ".$lati;
	echo "Datos recogidos correctamente";	
}
catch (Exception $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
	
</body>
</html>
