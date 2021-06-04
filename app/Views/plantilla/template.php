<?php
$vista = view('plantilla/cabecera');
$vista .= view($contenedor);
$vista .= view('plantilla/pie');
echo $vista;
?>