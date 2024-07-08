<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html"); // Redirigir al login si no hay sesión activa
    exit;
}
$privilegio = $_SESSION['privilegio'];
$cedula = $_SESSION['cedula'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speech Development Glossary (SDG)</title>
    <link rel="shortcut icon" href="images/logo_istr.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/estiloAudio.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body>
    <header class="header">
        <nav class="nav container">
            <div id="search-container">
                <input type="text" id="search-bar" placeholder="Buscar en el glosario...">
                <button onclick="buscarTermino()">Buscar</button>
                <?php
            echo "Bienvenido, " . ($privilegio ? 'docente' : 'estudiante') . " con cédula: $cedula";
            echo '<br><a href="logout.php">Cerrar Sesión</a>';
            ?>
            <!-- Boton q debe ocultarse cuando se registra como estudiante-->
            <?php if ($privilegio): ?>
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                    onclick="window.location.href='Registrar_Estudiantes.html'">
                    Registrar Alumno
                </button>
             <?php endif; ?>
            </div>
           
        </nav>
        
        <section class="seccion">
 
            <div class="container">
                <div class="section-content">
                    <!-- Imagen a la izquierda -->
                    <img src="images/logo_istr.png " alt="Imagen Izquierda" class="img-izquierda">
                    <img src="images/carrera.png" alt="Imagen Derecha" class="img-derecha">
                    <h1>Speech Development Glossary (SDG)</h1>
                    <p>Tecnología Superior en Desarrollo de Software</p>
                    <!-- Imagen a la derecha -->
                </div>
            </div>
        </section>

    </header>
    <main>

        <section class="container2">
            <div class="image">
                <img class="portada" src="images/estudiante.jpg" alt="Descriptive Alt Text">
            </div>
            <div class="text">
                <h1>ITS RIOBAMBA TECHNICAL ENGLISH</h1>
                <h2>Welcome to Speech Development Glossary (SDG)</h2>
                <p>
                    Hello Software Development students from the “Riobamba”
                    Higher Technological Institute!
                </p>
                <p>
                    SDG is your essential tool to expand and strengthen your
                    technical vocabulary in the field of software
                    development.
                </p>
                <p>
                    In SDG, you will find a vast bank of technical terms,
                    clear definitions, practical examples and interactive
                    tools to help you improve your understanding and skills
                    in the area.
                </p>
                <p>
                    Start exploring and expanding your knowledge with
                    SDG!
                </p>
            </div>
        </section>
        <div class="Container1">
            <!-- INDICE-->
            <nav class="indice">
                <h2 class="subtitle"> Tabla de Contenidos</h2>
                <div class="fila-indice">
                    <a href="#A">A</a>
                    <a href="#B">B</a>
                </div>
                <div class="fila-indice">
                    <a href="#C">C</a>
                    <a href="#D">D</a>
                </div>
                <div class="fila-indice">
                    <a href="#E">E</a>
                    <a href="#F">F</a>
                </div>
                <div class="fila-indice">
                    <a href="#G">G</a>
                    <a href="#H">H</a>
                </div>
                <div class="fila-indice">
                    <a href="#I">I</a>
                    <a href="#J">J</a>
                </div>
                <div class="fila-indice">
                    <a href="#K">K</a>
                    <a href="#L">L</a>
                </div>
                <div class="fila-indice">
                    <a href="#M">M</a>
                    <a href="#N">N</a>
                </div>
                <div class="fila-indice">
                    <a href="#O">O</a>
                    <a href="#P">P</a>
                </div>
                <div class="fila-indice">
                    <a href="#Q">Q</a>
                    <a href="#R">R</a>
                </div>
                <div class="fila-indice">
                    <a href="#S">S</a>
                    <a href="#T">T</a>
                </div>
                <div class="fila-indice">
                    <a href="#U">U</a>
                    <a href="#V">V</a>
                </div>
                <div class="fila-indice">
                    <a href="#W">W</a>
                    <a href="#X">X</a>
                </div>
                <div class="fila-indice">
                    <a href="#Y">Y</a>
                    <a href="#Z">Z</a>
                </div>
            </nav>
        </div>

        <div class="Glosario" id="glossary">
            <!-- A -->
            <dt>
                <h2 id="A">A</h2>
            </dt>
            <section class="Diccionario" id="dictionary">

                <div class="container text-center mt-5">
                    <div id="wordsContainer1" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>
            <!-- B -->

            <dt>
                <h2 id="B">B</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer2" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- C -->

            <dt>
                <h2 id="C">C</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer3" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- D -->
            <dt>
                <h2 id="D">D</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer4" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>

            </section>

            <!-- E -->

            <dt>
                <h2 id="E">E</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer5" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- F -->

            <dt>
                <h2 id="F">F</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer6" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- G -->

            <dt>
                <h2 id="G">G</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer7" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- H -->

            <dt>
                <h2 id="H">H</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer8" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- I -->

            <dt>
                <h2 id="I">I</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer9" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- J -->

            <dt>
                <h2 id="J">J</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer10" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- K -->

            <dt>
                <h2 id="K">K</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer11" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- L -->

            <dt>
                <h2 id="L">L</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer12" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- M -->

            <dt>
                <h2 id="M">M</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer13" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- N -->
            <dt>
                <h2 id="N">N</h2>
            </dt>
            <section class="Diccionario" id="dictionary">
                <div class="container text-center mt-5">
                    <div id="wordsContainer14" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>
            <!-- O -->
            <dt>
                <h2 id="O">O</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer15" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>
             <!-- P -->          
            <dt>
                <h2 id="P">P</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer16" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>
            <!-- Q -->
            <dt>
                <h2 id="Q">Q</h2>
            </dt>
            <section class="Diccionario">

                <div class="container text-center mt-5">
                    <div id="wordsContainer17" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>
            <!-- R -->
                         <dt>
                <h2 id="R">R</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer18" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>

            </section>
             <!-- S -->
            <dt>
                <h2 id="S">S</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer19" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>

            </section>
             <!-- T -->
             <dt>
                <h2 id="T">T</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer20" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>

            </section>
             <!-- U -->
                 <dt>
                <h2 id="U">U</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer21" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>

            </section>        
            <!-- V -->
                <dt>
                    <h2 id="V">V</h2>
                </dt>
                <section class="Diccionario">
                    <div class="container text-center mt-5">
                        <div id="wordsContainer22" class="d-flex flex-wrap justify-content-center">
                            <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                        </div>
                    </div>

                </section>
            <!-- W -->
                <dt>
                    <h2 id="W">W</h2>
                </dt>
                <section class="Diccionario">
                    <div class="container text-center mt-5">
                        <div id="wordsContainer23" class="d-flex flex-wrap justify-content-center">
                            <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                        </div>
                    </div>
        </section>
        <!-- X -->
            <dt>
                <h2 id="X">X</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer24" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

            <!-- Y -->
    <!-- Sin Palabras -->
            <!-- Z -->
            <dt>
                <h2 id="Z">Z</h2>
            </dt>
            <section class="Diccionario">
                <div class="container text-center mt-5">
                    <div id="wordsContainer25" class="d-flex flex-wrap justify-content-center">
                        <!-- Cartas de palabras se añadirán aquí dinámicamente -->
                    </div>
                </div>
            </section>

        </div>

    </main>
    <section class="titulo1">
        <h1>Teachers </h1>
    </section>

    <div class="gallery">
        <div class="gallery-item">
            <img src="images/blanca.jpg" alt="Imagen 1">
            <div class="name">Lcda. Johanna Arrobo </div>
            <div class="name">Directora</div>
        </div>
        <div class="gallery-item">
            <img src="images/Tecahers/JOHANNA_MARITZA.jpg" alt="Imagen 2">
            <div class="name">Lcda. Blanca Santacruz</div>
            <div class="name">Autora</div>
        </div>
        <div class="gallery-item">
            <img src="images/Tecahers/MARCO_VINICIO.jpg" alt="Imagen 3">
            <div class="name">Ing. Marco Estrada</div>
            <div class="name">Autor</div>
        </div>
        <!-- Agregar más imágenes según sea necesario -->
    </div>


    <footer class="footer">

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="https://www.facebook.com/profile.php?id=100063924558093" class="footer__icons">
                    <img src="./images/facebook.svg" class="footer__img">
                </a>
                <a href="https://wa.me/123456789" target="_blank" class="whatsapp-btn">
                    <img src="images/social.png" alt="Icono de WhatsApp" style="width: 30px; height: 30px; margin-right: 5px;">
                </a>
                <a href="#" class="footer__icons">
                    <img src="./images/twitter.svg" class="footer__img">
                </a>
                <a href="#" class="footer__icons">
                    <img src="./images/youtube.svg" class="footer__img">
                </a>
            </div>
            <h3 class="footer__copyright">
                Derechos reservados
                &copy;
                Mentores P&M
            </h3>
        </section>
    </footer>
    <script src="./js/glosario.js"></script>
    <script src="js/buscarTermino.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/string-similarity/umd/string-similarity.min.js"></script>


</body>
<script>
    document.addEventListener('scroll', function() {
        const container = document.querySelector('.Container1');
        const headerHeight = document.querySelector('.header').offsetHeight;
        const footerHeight = document.querySelector('.footer').offsetHeight;
        const scrollPosition = window.scrollY;

        // Altura del documento y la ventana
        const documentHeight = document.documentElement.scrollHeight;
        const windowHeight = window.innerHeight;

        // Posición del footer desde el top de la página
        const footerFromTop = documentHeight - footerHeight;

        if (scrollPosition < headerHeight || (scrollPosition + windowHeight) > footerFromTop) {
            container.style.opacity = '0'; // Ocultar
        } else {
            container.style.opacity = '1'; // Mostrar
        }
    });
</script>



<script>
    const galleryItems = document.querySelectorAll('.gallery-item');
    let currentIndex = 3; // Comenzamos desde la cuarta imagen

    function loadMore() {
        for (let i = currentIndex; i < currentIndex + 3 && i < galleryItems.length; i++) {
            galleryItems[i].style.display = 'block';
        }
        currentIndex += 3;

        // Ocultar el botón si ya no hay más imágenes por mostrar
        if (currentIndex >= galleryItems.length) {
            document.querySelector('.load-more').style.display = 'none';
        }
    }

    // Mostrar las primeras tres imágenes al cargar la página
    loadMore();
</script>

</html>