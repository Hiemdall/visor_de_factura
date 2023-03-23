<?php

if(isset($_POST['nombre'])){
    
    //$filename = 'F' . $_POST['nombre'] . '.pdf';

    
     $filename = $_POST['nombre'] . '.pdf';

    // Establecer el tipo de contenido como PDF
    header('Content-type: application/pdf');

    // Forzar la descarga del archivo con un nombre específico
    header('Content-Disposition: inline; filename="' . $filename . '"');

    // Leer y enviar el contenido del archivo al navegador
    readfile($filename);
}
?> 