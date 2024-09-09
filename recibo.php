<?php
// Verificar si los datos fueron recibidos
$desea_recibir_factura = isset($_GET["desea_recibir_factura"]) ? $_GET["desea_recibir_factura"] : 'No'; 
$genero = isset($_GET["genero"]) ? $_GET["genero"] : 'No lo marco';
$nombre =$_GET["nombre"];
$direccion =$_GET["direccion"];
$correo =$_GET["correo"];
$envio =$_GET["envio"];

// Mostrar los datos recibidos
echo "<h2>Datos de Facturación Recibidos</h2>";
echo "<p><strong>¿Desea recibir la factura?:</strong> $desea_recibir_factura</p>";
echo "<p><strong>Género:</strong> $genero</p>";
echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Dirección:</strong> $direccion</p>";
echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
echo "<p><strong>Forma de Envío de la Factura:</strong> $envio</p>";
?>