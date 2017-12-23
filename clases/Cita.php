<?php 


class  Cita
{


function lista()
{
	
try {
	
$conexion   = Conexion::get_conexion();
$query      =  "SELECT  * FROM cita_cab_copia";
$statement  =  $conexion->prepare($query);
$statement->execute();
$result  =  $statement->fetchAll();
return $result;
} catch (Exception $e) {
	echo "Error:".$e->getMessage();
}
}



function agregar($codigo,$tratamiento,$costo,$descuento,$cantidad,$fecha,$hora)
{
	
try {
	
$conexion   = Conexion::get_conexion();
$query      =  "INSERT INTO cita_cab_copia(codigo,tratamiento,costo,descuento,cantidad,fecha,hora)VALUES(:codigo,:tratamiento,:costo,:descuento,:cantidad,:fecha,:hora)";
$statement  =  $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->bindParam(':tratamiento',$tratamiento);
$statement->bindParam(':costo',$costo);
$statement->bindParam(':descuento',$descuento);
$statement->bindParam(':cantidad',$cantidad);
$statement->bindParam(':fecha',$fecha);
$statement->bindParam(':hora',$hora);
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