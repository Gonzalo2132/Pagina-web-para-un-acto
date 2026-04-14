<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acto de Colación 2026 | Institución Educativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Página oficial del Acto de Colación 2026. Información sobre el programa, egresados y palabras del rector.">
</head>
<body>

    <header id="inicio" class="hero">
        <div class="container">
            <div class="hero-content">
                <p>Bienvenidos al</p>
                <h1>Acto de Colación de Grado</h1>
                <p>Promoción 2026</p>
            </div>
        </div>
    </header>

    <section id="rector" class="rectors-words reveal">
        <div class="container text-center">
            <div class="section-title">
                <h2>Palabras del Rector</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="speech-preview p-5 rounded-4 shadow-sm">
                        <p class="lead mb-4" style="color: var(--text-light);">"El aprendizaje es un tesoro que seguirá a su dueño a todas partes..."</p>
                        <button type="button" class="btn btn-gold btn-lg px-5 py-3" data-bs-toggle="modal" data-bs-target="#rectorModal">
                            Leer Discurso Completo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="rectorModal" tabindex="-1" aria-labelledby="rectorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-black text-gold">
                    <h5 class="modal-title h3" id="rectorModalLabel">Mensaje del Rector</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="quote-icon text-center mb-4" style="font-size: 4rem; color: #d4af37; opacity: 0.3;">"</div>
                    <p class="lead fst-italic mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                    <hr class="my-4">
                    <div class="text-end">
                        <h5 class="mb-0">Dr. Juan Pérez Rodriguez</h5>
                        <small class="text-muted">Rector de la Institución</small>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <section id="video" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>Transmisión del Acto</h2>
            </div>
            <div class="video-container">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="programa" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>Programa del Evento</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="programa-vertical">
                        <div class="programa-full-btn text-center mt-5">
                            <button id="btnProgramaCompleto">Ver Programa</button>

                            <div id="programaModal" class="modal" style="display:none; position:fixed; z-index:1; left:0; top:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5);">
                                <div class="modal-content" style="background-color:white; margin:15% auto; padding:20px; width:50%;">
                                    <span class="cerrar" style="cursor:pointer; float:right;">&times;</span>
                                    <div class="modal-body">
                                        </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="egresados" class="reveal">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Egresados</h2>
            </div>

            <div class="graduates-wrapper">
                <div class="graduates-column-group">
                    <h3 class="group-title">T.S. en Gastronomía</h3>
                    <div class="graduates-list" id="group-gastronomia"></div>
                </div>

                <div class="graduates-column-group">
                    <h3 class="group-title">T.S. en Agroecología</h3>
                    <div class="graduates-list" id="group-agroecologia"></div>
                </div>

                <div class="graduates-column-group">
                    <h3 class="group-title">T.S. en Enología y Fruticultura</h3>
                    <div class="graduates-list" id="group-enologia">
                    </div>
                </div>

                <div class="graduates-column-group">
                    <h3 class="group-title">T.S. en Análisis y Des. de Software</h3>
                    <div class="graduates-list" id="group-software"></div>
                </div>

                <div class="graduates-column-group">
                    <h3 class="group-title">T.S. en Enfermería</h3>
                    <div class="graduates-list" id="group-enfermeria"></div>
                </div>
            </div>
        </div>
    </section>

    <div id="programaModal" class="modal">
      <div class="contenido-modal">
        <span class="cerrar">&times;</span>
        <div class="cuerpo-guion">
          <?php include 'db_programa.php'; ?>
        </div>
      </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h5>Ubicación</h5>
                    <p>Av. Congreso 726</p>
                    <p>Victoria, Entre Ríos</p>
                    <a href="https://maps.app.goo.gl/YourMapID" target="_blank">Ver en Google Maps</a>
                </div>
                <div class="footer-column">
                    <h5>Agradecimiento</h5>
                    <p style="font-style: italic; color: var(--text-light); margin-bottom: 10px;">Agradecemos profundamente a toda la comunidad educativa, familias y egresados por ser parte de este camino. Su esfuerzo es el corazón de nuestra institución.</p>
                </div>
                <div class="footer-column">
                    <h5>Contacto</h5>
                    <p>Email: info@isgbenavento.edu.ar</p>
                    <p>Tel: 03436 42-2878</p>
                    <p>Horario: 17:20 a 23:00 hs.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Instituto Superior "Gaspar L. Benavento". Todos los derechos reservados.</p>
                <p class="students-credit">Creado por los estudiantes de 3er año de análisis y desarrollo de software</p>
            </div>
        </div>
    </footer>

    <div class="fab-container">
        <div class="fab-menu" id="fabMenu">
            <a href="#inicio">Inicio</a>
            <a href="#rector">Palabras del Rector</a>
            <a href="#video">Video del Acto</a>
            <a href="#programa">Programa</a>
            <a href="#egresados">Egresados</a>
            <a href="#inicio" style="background: rgba(212, 175, 55, 0.2); margin-top: 10px; text-align: center;">↑ Volver arriba</a>
        </div>
        <button id="menuBtn" class="fab">
            <span>MENU</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="scriptcredits.js"></script>
    <script src="scriptmodal.js"></script>
</body>
</html>
