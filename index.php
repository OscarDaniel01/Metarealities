<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Revho-Inspirado</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Poppins', sans-serif;
      color: #111;
      background-color: #fff;
      scroll-behavior: smooth;
    }
    nav {
      position: fixed;
      top: 0;
      width: 100%;
      background: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 1rem 2rem;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav .logo {
      font-weight: 700;
      font-size: 1.3rem;
      color: #2d72d9;
    }
    nav ul {
      display: flex;
      list-style: none;
      gap: 2rem;
    }
    nav a {
      text-decoration: none;
      color: #111;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    nav a:hover {
      color: #2d72d9;
    }
    header {
      height: 100vh;
      background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('fondo.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 0 2rem;
    }
    .hero h1 {
      font-size: 3.2rem;
      font-weight: 600;
    }
    .hero p {
      font-size: 1.3rem;
      margin-top: 1rem;
    }
    .cta {
      margin-top: 2rem;
      display: inline-block;
      background: #2d72d9;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .cta:hover {
      background: #174a9c;
    }
    section {
      padding: 5rem 2rem;
      max-width: 1000px;
      margin: auto;
    }
    section:nth-child(even) {
      background: #f9f9f9;
    }
    h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #2d72d9;
    }
    p {
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .external-links {
      margin-top: 2rem;
      text-align: center;
    }
    .external-links a {
      margin: 0 1rem;
      color: #2d72d9;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s;
    }
    .external-links a:hover {
      color: #174a9c;
    }
    footer {
      background: #111;
      color: white;
      text-align: center;
      padding: 2rem 1rem;
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">Metarealidad</div>
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#acerca">Acerca</a></li>
      <li><a href="#contacto">Contacto</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <header id="inicio">
    <div class="hero">
      <div>
        <h1>Metarealidades Cognitivas</h1>
        <p>Un lugar donde acumulo ideas que transforman a la realidad.</p>
        <a href="#contacto" class="cta">Contáctame</a>
      </div>
    </div>
  </header>

  <section id="servicios">
    <h2>Servicios</h2>
    <p>Ofrecemos soluciones modernas de diseño y desarrollo web, optimizadas para generar resultados y reflejar tu identidad profesional.</p>
  </section>

  <section id="acerca">
    <h2>Acerca de Nosotros</h2>
    <p>Somos un equipo apasionado por el diseño funcional, centrado en la experiencia del usuario, el rendimiento y la estética. Nuestro objetivo es ayudarte a comunicar valor a través de una web que impacte.</p>
  </section>

  <section id="contacto">
    <h2>Contacto</h2>
    <p>¿Listo para comenzar tu proyecto? Escríbenos y te responderemos en breve.</p>
    <a href="mailto:ejemplo@correo.com" class="cta">Enviar mensaje</a>
    <div class="external-links">
      <h3>Visítanos en:</h3>
      <a href="https://github.com/OscarDaniel01" target="_blank" rel="noopener">GitHub</a>
      <a href="https://www.linkedin.com/in/oscar-daniel-chávez-gallardo-b952501a7" target="_blank" rel="noopener">LinkedIn</a>
      <a href="https://revho.com/es/" target="_blank" rel="noopener">Revho</a>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Tu Marca. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
