<?php 


class  Paciente
{


function lista()
{
	
try {
	
$conexion   = Conexion::get_conexion();
$query      =  "SELECT  * FROM paciente_copia";
$statement  =  $conexion->prepare($query);
$statement->execute();
$result  =  $statement->fetchAll();
return $result;
} catch (Exception $e) {
	echo "Error:".$e->getMessage();
}
}



function agregar($codigo,$nombres,$apellidos,$direccion,$estado,$fecha_creacion)
{
	
try {
	
$conexion   = Conexion::get_conexion();
$query      =  "INSERT INTO paciente_copia(codigo,nombres,apellidos,direccion,estado,fecha_creacion)VALUES(:codigo,:nombres,:apellidos,:direccion,:estado,:fecha_creacion)";
$statement  =  $conexion->prepare($query);
$statement->bindParam(':codigo',$codigo);
$statement->bindParam(':nombres',$nombres);
$statement->bindParam(':apellidos',$apellidos);
$statement->bindParam(':direccion',$direccion);
$statement->bindParam(':estado',$estado);
$statement->bindParam(':fecha_creacion',$fecha_creacion);
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