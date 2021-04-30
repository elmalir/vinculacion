<?php
$vista = view('backend/plantilla/cabecera');
$vista .= view($contenedor);
$vista .= view('backend/plantilla/pie');
echo $vista;
?>