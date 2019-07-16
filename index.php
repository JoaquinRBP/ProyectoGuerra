<?php
if(!empty($_POST['latitud']) && !empty($_POST['longitud'])){
	try{
	$latitud = $_POST['latitud'];
	$longitud = $_POST['longitud'];
	/*$conexion= new PDO("mysql:host=localhost;dbname={basededatos}}","root","");
	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$resultado = $conexion->exec("INSERT INTO prueba (latitud,longitud) VALUES ('$latitud','$longitud');");
	*/
	$connectionInfo = array("UID" => "proyearqui@arquitectura", "pwd" => "Guerron123", "Database" => "gps", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:arquitectura.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	$sql="INSERT INTO prueba(id,contenido) values ('$latitud','$longitud')";
	$resultado=sqlsrv_query($conn,$sql);
	
	if($resultado==false){
		echo "Datos no ingresados";
	}
	else{
		echo "Datos ingresados correctamente.";	
	}
	}
	catch(Exception $e){
		die("Error: ".$e->getMessage());
	}
}
else{
	echo "Datos vacios";
}
?>
