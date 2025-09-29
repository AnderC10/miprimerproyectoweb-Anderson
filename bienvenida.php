<?php
// Recibir el nombre del usuario desde registro.php
$nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : "Usuario";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Proyecto Anderson Pedroza</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>¡Bienvenido al Proyecto Anderson Pedroza!</h1>
        <p>Hola <strong><?php echo $nombre; ?></strong>, gracias por registrarte.</p>
    </header>

    <main>
        <section class="form-container">
            <h2>Análisis y Desarrollo de Software</h2>
            <p>
                Este proyecto tiene como objetivo aplicar principios de ingeniería de software para 
                diseñar, desarrollar y optimizar aplicaciones eficientes, seguras y escalables.
            </p>

            <h3>📌 ¿Qué encontrarás aquí?</h3>
            <ul>
                <li>✔️ Material de apoyo sobre análisis de requerimientos.</li>
                <li>✔️ Buenas prácticas en diseño y arquitectura de software.</li>
                <li>✔️ Técnicas modernas de desarrollo y programación.</li>
                <li>✔️ Recursos para el trabajo en equipo y gestión de proyectos.</li>
            </ul>

            <h3>🚀 Próximos pasos</h3>
            <p>
                Explora la plataforma, revisa los recursos disponibles y empieza a 
                formar parte de una comunidad dedicada al desarrollo de soluciones tecnológicas.
            </p>

            <div style="text-align: center; margin-top: 1.5rem;">
                <img src="images/software-team.jpg" alt="Equipo de desarrollo" style="width: 100%; border-radius: 10px;">
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Proyecto Anderson Pedroza | Análisis y Desarrollo de Software</p>
    </footer>
</body>
</html>
