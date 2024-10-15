<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  if ($usuario === 'jperez' && $password === '9999') {
    echo "<h2>Bienvenido al sistema, Juan Pérez.</h2>";
  } else {
    echo "<h2>Usuario y/o Contraseña incorrectos. Intentar nuevamente.</h2>";
  }
} else {
  echo "<h2>Acceso no permitido.</h2>";
}
?>
