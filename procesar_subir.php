<?php

//**************************************************/

// Verificamos que se hayan enviado archivos
if ($_FILES['pdf_files']['name'][0]) {
  // Definimos la ruta donde se guardarán los archivos
  $ruta = "";
  
 

  // Recorremos cada archivo y lo procesamos por separado
  foreach ($_FILES['pdf_files']['tmp_name'] as $key => $tmp_name) {
    // Definimos las variables necesarias
    $nombre_archivo = $_FILES['pdf_files']['name'][$key];
    $tipo_archivo = $_FILES['pdf_files']['type'][$key];
    $tamano_archivo = $_FILES['pdf_files']['size'][$key];
    $temp_archivo = $_FILES['pdf_files']['tmp_name'][$key];
    
    // Definimos la ruta completa del archivo
    $ruta_archivo = $ruta . $nombre_archivo;

    // Verificamos que el archivo no exista en la ruta especificada
    if (!file_exists($ruta_archivo)) {
      // Movemos el archivo desde la ruta temporal a la ruta definitiva
      if (move_uploaded_file($temp_archivo, $ruta_archivo)) {
        echo "El archivo $nombre_archivo se subió correctamente.<br>";
      } else {
        echo "Ocurrió un error al subir el archivo $nombre_archivo.<br>";
      }
    } else {
      echo "El archivo $nombre_archivo ya existe en la ruta especificada.<br>";
    }
  }
}
?>
