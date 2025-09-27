<?php
require_once 'config.php';
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $site_config['gtm_id']; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Scripts de tracking personalizados -->
<script>
// Evento de page view personalizado
document.addEventListener('DOMContentLoaded', function() {
    // Enviar evento de page view a GA4
    if (typeof gtag !== 'undefined') {
        gtag('event', 'page_view', {
            page_title: '<?php echo addslashes($page_title ?? ''); ?>',
            page_location: window.location.href,
            page_path: '<?php echo $_SERVER['REQUEST_URI']; ?>'
        });
    }
    
    // Tracking de clics en botones de registro
    const registroButtons = document.querySelectorAll('a[href*="#formulario"], button[type="submit"]');
    registroButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'click', {
                    event_category: 'CTA',
                    event_label: 'Registro',
                    value: 1
                });
            }
        });
    });
    
    // Tracking de clics en WhatsApp
    const whatsappButtons = document.querySelectorAll('a[href*="whatsapp"]');
    whatsappButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'click', {
                    event_category: 'Social',
                    event_label: 'WhatsApp',
                    value: 1
                });
            }
        });
    });
    
    // Tracking de envío de formulario
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'form_submit', {
                    event_category: 'Engagement',
                    event_label: 'Formulario Registro',
                    value: 1
                });
            }
        });
    });
});
</script>

</body>
</html>
