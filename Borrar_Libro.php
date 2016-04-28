<html>

<head>
<title>Registro eliminado.</title>
<META name='robot' content='noindex, nofollow'>
</head>

<body>

<?php
// Actualizamos en funcion del id que recibimos

$id = $_POST['id'];

include('Conexion.php');

$query = "delete from insertar where id = '$id'";
$result = mysql_query($query);



echo "
<p>El registro ha sido eliminado con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
?>

</body>

</html>
