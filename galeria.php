<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil 2 - Galería</title>
    <link rel="stylesheet" href="style_interfaz.css"> 
</head>
<body>
    <header>
        <img src="images/resident_evil_2_inicio.jpg" alt="Logo de Resident Evil">
        <nav>
            <ul>
                <li><a href="interfaz.php">Inicio</a></li>
                <li><a href="historia.php">Historia</a></li>
                <li><a href="personajes.php">Personajes</a></li>
                <li><a href="galeria.php">Galería</a></li>
            </ul>
        </nav>
        <button onclick="window.location.href='index.php'">Registrarse</button> 
    </header>
    <main>
        <section id="galeria">
            <div class="contenido">
                <h2>Galería</h2>
                <div class="imagen">
                    <img src="galeria/imagen_1.jpg" alt="Imagen 1">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_2.jpg" alt="Imagen 2">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_3.jpg" alt="Imagen 3">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_4.jpg" alt="Imagen 4">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_5.jpg" alt="Imagen 5">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_6.jpg " alt="Imagen 6">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_7.jpg" alt="Imagen 7">
                </div>
                <div class="imagen">
                    <img src="galeria/imagen_8.jpg" alt="Imagen 8">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Resident Evil. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
