<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Formulario</title></head>
<body>
  <h1>Formulario de Usuario</h1>
  <form action="guardar.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Correo: <input type="email" name="correo" required><br><br>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>