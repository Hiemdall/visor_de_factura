<!DOCTYPE html>
<html>
<head>
	<title>Subir archivos PDF</title>
</head>
<body>
	<h1>Subir archivos PDF</h1>
	<form action="procesar_subir.php" method="post" enctype="multipart/form-data">
		<label for="pdf_files">Selecciona uno o varios archivos PDF:</label>
		<input type="file" name="pdf_files[]" id="pdf_files" multiple>
		<br><br>
		<input type="submit" value="Subir archivos">
	</form>
</body>
</html>