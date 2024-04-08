<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil 2</title>
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
        <section id="personajes">
            <div class="contenido">
                <h2>Personajes</h2>
                <div class="personaje">
                    <h3>Leon S. Kennedy</h3>
                    <img src="personajes_RE2/Leon_S_Kennedy.jpg" alt="Leon S. Kennedy">
                    <p>Leon es un oficial novato de policía que llega a Raccoon City en su primer día de trabajo. Se ve envuelto en el caos del brote viral mientras intenta cumplir su deber y sobrevivir. Más adelante, se convierte en uno de los principales héroes de la saga Resident Evil.</p>
                </div>

                <div class="personaje">
                    <h3>Claire Redfield</h3>
                    <img src="personajes_RE2/Claire.jpg" alt="Claire Redfield">
                    <p>Claire es una estudiante universitaria que llega a Raccoon City en busca de su hermano desaparecido, Chris Redfield. Se encuentra con Leon durante el brote viral y juntos luchan por sobrevivir y descubrir la verdad. A lo largo de la serie, se convierte en una valiente superviviente y una importante aliada en la lucha contra Umbrella Corporation.</p>
                </div>

                <div class="personaje">
                    <h3>William Birkin</h3>
                    <img src="personajes_RE2/William.jpg" alt="William Birkin">
                    <p>William Birkin es un científico brillante que trabajaba para Umbrella Corporation en el desarrollo del Virus-T. Después de ser traicionado por la compañía, se inyecta a sí mismo con el Virus-T y se transforma en una criatura monstruosa. Es uno de los principales antagonistas del juego y un símbolo del peligro que representa la investigación biológica descontrolada.</p>
                </div>

                <div class="personaje">
                    <h3>Ada Wong</h3>
                    <img src="personajes_RE2/Ada.jpg" alt="Ada Wong">
                    <p>Ada Wong es un personaje misterioso que se cruza en el camino de Leon durante el juego. Aunque inicialmente parece ser una civil atrapada en la ciudad, más tarde se revela que tiene motivaciones ocultas y está involucrada en actividades clandestinas relacionadas con Umbrella Corporation. A lo largo de la serie, su verdadera lealtad es un misterio constante.</p>
                </div>

                <div class="personaje">
                    <h3>Sherry Birkin</h3>
                    <img src="personajes_RE2/Sherry.jpg" alt="Sherry Birkin">
                    <p>Sherry Birkin es la hija de William Birkin y Annette Birkin, dos científicos de Umbrella Corporation. Después de que su padre se convierte en una criatura mutante, Sherry se convierte en un objetivo tanto para Umbrella como para los protagonistas del juego, ya que es portadora de un suero que puede neutralizar el Virus-T. A lo largo de la serie, su historia está marcada por su lucha por la supervivencia y su relación con los personajes principales.</p>
                </div>

                <!-- Puedes agregar más personajes aquí -->
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Resident Evil. Todos los derechos reservados.</p>
    </footer>
</body>
</html>


