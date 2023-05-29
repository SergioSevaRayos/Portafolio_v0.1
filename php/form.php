<!DOCTYPE html>
<html>

<body>
    <p><?php print_r($_POST); ?><br></p>
	<p>Nombre: <?php $nombre = $_POST['nombre']; echo $nombre; ?></p>
	<p>Apellidos: <?php $apellidos = $_POST['apellidos']; echo $apellidos; ?></p>
	<p>Teléfono: <?php $telefono = $_POST['telefono']; echo $telefono; ?></p>
	<p>Observaciones: <?php $observaciones = $_POST['observaciones']; echo $observaciones; ?></p>
</body>
</html>
