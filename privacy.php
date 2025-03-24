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
        'title' => 'Privacy Policy - Creative Hub',
        'nav_home' => 'Home',
        'nav_about' => 'About',
        'nav_create' => 'Create',
        'nav_privacy' => 'Privacy Policy',
        'privacy_title' => 'Privacy Policy',
        'privacy_intro' => 'Creative Hub values your privacy and is committed to protecting your personal information. This Privacy Policy outlines how we collect, use, and safeguard your data when you use our platform. By accessing or using Creative Hub, you agree to the practices described herein.',
        'privacy_collect' => 'Information We Collect',
        'privacy_collect_p1' => 'We collect the following types of information to provide and enhance our services:
- **Personal Information**: When you register an account, we collect your name, email address, and other contact details.
- **Usage Data**: We track how you interact with Creative Hub, including pages visited, features used, and time spent on the platform.
- **Design Files and Content**: Any graphics, designs, or other materials you upload to our platform.
- **Cookies and Tracking Technologies**: We use cookies and similar technologies to improve your experience, analyze usage patterns, and deliver personalized content.',
        'privacy_use' => 'How We Use Your Information',
        'privacy_use_p1' => 'We use your information for the following purposes:
- To deliver and maintain Creative Hub’s services, including design tools and collaboration features.
- To personalize your experience and offer tailored content or recommendations.
- To communicate with you about updates, promotions, or customer support inquiries.
- To analyze trends and improve our platform’s functionality and user experience.
- To meet legal and regulatory requirements.',
        'privacy_sharing' => 'Data Sharing and Disclosure',
        'privacy_sharing_p1' => 'We may share your information under these circumstances:
- **Service Providers**: With trusted partners who assist in operating our platform (e.g., hosting, analytics, or payment processing).
- **Legal Obligations**: When required by law or to protect Creative Hub’s rights, safety, or property.
- **Business Transfers**: In the event of a merger, acquisition, or sale of assets.
We do not sell your personal information to third parties.',
        'privacy_security' => 'Data Security',
        'privacy_security_p1' => 'We employ industry-standard security measures to protect your data from unauthorized access, misuse, or loss. This includes encryption, secure servers, and regular security audits. However, no online platform can guarantee complete security, and you use Creative Hub at your own risk.',
        'privacy_rights' => 'Your Rights',
        'privacy_rights_p1' => 'You have the following rights regarding your data:
- **Access**: View or request a copy of your personal information.
- **Correction**: Update inaccurate or incomplete data.
- **Deletion**: Request removal of your data, subject to legal obligations.
- **Opt-Out**: Unsubscribe from marketing emails at any time.
Contact us to exercise these rights under applicable data protection laws.',
        'privacy_changes' => 'Changes to This Policy',
        'privacy_changes_p1' => 'We may update this Privacy Policy periodically. Changes will be posted on this page with an updated “Last Updated” date. We encourage you to review this policy regularly.',
        'privacy_contact' => 'Contact Us',
        'privacy_contact_p1' => 'For questions or concerns about this Privacy Policy, please reach out to us at privacy@creativehub.com.',
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
        'footer_copyright' => '© 2025 Creative Hub by Miroslav Nikolic',
        'modal_title' => 'Sign Up',
        'modal_name' => 'Name',
        'modal_email' => 'Email',
        'modal_button' => 'Sign Up'
    ],
    'es' => [
        'title' => 'Política de Privacidad - Creative Hub',
        'nav_home' => 'Inicio',
        'nav_about' => 'Acerca de',
        'nav_create' => 'Crear',
        'nav_privacy' => 'Política de Privacidad',
        'privacy_title' => 'Política de Privacidad',
        'privacy_intro' => 'Creative Hub valora su privacidad y se compromete a proteger su información personal. Esta Política de Privacidad describe cómo recopilamos, utilizamos y protegemos sus datos cuando usa nuestra plataforma. Al acceder o usar Creative Hub, usted acepta las prácticas aquí descritas.',
        'privacy_collect' => 'Información que Recopilamos',
        'privacy_collect_p1' => 'Recopilamos los siguientes tipos de información para proporcionar y mejorar nuestros servicios:
- **Información Personal**: Al registrar una cuenta, recopilamos su nombre, dirección de correo electrónico y otros datos de contacto.
- **Datos de Uso**: Rastreamos cómo interactúa con Creative Hub, incluyendo páginas visitadas, funciones utilizadas y tiempo en la plataforma.
- **Archivos de Diseño y Contenido**: Cualquier gráfico, diseño u otros materiales que suba a nuestra plataforma.
- **Cookies y Tecnologías de Seguimiento**: Usamos cookies y tecnologías similares para mejorar su experiencia, analizar patrones de uso y ofrecer contenido personalizado.',
        'privacy_use' => 'Cómo Usamos Su Información',
        'privacy_use_p1' => 'Utilizamos su información para los siguientes fines:
- Entregar y mantener los servicios de Creative Hub, incluidas herramientas de diseño y funciones de colaboración.
- Personalizar su experiencia y ofrecer contenido o recomendaciones adaptadas.
- Comunicarnos con usted sobre actualizaciones, promociones o consultas de soporte.
- Analizar tendencias y mejorar la funcionalidad y experiencia del usuario en nuestra plataforma.
- Cumplir con requisitos legales y regulatorios.',
        'privacy_sharing' => 'Compartición y Divulgación de Datos',
        'privacy_sharing_p1' => 'Podemos compartir su información en estas circunstancias:
- **Proveedores de Servicios**: Con socios de confianza que ayudan a operar nuestra plataforma (por ejemplo, alojamiento, análisis o procesamiento de pagos).
- **Obligaciones Legales**: Cuando lo exija la ley o para proteger los derechos, seguridad o propiedad de Creative Hub.
- **Transferencias Comerciales**: En caso de fusión, adquisición o venta de activos.
No vendemos su información personal a terceros.',
        'privacy_security' => 'Seguridad de Datos',
        'privacy_security_p1' => 'Empleamos medidas de seguridad estándar de la industria para proteger sus datos contra acceso no autorizado, mal uso o pérdida. Esto incluye encriptación, servidores seguros y auditorías regulares. Sin embargo, ninguna plataforma en línea puede garantizar seguridad total, y usted usa Creative Hub bajo su propio riesgo.',
        'privacy_rights' => 'Sus Derechos',
        'privacy_rights_p1' => 'Usted tiene los siguientes derechos sobre sus datos:
- **Acceso**: Ver o solicitar una copia de su información personal.
- **Corrección**: Actualizar datos inexactos o incompletos.
- **Eliminación**: Solicitar la eliminación de sus datos, sujeto a obligaciones legales.
- **Exclusión**: Darse de baja de correos de marketing en cualquier momento.
Contáctenos para ejercer estos derechos bajo las leyes de protección de datos aplicables.',
        'privacy_changes' => 'Cambios a Esta Política',
        'privacy_changes_p1' => 'Podemos actualizar esta Política de Privacidad periódicamente. Los cambios se publicarán en esta página con una fecha de “Última Actualización” actualizada. Le recomendamos revisar esta política regularmente.',
        'privacy_contact' => 'Contáctenos',
        'privacy_contact_p1' => 'Para preguntas o inquietudes sobre esta Política de Privacidad, contáctenos en privacy@creativehub.com.',
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
        'footer_copyright' => '© 2025 Creative Hub por Miroslav Nikolic',
        'modal_title' => 'Regístrate',
        'modal_name' => 'Nombre',
        'modal_email' => 'Correo',
        'modal_button' => 'Regístrate'
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
            color: #333;
            line-height: 1.6;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #007bff;
        }
        .language-selector select {
            padding: 0.5rem;
            border-radius: 4px;
            border: 1px solid #ccc;
            background-color: white;
            cursor: pointer;
        }
        main {
            max-width: 900px;
            margin: 4rem auto;
            padding: 0 2rem;
        }
        main h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        main h2 {
            font-size: 1.8rem;
            margin: 2rem 0 1rem;
        }
        main p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 1.5rem;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 3rem 5%;
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }
        footer h4 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        footer ul {
            list-style: none;
        }
        footer ul li {
            margin-bottom: 0.8rem;
        }
        footer ul li a {
            color: #ccc;
            text-decoration: none;
        }
        footer ul li a:hover {
            color: white;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #444;
        }
        .newsletter form {
            display: flex;
            flex-direction: column;
        }
        .newsletter input[type="email"] {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: 4px;
        }
        .newsletter button {
            padding: 0.8rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .newsletter button:hover {
            background-color: #0056b3;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 2rem;
            width: 90%;
            max-width: 400px;
            border-radius: 8px;
            position: relative;
        }
        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
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
        .modal-content button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav>
        <div class="logo">Creative Hub</div>
        <div class="nav-links">
            <a href="index.php?lang=<?php echo $lang; ?>"><?php echo $t['nav_home']; ?></a>
            <a href="about.php?lang=<?php echo $lang; ?>"><?php echo $t['nav_about']; ?></a>
            <a href="privacy.php?lang=<?php echo $lang; ?>"><?php echo $t['nav_privacy']; ?></a>
            <a href="#" id="signup-link"><?php echo $t['nav_create']; ?></a>
            <div class="language-selector">
                <form method="get" action="privacy.php">
                    <select name="lang" onchange="this.form.submit()">
                        <option value="en" <?php echo $lang === 'en' ? 'selected' : ''; ?>>EN</option>
                        <option value="es" <?php echo $lang === 'es' ? 'selected' : ''; ?>>ES</option>
                    </select>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Privacy Policy Content -->
    <main>
        <h1><?php echo $t['privacy_title']; ?></h1>
        <p><?php echo $t['privacy_intro']; ?></p>

        <h2><?php echo $t['privacy_collect']; ?></h2>
        <p><?php echo $t['privacy_collect_p1']; ?></p>

        <h2><?php echo $t['privacy_use']; ?></h2>
        <p><?php echo $t['privacy_use_p1']; ?></p>

        <h2><?php echo $t['privacy_sharing']; ?></h2>
        <p><?php echo $t['privacy_sharing_p1']; ?></p>

        <h2><?php echo $t['privacy_security']; ?></h2>
        <p><?php echo $t['privacy_security_p1']; ?></p>

        <h2><?php echo $t['privacy_rights']; ?></h2>
        <p><?php echo $t['privacy_rights_p1']; ?></p>

        <h2><?php echo $t['privacy_changes']; ?></h2>
        <p><?php echo $t['privacy_changes_p1']; ?></p>

        <h2><?php echo $t['privacy_contact']; ?></h2>
        <p><?php echo $t['privacy_contact_p1']; ?></p>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="newsletter">
                <h4><?php echo $t['footer_subscribe']; ?></h4>
                <form method="post" action="privacy.php?lang=<?php echo $lang; ?>">
                    <input type="email" name="email" placeholder="<?php echo $t['footer_email_placeholder']; ?>" required>
                    <button type="submit"><?php echo $t['footer_subscribe_button']; ?></button>
                </form>
                <?php if (!empty($message) && (strpos($message, 'Subscribed') !== false || strpos($message, 'Suscripción') !== false)): ?>
                    <p style="color: green; margin-top: 1rem;"><?php echo $message; ?></p>
                <?php elseif (!empty($message)): ?>
                    <p style="color: red; margin-top: 1rem;"><?php echo $message; ?></p>
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
                    <li><a href="about.php?lang=<?php echo $lang; ?>"><?php echo $t['footer_about_us']; ?></a></li>
                    <li><a href="#" id="contact-link"><?php echo $t['footer_contact']; ?></a></li>
                    <li><a href="privacy.php?lang=<?php echo $lang; ?>"><?php echo $t['footer_privacy']; ?></a></li>
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
            <span class="close">&times;</span>
            <h2><?php echo $t['modal_title']; ?></h2>
            <form method="post" action="privacy.php?lang=<?php echo $lang; ?>">
                <input type="text" name="name" placeholder="<?php echo $t['modal_name']; ?>" required>
                <input type="email" name="email" placeholder="<?php echo $t['modal_email']; ?>" required>
                <button type="submit"><?php echo $t['modal_button']; ?></button>
            </form>
            <?php if (!empty($message)): ?>
                <p style="color: <?php echo strpos($message, 'Signed up') !== false || strpos($message, 'Registro') !== false ? 'green' : 'red'; ?>; margin-top: 1rem;">
                    <?php echo $message; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Contact Modal -->
    <div id="contact-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2><?php echo $t['footer_contact']; ?></h2>
            <p>Email: <a href="mailto:privacy@creativehub.com">privacy@creativehub.com</a></p>
            <p>Phone: +1-555-123-4567</p>
        </div>
    </div>

    <!-- JavaScript for Modals -->
    <script>
        // Get modals
        var signupModal = document.getElementById("signup-modal");
        var contactModal = document.getElementById("contact-modal");

        // Get links that open modals
        var signupLink = document.getElementById("signup-link");
        var contactLink = document.getElementById("contact-link");

        // Get close buttons
        var closes = document.getElementsByClassName("close");

        // Open signup modal
        signupLink.onclick = function(event) {
            event.preventDefault();
            signupModal.style.display = "block";
        }

        // Open contact modal
        contactLink.onclick = function(event) {
            event.preventDefault();
            contactModal.style.display = "block";
        }

        // Close modals
        for (var i = 0; i < closes.length; i++) {
            closes[i].onclick = function() {
                signupModal.style.display = "none";
                contactModal.style.display = "none";
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == signupModal) {
                signupModal.style.display = "none";
            }
            if (event.target == contactModal) {
                contactModal.style.display = "none";
            }
        }
    </script>
</body>
</html>