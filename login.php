<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar sesión - TuMarca</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f3f6fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 2rem 3rem;
      border-radius: 8px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #2d72d9;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    input {
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    button {
      padding: 0.75rem;
      background: #2d72d9;
      color: white;
      border: none;
      border-radius: 4px;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }
    button:hover {
      background: #174a9c;
    }
    .back-link {
      text-align: center;
      margin-top: 1rem;
    }
    .back-link a {
      color: #2d72d9;
      text-decoration: none;
      font-weight: 500;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Iniciar sesión</h2>
    <form action="validar_login.php" method="POST">
      <input type="text" name="usuario" placeholder="Usuario" required />
      <input type="password" name="password" placeholder="Contraseña" required />
      <button type="submit">Entrar</button>
    </form>
    <div class="back-link">
      <a href="index.html">← Volver al inicio</a>
    </div>
  </div>
</body>
</html>
