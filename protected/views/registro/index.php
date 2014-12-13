<?php
/* @var $this RegistroController */

$this->breadcrumbs=array(
	'Reporte',
);
?>
<html>
<head>
<style>

#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
</style>



<?php
$list= Yii::app()->db->createCommand('SELECT * FROM Estados E, Parcela Pa WHERE E.estado = Pa.estado;')->queryAll();

$rs=array();
print "<p>Registros encontrados:</p>\n<table border=\"1\">
  <thead>
    <tr class=\"neg\">
      <th>estado</th>
      <th>descripcion </th>
      <th>nivelHumedad</th>
      <th>lugar </th>
      <th>consumo</th>
    </tr>
  </thead>
  <tbody>\n";
foreach($list as $row){
    print "    <tr>
      <td>$row[estado]</td>
      <td>$row[descripcion]</td>
      <td>$row[nivelHumedad]</td>
      <td>$row[lugar]</td>
      <td>$row[consumo]</td>
   
    </tr>\n";
}

print "  </tbody>\n</table>\n";


?>


