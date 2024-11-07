<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raimondi Educa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="Raimondi Educa Logo" style="height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#preguntas">Preguntas Frecuentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#carreras">Carreras Técnicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursos">Cursos Libres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#egresados">Egresados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Capa negra -->
        <div class="overlay"></div>
        
        <!-- Contenido de la sección -->
        <div class="hero-content">
            <h1>Forma tu futuro en <br> Raimondi Educa</h1>
            <a class="btn btn-light mt-3" href="#carreras">Conoce nuestras carreras</a>
        </div>
        
        <!-- Formulario de solicitud -->
        <div class="form-container">
            <h5 class="text-center">SOLICITAR INFORMACIÓN</h5>
            <form id="infoForm">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nombres" name="nombres" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Número de contacto" name="contacto" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Correo Electrónico" name="correo" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Carrera de Interés:</label>
                    <div>
                        <input type="radio" class="form-check-input" name="tipoCarrera" value="tecnicas" onclick="updateSelectOptions()"> Carreras Técnicas
                        <input type="radio" class="form-check-input" name="tipoCarrera" value="libres" onclick="updateSelectOptions()"> Cursos Libres
                    </div>
                </div>
                <div class="mb-3">
                    <label for="carreraSelect">Selecciona una opción:</label>
                    <select class="form-select" id="carreraSelect" name="carrera" required> <!-- Asegúrate de tener el atributo name aquí -->
                        <option selected disabled>Seleccione...</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-solicitar">SOLICITAR</button>
            </form>
        </div>
    </section>
    <!-- Preguntas Frecuentes Section -->
    <section class="faq-section" id="preguntas">
        <h2 class="faq-title">Preguntas frecuentes</h2>
        <div class="container">
            <div class="row g-4">
                <!-- FAQ Card -->
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal1">
                        <span class="faq-icon">↗️</span>
                        <p>¿Cuánto dura el programa?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal2">
                        <span class="faq-icon">↗️</span>
                        <p>¿Quién es elegible?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal3">
                        <span class="faq-icon">↗️</span>
                        <p>¿Qué sucede si me pierdo un taller programado?</p>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal4">
                    <span class="faq-icon">↗️</span>
                    <p>¿Hay algún requisito previo?</p>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal5">
                        <span class="faq-icon">↗️</span>
                        <p>¿Cómo puedo inscribirme?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal6">
                        <span class="faq-icon">↗️</span>
                        <p>¿Ofrecen certificados al finalizar?</p>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal7">
                    <span class="faq-icon">↗️</span>
                    <p>¿Cuáles son los métodos de pago disponibles?</p>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal8">
                        <span class="faq-icon">↗️</span>
                        <p>¿Puedo acceder al contenido de manera virtual?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="faq-card position-relative" data-bs-toggle="modal" data-bs-target="#faqModal9">
                        <span class="faq-icon">↗️</span>
                        <p>¿Qué sucede si no puedo completar el programa?</p>
                    </div>
                </div>
                <!-- Repetir las tarjetas según sea necesario -->
            </div>
        </div>
    </section>

    <!-- FAQ Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="faqModal1" tabindex="-1" aria-labelledby="faqModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel1">¿Cuánto dura el programa?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    La duración del programa es de X meses, adaptada a los contenidos y horarios seleccionados.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="faqModal2" tabindex="-1" aria-labelledby="faqModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel2">¿Quién es elegible?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Todos aquellos interesados en mejorar sus habilidades en el área seleccionada pueden inscribirse.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="faqModal3" tabindex="-1" aria-labelledby="faqModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel3">¿Qué sucede si me pierdo un taller programado?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Puedes recuperar el contenido en la próxima sesión o solicitar el material adicional.
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4 -->
    <div class="modal fade" id="faqModal4" tabindex="-1" aria-labelledby="faqModalLabel4" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel4">¿Hay algún requisito previo?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    No, no hay requisitos previos. Todos los interesados pueden inscribirse, independientemente de su experiencia.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="faqModal5" tabindex="-1" aria-labelledby="faqModalLabel5" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel5">¿Cómo puedo inscribirme?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Puedes inscribirte en nuestra página web llenando el formulario de inscripción o visitando nuestra sede.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="faqModal6" tabindex="-1" aria-labelledby="faqModalLabel6" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel6">¿Ofrecen certificados al finalizar?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sí, ofrecemos un certificado de finalización para todos los participantes que completen el programa satisfactoriamente.
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 7 -->
    <div class="modal fade" id="faqModal7" tabindex="-1" aria-labelledby="faqModalLabel7" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel7">¿Cuáles son los métodos de pago disponibles?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Aceptamos pagos con tarjeta de crédito, débito, transferencias bancarias y pagos en efectivo en nuestra sede.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 8 -->
    <div class="modal fade" id="faqModal8" tabindex="-1" aria-labelledby="faqModalLabel8" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel8">¿Puedo acceder al contenido de manera virtual?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sí, ofrecemos acceso virtual a todos los contenidos del programa para que puedas estudiar a tu propio ritmo.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 9 -->
    <div class="modal fade" id="faqModal9" tabindex="-1" aria-labelledby="faqModalLabel9" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="faqModalLabel9">¿Qué sucede si no puedo completar el programa?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    En caso de no poder completar el programa, puedes reprogramarlo o solicitar un reembolso parcial según nuestra política.
                </div>
            </div>
        </div>
    </div>
    <!-- Carreras Técnicas Section -->
    <section class="careers-section" id="carreras">
        <h2 class="careers-title">Carreras Técnicas</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Career Card -->
                <div class="col-md-4">
                    <div class="career-card" data-bs-toggle="modal" data-bs-target="#careerModal1">
                        <img src="carrera1.png" alt="Administración">
                        <div class="career-info">
                            <p class="career-title">ADMINISTRACIÓN</p>
                            <p>Toma control de tu propio crecimiento</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="career-card" data-bs-toggle="modal" data-bs-target="#careerModal2">
                        <img src="carrera2.png" alt="Diseño Gráfico">
                        <div class="career-info">
                            <p class="career-title">DISEÑO GRÁFICO</p>
                            <p>Genera confianza en tu equipo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="career-card" data-bs-toggle="modal" data-bs-target="#careerModal3">
                        <img src="carrera3.png" alt="Recursos Humanos">
                        <div class="career-info">
                            <p class="career-title">RECURSOS HUMANOS</p>
                            <p>Da y recibe retroalimentación</p>
                        </div>
                    </div>
                </div>
                <!-- Añadir más tarjetas según sea necesario -->
            </div>
        </div>
    </section>

    <!-- Career Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="careerModal1" tabindex="-1" aria-labelledby="careerModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModalLabel1">Administración</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Lo que aprenderás:</h6>
                    <ul>
                        <li>Gestión de proyectos</li>
                        <li>Planificación estratégica</li>
                        <li>Administración de recursos</li>
                        <li>Gestión financiera</li>
                    </ul>
                    <button class="btn btn-primary">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="careerModal2" tabindex="-1" aria-labelledby="careerModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModalLabel2">Diseño Gráfico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Lo que aprenderás:</h6>
                    <ul>
                        <li>Teoría del color</li>
                        <li>Uso de herramientas de diseño</li>
                        <li>Creación de identidad visual</li>
                        <li>Diseño para medios digitales</li>
                    </ul>
                    <button class="btn btn-primary">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="careerModal3" tabindex="-1" aria-labelledby="careerModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="careerModalLabel3">Recursos Humanos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Lo que aprenderás:</h6>
                    <ul>
                        <li>Gestión de personal</li>
                        <li>Evaluación de desempeño</li>
                        <li>Reclutamiento y selección</li>
                        <li>Comunicación efectiva</li>
                    </ul>
                    <button class="btn btn-primary">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cursos Libres Section -->
    <section class="courses-section" id="cursos">
        <h2 class="text-center mb-5">Cursos Libres</h2>
        <div class="container">
            <!-- Categoría: Office -->
            <div class="category-title">OFFICE</div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="1.png" alt="Excel Básico - Office 365">
                        <div class="course-info">
                            <p class="course-title">EXCEL BÁSICO - OFFICE 365</p>
                            <p>Incrementa tu impacto</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="2.png" alt="Microsoft Office 365 Intermedio">
                        <div class="course-info">
                            <p class="course-title">MICROSOFT OFFICE 365 INTERMEDIO</p>
                            <p>Empodera a los demás</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="3.png" alt="Excel para los Negocios - Office 365">
                        <div class="course-info">
                            <p class="course-title">EXCEL PARA LOS NEGOCIOS - OFFICE 365</p>
                            <p>Liderazgo sostenible</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categoría: Exportación -->
            <div class="category-title">EXPORTACIÓN</div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="4.png" alt="Operador de Aduanas">
                        <div class="course-info">
                            <p class="course-title">OPERADOR DE ADUANAS</p>
                            <p>Incrementa tu impacto</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="5.png" alt="Importación desde China">
                        <div class="course-info">
                            <p class="course-title">IMPORTACIÓN DESDE CHINA</p>
                            <p>Empodera a los demás</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="6.png" alt="Transporte Aduanero">
                        <div class="course-info">
                            <p class="course-title">TRANSPORTE ADUANERO</p>
                            <p>Liderazgo sostenible</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categoría: Gastronomía -->
            <div class="category-title">GASTRONOMÍA</div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="7.png" alt="Coctelería">
                        <div class="course-info">
                            <p class="course-title">COCTELERÍA</p>
                            <p>Incrementa tu impacto</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="8.png" alt="Bartender Profesional">
                        <div class="course-info">
                            <p class="course-title">BARTENDER PROFESIONAL</p>
                            <p>Empodera a los demás</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <img src="9.png" alt="Pastelería">
                        <div class="course-info">
                            <p class="course-title">PASTELERÍA</p>
                            <p>Liderazgo sostenible</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Egresados de Éxito Section -->
    <section class="graduates-section" id="egresados">
        <h2 class="graduates-title">Egresados de éxito</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Graduate Card -->
                <div class="col-md-6">
                    <div class="graduate-card">
                        <img src="img1.png" alt="Eduardo Games" class="graduate-image">
                        <div class="graduate-info">
                            <p class="graduate-name">EDUARDO GAMES</p>
                            <p>Ganó un premio a nivel internacional y está logrando más cosas de las que hablaremos y profundizaremos más en el artículo...</p>
                            <a href="#" class="more-link">SABER MÁS ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="graduate-card">
                        <img src="img2.png" alt="Cursos Cortos" class="graduate-image">
                        <div class="graduate-info">
                            <p class="graduate-name">GIMENA CUEVAS PRADERA</p>
                            <p>Ganó un premio a nivel internacional y está logrando más cosas de las que hablaremos y profundizaremos más en el artículo...</p>
                            <a href="#" class="more-link">SABER MÁS ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="graduate-card">
                        <img src="img3.png" alt="Arturo Carrión" class="graduate-image">
                        <div class="graduate-info">
                            <p class="graduate-name">ARTURO CARRIÓN</p>
                            <p>Ganó un premio a nivel internacional y está logrando más cosas de las que hablaremos y profundizaremos más en el artículo...</p>
                            <a href="#" class="more-link">SABER MÁS ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="graduate-card">
                        <img src="img4.png" alt="Talleres de Fitness" class="graduate-image">
                        <div class="graduate-info">
                            <p class="graduate-name">MARIA ESPINOZA DE LAS CASAS</p>
                            <p>Ganó un premio a nivel internacional y está logrando más cosas de las que hablaremos y profundizaremos más en el artículo...</p>
                            <a href="#" class="more-link">SABER MÁS ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="graduate-card">
                        <img src="img5.png" alt="Sofia Valladarez" class="graduate-image">
                        <div class="graduate-info">
                            <p class="graduate-name">SOFIA VALLADAREZ</p>
                            <p>Ganó un premio a nivel internacional y está logrando más cosas de las que hablaremos y profundizaremos más en el artículo...</p>
                            <a href="#" class="more-link">SABER MÁS ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="graduate-card">
                        <img src="img6.png" alt="Camila de las Casas Pampañaupa" class="graduate-image">
                        <div class="graduate-info">
                            <p class="graduate-name">CAMILA DE LAS CASAS PAMPÁÑAUPA</p>
                            <p>Ganó un premio a nivel internacional y está logrando más cosas de las que hablaremos y profundizaremos más en el artículo...</p>
                            <a href="#" class="more-link">LEER MÁS ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


    <!-- Pie de página -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-md-4 footer-logo text-center text-md-start">
                    <img src="logo.png" alt="Logo de la institución">
                </div>
                <!-- Enlaces de navegación -->
                <div class="col-md-4 footer-links text-center my-3 my-md-0">
                    <a href="#">Inicio</a>
                    <a href="#">Carreras Técnicas</a>
                    <a href="#">Cursos Libres</a>
                    <a href="#">Preguntas Frecuentes</a>
                    <a href="#">Contacto</a>
                </div>
                <!-- Información de contacto -->
                <div class="col-md-4 text-center text-md-end">
                    <p>Email: contacto@institucion.com</p>
                    <p>Teléfono: +51 123 456 789</p>
                    <p>Dirección: Av. Principal 123, Ciudad</p>
                </div>
            </div>
            <!-- Derechos reservados -->
            <div class="footer-bottom">
                &copy; 2024 Aracelly Quesada. Todos los derechos reservados.
            </div>
        </div>
    </footer>



    <!-- Botón de desplazamiento hacia arriba -->
    <div class="scroll-to-top" id="scrollToTopBtn">
        ↑
    </div>


    <!-- Botón flotante para abrir el modal -->
    <div class="floating-button" data-bs-toggle="modal" data-bs-target="#professorsModal">
        👤
    </div>

    <!-- Modal Scrollable para mostrar la lista de profesores -->
    <div class="modal fade" id="professorsModal" tabindex="-1" aria-labelledby="professorsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="professorsModalLabel">Conoce a nuestros Profesores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Lista de Profesores en Columna -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="img7.png" alt="Profesor 1" class="professor-img">
                        <div>
                            <h6>Profesor 1</h6>
                            <p>Especialista en Matemáticas</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img8.png" alt="Profesor 2" class="professor-img">
                        <div>
                            <h6>Profesor 2</h6>
                            <p>Experto en Ciencias</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img9.png" alt="Profesor 3" class="professor-img">
                        <div>
                            <h6>Profesor 3</h6>
                            <p>Maestro en Historia</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img10.png" alt="Profesor 3" class="professor-img">
                        <div>
                            <h6>Profesor 3</h6>
                            <p>Maestro en Historia</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img11.png" alt="Profesor 3" class="professor-img">
                        <div>
                            <h6>Profesor 3</h6>
                            <p>Maestro en Historia</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img12.png" alt="Profesor 3" class="professor-img">
                        <div>
                            <h6>Profesor 3</h6>
                            <p>Maestro en Historia</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img7.png" alt="Profesor 1" class="professor-img">
                        <div>
                            <h6>Profesor 1</h6>
                            <p>Especialista en Matemáticas</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img8.png" alt="Profesor 2" class="professor-img">
                        <div>
                            <h6>Profesor 2</h6>
                            <p>Experto en Ciencias</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="img9.png" alt="Profesor 3" class="professor-img">
                        <div>
                            <h6>Profesor 3</h6>
                            <p>Maestro en Historia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón flotante para abrir el modal de la línea de tiempo -->
    <div class="timeline-button" data-bs-toggle="modal" data-bs-target="#timelineModal">
        🕒
    </div>

    <!-- Modal extra grande con la línea de tiempo -->
    <div class="modal fade" id="timelineModal" tabindex="-1" aria-labelledby="timelineModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="timelineModalLabel">Historia del Instituto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Línea de tiempo -->
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-image">
                                <img src="13.png" alt="1995" class="img-circle">
                            </div>
                            <div class="timeline-content">
                                <h5>1995 - Fundación del Instituto</h5>
                                <p>El instituto fue fundado en 1995 con el objetivo de ofrecer educación de calidad en diferentes áreas profesionales.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-image">
                                <img src="14.png" alt="2000" class="img-circle">
                            </div>
                            <div class="timeline-content">
                                <h5>2000 - Apertura del Primer Campus</h5>
                                <p>Se inauguró el primer campus en la ciudad, permitiendo ampliar la oferta educativa y brindar mejores instalaciones a los estudiantes.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-image">
                                <img src="15.png" alt="2010" class="img-circle">
                            </div>
                            <div class="timeline-content">
                                <h5>2010 - Reconocimiento Nacional</h5>
                                <p>El instituto recibió un reconocimiento nacional por su excelencia académica y su compromiso con la educación de calidad.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-image">
                                <img src="16.png" alt="2015" class="img-circle">
                            </div>
                            <div class="timeline-content">
                                <h5>2015 - Expansión Internacional</h5>
                                <p>Se establecieron convenios internacionales con instituciones en el extranjero para fomentar el intercambio cultural y académico.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-image">
                                <img src="17.png" alt="2020" class="img-circle">
                            </div>
                            <div class="timeline-content">
                                <h5>2020 - Innovación en Educación Virtual</h5>
                                <p>Ante la pandemia, el instituto adaptó su infraestructura para ofrecer educación virtual de alta calidad a todos sus estudiantes.</p>
                            </div>
                        </div>
                        
                        <!-- Mensaje Final -->
                        <div class="timeline-end-message">
                            <p>La historia continúa contigo</p>
                        </div>
                        
                        <!-- Botón de Solicitar Información -->
                        <button class="btn-solicitar">Solicitar información</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
