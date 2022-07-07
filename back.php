<?php

$nameprueba = 'Kaio';
$name = $_GET['name'];
$resultadoVal = false;

if ($nameprueba == $name){
$resultadoVal = "true";
}

echo $resultadoVal;
echo '
<script language="JavaScript" type="text/javascript" src="script.js" ></script>
<script>enviar(',$name,');</script>';
?>
