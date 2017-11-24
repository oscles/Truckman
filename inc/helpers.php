<?php
// El message
$message = "Línea 1\r\nLínea 2\r\nLínea 3";
// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Enviarlo
mail('caffeinated@example.com', 'Mi título', $message);


