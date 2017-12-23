<?php 


class  Tratamiento
{


function lista()
{
	
try {
	
$conexion   = Conexion::get_conexion();
$query      =  "SELECT  * FROM tratamiento_copia";
$statement  =  $conexion->prepare($query);
$statement->execute();
$result  =  $statement->fetchAll();
return $result;
} catch (Exception $e) {
	echo "Error:".$e->getMessage();
}
}



function agregar($descripcion,$costo)
{
	
try {
	
$conexion   = Conexion::get_conexion();
$query      =  "INSERT INTO tratamiento_copia(descripcion,costo)VALUES(:descripcion,:costo)";
$statement  =  $conexion->prepare($query);
$statement->bindParam(':descripcion',$descripcion);
$statement->bindParam(':costo',$costo);
if ($statement) {
$statement->execute();
return "ok";

} 
else
{
return "error";
}




} catch (Exception $e) {
	echo "Error:".$e->getMessage();
}
}









}





 ?>