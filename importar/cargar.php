<?php
include'../vendor/autoload.php';
include'../autoload.php';
//cargamos el archivo al servidor con el mismo nombre
//solo le agregue el sufijo bak_ 
$archivo   = $_FILES['excel']['name'];
$tipo      = $_FILES['excel']['type'];
$destino   = "bak_" . $archivo;
if (copy($_FILES['excel']['tmp_name'], $destino))
{
#echo "Archivo Cargado Con Éxito";
}
else
{
echo "Error Al Cargar el Archivo";
}

if (file_exists("bak_" . $archivo)) 
{

// Cargando la hoja de cálculo
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load("bak_" . $archivo);
$objFecha = new PHPExcel_Shared_Date();
// Asignar hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);


// Llenamos el arreglo con los datos  del archivo xlsx
for ($i = 2; $i <= 100; $i++)
{

$_DATOS_EXCEL[$i]['a']    = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['b'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['c'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['d'] = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['e'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['f'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['g'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['h'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['i'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['j'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['k'] = $objPHPExcel->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['l'] = $objPHPExcel->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['m'] = $objPHPExcel->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['n'] = $objPHPExcel->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['o'] = $objPHPExcel->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['p'] = $objPHPExcel->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['q'] = $objPHPExcel->getActiveSheet()->getCell('Q' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['r'] = $objPHPExcel->getActiveSheet()->getCell('R' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['s'] = $objPHPExcel->getActiveSheet()->getCell('S' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['t'] = $objPHPExcel->getActiveSheet()->getCell('T' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['u'] = $objPHPExcel->getActiveSheet()->getCell('U' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['v'] = $objPHPExcel->getActiveSheet()->getCell('V' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['w'] = $objPHPExcel->getActiveSheet()->getCell('W' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['x'] = $objPHPExcel->getActiveSheet()->getCell('X' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['y'] = $objPHPExcel->getActiveSheet()->getCell('Y' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['z'] = $objPHPExcel->getActiveSheet()->getCell('Z' . $i)->getCalculatedValue();




}

}

//si por algo no cargo el archivo bak_ 
else 
{
echo "Necesitas primero importar el archivo";
}

$errores = 0;
//recorremos el arreglo multidimensional 
//para ir recuperando los datos obtenidos
//del excel e ir insertandolos en la BD

foreach ($_DATOS_EXCEL as $key => $value)
{


//Query





}
unlink($destino);




?>