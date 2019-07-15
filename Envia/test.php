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
	$longi="".$_POST['longitud'];
	$lati="".$_POST['latitud'];
    $connectionInfo = array("UID" => "proyearqui@arquitectura", "pwd" => "Guerron123", "Database" => "gps", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:arquitectura.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	$datos=$_POST['chipid'];
	$datos1=$_POST['temperatura'];
	$sql="INSERT INTO prueba(id,contenido) values ('$datos','$datos1');";
	$resultado=sqlsrv_query($conn,$sql);
	
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
