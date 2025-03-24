<?php
$message = '';
// Determine the language based on GET parameter for language switching
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && !isset($_POST['name'])) {
        // Newsletter subscription
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = $lang === 'es' ? '¡Suscripción exitosa!' : 'Subscribed successfully!';
        } else {
            $message = $lang === 'es' ? 'Por favor, ingresa un correo válido.' : 'Please enter a valid email.';
        }
    } elseif (isset($_POST['name']) && isset($_POST['email'])) {
        // Sign-up form from modal
        $name = $_POST['name'];
        $email = $_POST['email'];
        if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = $lang === 'es' ? "¡Registro exitoso, $name!" : "Signed up successfully, $name!";
        } else {
            $message = $lang === 'es' ? 'Por favor, completa todos los campos correctamente.' : 'Please fill in all fields correctly.';
        }
    }
}

// Define translations
$translations = [
    'en' => [
        'title' => 'Creative Hub',
        'nav_home' => 'Home',
        'nav_about' => 'About',
        'nav_create' => 'Create',
        'header_title' => 'Unleash Your Creativity',
        'header_description' => 'Explore and create mesmerizing graphic designs.',
        'signup_button' => 'Sign Up Now',
        'features_title' => 'Creative Hub Features',
        'features_description' => 'Explore the powerful tools and functionalities that Creative Hub offers to enhance your graphic design projects.',
        'project_collaboration_title' => 'Project Collaboration',
        'project_collaboration_description' => 'Seamlessly collaborate with team members in real-time, share ideas, and track progress on your graphic design projects.',
        'design_tools_title' => 'Graphic Design Tools',
        'design_tools_description' => 'Access a wide range of design tools and templates to bring your creative ideas to life with ease and efficiency. We also offer <span class="highlight">a unique AI-based collaborator</span>, trained on internal database of amazing graphic solutions.',
        'try_now' => 'Try now',
        'learn_more' => 'Learn more →',
        'testimonials_title' => 'What Our Customers Say',
        'footer_subscribe' => 'Subscribe to our newsletter',
        'footer_email_placeholder' => 'Enter your email',
        'footer_subscribe_button' => 'Subscribe',
        'footer_product' => 'Product',
        'footer_plans' => 'Plans & Pricing',
        'footer_features' => 'Features',
        'footer_photos' => 'Photos',
        'footer_resources' => 'Resources',
        'footer_blog' => 'Blog',
        'footer_guides' => 'User guides',
        'footer_webinars' => 'Webinars',
        'footer_company' => 'Company',
        'footer_about_us' => 'About us',
        'footer_contact' => 'Contact us',
        'footer_privacy' => 'Privacy',
        'footer_terms' => 'Terms',
        'footer_copyright' => '© 2025 Creative Hub by Miroslav Nikolic',
        'modal_title' => 'Sign Up',
        'modal_name' => 'Name',
        'modal_email' => 'Email',
        'modal_button' => 'Sign Up',
        'project_collaboration_modal_title' => 'Project Collaboration',
        'project_collaboration_modal_description' => 'Connect your team to the best graphic design solutions through innovative tools and intelligent insights. With shared repositories, collaboration becomes effortless, allowing designers to share assets and maintain consistency across projects.',
        'design_tools_modal_title' => 'Design Tools',
        'design_tools_modal_description' => 'Our design tools leverage an advanced agentic model that intelligently assists you in creating stunning designs. With AI-driven suggestions and automated layout adjustments, you can bring your creative vision to life faster and more efficiently.'
    ],
    'es' => [
        'title' => 'Creative Hub - Español',
        'nav_home' => 'Inicio',
        'nav_about' => 'Acerca de',
        'nav_create' => 'Crear',
        'header_title' => 'Libera Tu Creatividad',
        'header_description' => 'Explora y crea diseños gráficos fascinantes.',
        'signup_button' => 'Regístrate Ahora',
        'features_title' => 'Características de Creative Hub',
        'features_description' => 'Explora las poderosas herramientas y funcionalidades que Creative Hub ofrece para mejorar tus proyectos de diseño gráfico.',
        'project_collaboration_title' => 'Colaboración en Proyectos',
        'project_collaboration_description' => 'Colabora sin problemas con los miembros de tu equipo en tiempo real, comparte ideas y haz un seguimiento del progreso de tus proyectos de diseño gráfico.',
        'design_tools_title' => 'Herramientas de Diseño Gráfico',
        'design_tools_description' => 'Accede a una amplia gama de herramientas y plantillas de diseño para dar vida a tus ideas creativas con facilidad y eficiencia. También ofrecemos un <span class="highlight">colaborador único basado en IA</span>, entrenado con una base de datos interna de increíbles soluciones gráficas.',
        'try_now' => 'Prueba ahora',
        'learn_more' => 'Aprende más →',
        'testimonials_title' => 'Lo que dicen nuestros clientes',
        'footer_subscribe' => 'Suscríbete a nuestro boletín',
        'footer_email_placeholder' => 'Ingresa tu correo',
        'footer_subscribe_button' => 'Suscribirse',
        'footer_product' => 'Producto',
        'footer_plans' => 'Planes y Precios',
        'footer_features' => 'Características',
        'footer_photos' => 'Fotos',
        'footer_resources' => 'Recursos',
        'footer_blog' => 'Blog',
        'footer_guides' => 'Guías de usuario',
        'footer_webinars' => 'Webinars',
        'footer_company' => 'Compañía',
        'footer_about_us' => 'Sobre nosotros',
        'footer_contact' => 'Contáctanos',
        'footer_privacy' => 'Privacidad',
        'footer_terms' => 'Términos',
        'footer_copyright' => '© 2025 Creative Hub por Miroslav Nikolic',
        'modal_title' => 'Regístrate',
        'modal_name' => 'Nombre',
        'modal_email' => 'Correo',
        'modal_button' => 'Regístrate',
        'project_collaboration_modal_title' => 'Colaboración en Proyectos',
        'project_collaboration_modal_description' => 'Conecte a su equipo con las mejores soluciones de diseño gráfico mediante herramientas innovadoras e información inteligente. Con repositorios compartidos, la colaboración se simplifica, permitiendo a los diseñadores compartir recursos y mantener la coherencia entre proyectos.',
        'design_tools_modal_title' => 'Herramientas de Diseño',
        'design_tools_modal_description' => 'Nuestras herramientas de diseño aprovechan un modelo agentico avanzado que te asiste de manera inteligente en la creación de diseños impresionantes. Con sugerencias impulsadas por IA y ajustes automáticos de diseño, puedes dar vida a tu visión creativa de manera más rápida y eficiente.'
    ]
];
$t = $translations[$lang];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['title']; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f9fa;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background-color: white;
        }
        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        .nav-links a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #007bff;
        }
        .language-selector {
            margin-left: 1rem;
            padding-left: 1.5rem;
            border-left: 1px solid #ddd;
        }
        .language-selector select {
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            border: 1px solid #ccc;
            background-color: transparent;
            color: #666;
            font-size: 0.95rem;
            cursor: pointer;
        }
        header {
            text-align: center;
            padding: 4rem 1.5rem;
            background: url('images/photo.jpg') center/cover no-repeat;
            color: white;
            height: 60vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        header p {
            margin-bottom: 1.5rem;
        }
        .button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            transition: background 0.3s ease;
            cursor: pointer;
        }
        .button:hover {
            background-color: #e67e22;
        }
        .features-container {
            text-align: center;
            padding: 4rem 5%;
        }
        .features-container h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .features-container p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        .feature-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 5rem;
            padding: 5rem 5%;
            min-height: 500px;
        }
        .feature-text {
            flex: 1;
            max-width: 600px;
            padding: 2rem;
        }
        .feature-image {
            flex: 1;
            max-width: 600px;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .feature-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .feature-section:nth-child(even) {
            flex-direction: row-reverse;
            background-color: #fff;
        }
        .feature-section h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .feature-section p {
            line-height: 1.7;
            margin-bottom: 2rem;
            color: #666;
            font-size: 1.1rem;
        }
        .feature-links {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        .feature-links a:not(.button) {
            color: #007bff;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }
        .feature-links a:not(.button):hover {
            opacity: 0.8;
        }
        .testimonial-section {
            padding: 4rem 5%;
            background: #fff;
            text-align: center;
        }
        .testimonial-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 0;
        }
        .testimonial-slide {
            display: none;
            animation: fade 1s ease-in-out;
        }
        @keyframes fade {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }
        .testimonial-slide.active {
            display: block;
        }
        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin: 0 1rem;
        }
        .testimonial-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem;
        }
        .testimonial-text {
            font-size: 1.1rem;
            color: #666;
            margin: 1rem 0;
            line-height: 1.6;
        }
        .testimonial-author {
            font-weight: bold;
            color: #333;
            margin-top: 1rem;
        }
        .testimonial-role {
            color: #888;
            font-size: 0.9rem;
        }
        .carousel-arrow {
            cursor: pointer;
            font-size: 2rem;
            color: #007bff;
            background: none;
            border: none;
            transition: opacity 0.3s ease;
        }
        .carousel-arrow:hover {
            opacity: 0.7;
        }
        .auto-scroll-controls {
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .dot {
            height: 12px;
            width: 12px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .dot.active {
            background-color: #007bff;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 4rem 5%;
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }
        footer h4 {
            margin-bottom: 1.5rem;
        }
        footer ul {
            list-style: none;
            padding: 0;
        }
        footer ul li {
            margin-bottom: 0.8rem;
        }
        .footer-bottom {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 3rem;
        }
        .footer-bottom p {
            margin: 0;
        }
        .newsletter input[type="email"] {
            padding: 0.8rem;
            width: 70%;
            margin-bottom: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .newsletter button {
            padding: 0.8rem 1.5rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            width: 400px;
            position: relative;
        }
        .modal-content h2 {
            margin-bottom: 1.5rem;
        }
        .modal-content form {
            display: flex;
            flex-direction: column;
        }
        .modal-content input {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .modal-content button {
            padding: 0.8rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
        }
        .highlight {
        font-weight: bold;
        color: purple;
        }
        .footer-link {
        color: white;
        text-decoration: none;
        font-family: inherit;
        }
        .footer-link:hover {
        text-decoration: none;
        }
        .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        }
        .modal-content {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        width: 400px;
        position: relative;
        }
        .modal-content .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 1.5rem;
        cursor: pointer;
        }
        .footer-link {
        color: white;
        text-decoration: none;
        font-family: inherit;
        cursor: pointer;
        }
        .footer-link:hover {
        text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">Creative Hub</div>
        <div class="nav-links">
            <a href="index.php?lang=<?php echo $lang; ?>"><?php echo $t['nav_home']; ?></a>
            <a href="about.php?lang=<?php echo $lang; ?>"><?php echo $t['nav_about']; ?></a>
            <a href="#" class="try-now-button"><?php echo $t['nav_create']; ?></a>
            <div class="language-selector">
                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <select name="lang" onchange="this.form.submit()">
                        <option value="en" <?php echo $lang === 'en' ? 'selected' : ''; ?>>EN</option>
                        <option value="es" <?php echo $lang === 'es' ? 'selected' : ''; ?>>ES</option>
                    </select>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <h1><?php echo $t['header_title']; ?></h1>
        <p><?php echo $t['header_description']; ?></p>
        <button class="button" id="signup-button"><?php echo $t['signup_button']; ?></button>
    </header>

    <!-- Features container -->
    <section class="features-container">
        <h2><?php echo $t['features_title']; ?></h2>
        <p><?php echo $t['features_description']; ?></p>
    </section>

    <!-- Feature sections -->
    <section class="feature-section">
        <div class="feature-text">
            <h2><?php echo $t['project_collaboration_title']; ?></h2>
            <p><?php echo $t['project_collaboration_description']; ?></p>
            <div class="feature-links">
                <a href="#" class="button try-now-button"><?php echo $t['try_now']; ?></a>
                <a href="#" class="project-collaboration-learn-more"><?php echo $t['learn_more']; ?></a>
            </div>
        </div>
        <div class="feature-image">
            <img src="images/photo1.jpg" alt="Project Collaboration">
        </div>
    </section>

    <section class="feature-section">
        <div class="feature-text">
            <h2><?php echo $t['design_tools_title']; ?></h2>
            <p><?php echo $t['design_tools_description']; ?></p>
            <div class="feature-links">
                <a href="#" class="button try-now-button"><?php echo $t['try_now']; ?></a>
                <a href="#" class="design-tools-learn-more"><?php echo $t['learn_more']; ?></a>
            </div>
        </div>
        <div class="feature-image">
            <img src="images/photo2.jpg" alt="Design Tools">
        </div>
    </section>

    <!-- Testimonial section -->
    <section class="testimonial-section">
        <h2><?php echo $t['testimonials_title']; ?></h2>
        <div class="testimonial-container">
            <?php
            $testimonials = json_decode(file_get_contents('testimonials.json'), true);
            if ($testimonials) {
                foreach ($testimonials as $index => $testimonial) {
                    echo '<div class="testimonial-slide' . ($index === 0 ? ' active' : '') . '">';
                    echo '<div class="testimonial-card">';
                    echo '<img src="' . $testimonial['image'] . '" alt="' . $testimonial['name'] . '" class="testimonial-image">';
                    echo '<div class="stars">' . str_repeat('★', $testimonial['rating']) . '</div>';
                    echo '<p class="testimonial-text">"' . $testimonial['text'] . '"</p>';
                    echo '<div class="testimonial-author">' . $testimonial['name'] . '</div>';
                    echo '<div class="testimonial-role">' . $testimonial['role'] . '</div>';
                    echo '</div></div>';
                }
            }
            ?>
        </div>
        <button class="carousel-arrow prev">❮</button>
        <button class="carousel-arrow next">❯</button>
        <div class="auto-scroll-controls">
            <?php
            if ($testimonials) {
                foreach ($testimonials as $index => $testimonial) {
                    echo '<span class="dot' . ($index === 0 ? ' active' : '') . '" onclick="currentSlide(' . $index . ')"></span>';
                }
            }
            ?>
        </div>
    </section>

    <!-- Footer with newsletter form -->
    <footer>
        <div class="footer-content">
            <div class="newsletter">
                <h4><?php echo $t['footer_subscribe']; ?></h4>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?lang=' . $lang; ?>">
                    <input type="email" name="email" placeholder="<?php echo $t['footer_email_placeholder']; ?>" required>
                    <button type="submit"><?php echo $t['footer_subscribe_button']; ?></button>
                </form>
                <?php if (!empty($message)): ?>
                    <p style="color: <?php echo strpos($message, 'Subscribed') !== false || strpos($message, 'Suscripción') !== false ? 'green' : 'red'; ?>;">
                        <?php echo $message; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div>
                <h4><?php echo $t['footer_product']; ?></h4>
                <ul>
                    <li><?php echo $t['footer_plans']; ?></li>
                    <li><?php echo $t['footer_features']; ?></li>
                </ul>
            </div>
            <div>
                <h4><?php echo $t['footer_resources']; ?></h4>
                <ul>
                    <li><?php echo $t['footer_guides']; ?></li>
                    <li><?php echo $t['footer_webinars']; ?></li>
                </ul>
            </div>
            <div>
                <h4><?php echo $t['footer_company']; ?></h4>
                <ul>
                    <li><a href="about.php?lang=<?php echo $lang; ?>" class="footer-link"><?php echo $t['footer_about_us']; ?></a></li>
                    <li><a href="#" class="footer-link contact-us"><?php echo $t['footer_contact']; ?></a></li>
                    <li><a href="privacy.php?lang=<?php echo $lang; ?>" class="footer-link"><?php echo $t['footer_privacy']; ?></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p><?php echo $t['footer_copyright']; ?></p>
        </div>
    </footer>

    <!-- Sign Up Modal -->
    <div id="signup-modal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>
            <h2><?php echo $t['modal_title']; ?></h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . '?lang=' . $lang; ?>">
                <input type="text" name="name" placeholder="<?php echo $t['modal_name']; ?>" required>
                <input type="email" name="email" placeholder="<?php echo $t['modal_email']; ?>" required>
                <button type="submit"><?php echo $t['modal_button']; ?></button>
            </form>
            <?php if (!empty($message)): ?>
                <p style="color: <?php echo strpos($message, 'Signed up') !== false || strpos($message, 'Registro') !== false ? 'green' : 'red'; ?>;">
                    <?php echo $message; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Project Collaboration Modal -->
    <div id="project-collaboration-modal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>
            <h2><?php echo $t['project_collaboration_modal_title']; ?></h2>
            <p><?php echo $t['project_collaboration_modal_description']; ?></p>
            <img src="images/proj_colab_photo.jpeg" alt="Project Collaboration" style="max-width: 100%; height: auto; margin-top: 1rem;">
        </div>
    </div>

    <!-- Design Tools Modal -->
    <div id="design-tools-modal" class="modal">
        <div class="modal-content">
            <span class="close">×</span>
            <h2><?php echo $t['design_tools_modal_title']; ?></h2>
            <p><?php echo $t['design_tools_modal_description']; ?></p>
            <img src="images/des_tools_photo.jpeg" alt="Design Tools" style="max-width: 100%; height: auto; margin-top: 1rem;">
        </div>
    </div>

    <div id="contact-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2><?php echo $lang === 'es' ? 'Contáctanos' : 'Contact Us'; ?></h2>
        <p>email: <a href="mailto:miroslav.n@students.opit.com">miroslav.n@students.opit.com</a></p>
    </div>
</div>

    <script src="script.js"></script>
</body>
</html>