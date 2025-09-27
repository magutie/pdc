<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Historia - Patriotas del Caribe</title>
  <link rel="stylesheet" href="style-patriotas.css?v=<?php echo $version; ?>" />
  <link rel="icon" href="images/favicon.png" type="image/png" />
 <!-- Open Graph (Facebook/Meta) -->
  <meta property="og:title" content="Patriotas del Caribe - Cuba Libre, Caribe Unido">
  <meta property="og:description" content="Movimiento cívico cubano-dominicano que defiende los derechos humanos, la soberanía nacional y la libertad del pueblo cubano.">
  <meta property="og:url" content="https://www.patriotasdelcaribe.com/">
  <meta property="og:image" content="https://www.patriotasdelcaribe.com/images/preview.jpg">
  <meta property="og:type" content="website">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Patriotas del Caribe - Cuba Libre, Caribe Unido">
  <meta name="twitter:description" content="Movimiento por la libertad de Cuba, desde el corazón del Caribe. Activismo pacífico, unión y defensa de la verdad.">
  <meta name="twitter:image" content="https://www.patriotasdelcaribe.com/images/preview.jpg">

  <!-- Preload CSS -->
  <link rel="preload" href="style-patriotas.css?v=<?php echo $version; ?>" as="style" onload="this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="style-patriotas.css?v=<?php echo $version; ?>"></noscript>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Merriweather:wght@400;700&display=swap"></noscript>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="shortcut icon" href="images/favicon.ico?v=<?php echo $version; ?>">
  
  <meta name="google-site-verification" content="r5ZpRdEiBC__okZhv4_Gl3i_D-P7K_bZrcBgRDBSdIg" />

 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NBVVS6PG');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBVVS6PG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
  <div class="header-container">
    <div class="logo-eslogan">
      <h1 class="logo-text">Patriotas del Caribe</h1>
      <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
    </div>
    <div class="logo-container">
      <img src="images/logo.png" alt="Logo Patriotas" class="logo" />
    </div>
  </div>
</header>

<main>
  <section class="info-proceso">
    <h2>Historia de Hermandad entre Cuba y República Dominicana</h2>
    <p>
      La historia que une a Cuba y República Dominicana es una narrativa de lucha, solidaridad y valores compartidos en favor de la libertad y la autodeterminación de los pueblos del Caribe. Desde el siglo XIX, patriotas de ambas naciones se han entrelazado en la defensa de causas comunes, dejando un legado de unidad que trasciende fronteras.
    </p>
  </section>

  <section class="historia-patriotas">
    <h2>Héroes que unen República Dominicana y Cuba</h2>

    <div class="heroe">
      <h3>Juan Pablo Duarte (1813–1876)</h3>
      <p class="cita">"Vivir sin patria es lo mismo que vivir sin honor."</p>
      <img src="images/duarte.jpg" alt="Juan Pablo Duarte" class="heroe-img" />
      <p>
        Fundador de la República Dominicana y líder del movimiento independentista contra el dominio haitiano. Duarte soñaba no solo con una patria libre, sino también con una América Latina unida, independiente del dominio europeo o estadounidense. Sus ideales de soberanía nacional y justicia social inspiraron a líderes cubanos como José Martí, quien valoró la figura de Duarte como ejemplo de patriotismo desinteresado y heroico.
      </p>
    </div>

    <div class="heroe">
      <h3>José Martí (1853–1895)</h3>
      <p class="cita">"La patria es ara, no pedestal."</p>
      <img src="images/marti.jpg" alt="José Martí" class="heroe-img" />
      <p>
        El Apóstol de la independencia cubana encontró en Santo Domingo un refugio y un punto de apoyo para su causa. Durante su estancia en la isla, Martí estudió el legado de Duarte y se sensibilizó profundamente con el ideario dominicano. Para Martí, la libertad de Cuba estaba conectada con la libertad de toda América Latina. Su visita a la República Dominicana reforzó su visión de una gran patria americana, sin imperios ni tutelajes externos.
      </p>
    </div>

    <div class="heroe">
      <h3>Máximo Gómez (1836–1905)</h3>
      <p class="cita">"No lucho por conquistas personales, sino por la libertad de los pueblos."</p>
      <img src="images/gomez.jpg" alt="Máximo Gómez" class="heroe-img" />
      <p>
        Generalísimo de las fuerzas independentistas cubanas, nacido en Baní, República Dominicana. Gómez se convirtió en uno de los grandes estrategas de la Guerra de los Diez Años y la Guerra de Independencia de Cuba. Su entrega a la causa cubana fue total, renunciando incluso a cargos políticos tras la independencia. Para los cubanos, es un héroe nacional; para los dominicanos, un símbolo del internacionalismo solidario.
      </p>
    </div>

    <div class="heroe">
      <h3>Francisco Henríquez y Carvajal (1859–1935)</h3>
      <img src="images/francisco.jpg" alt="Francisco Henríquez" class="heroe-img" />
      <p>
        Intelectual y político dominicano que desde la diplomacia apoyó las causas independentistas del Caribe, incluyendo la cubana. Defendió con firmeza el derecho de los pueblos del continente a su autodeterminación.
      </p>
    </div>

    <div class="heroe">
      <h3>Ramón Emeterio Betances (1827–1898)</h3>
      <img src="images/betances.jpg" alt="Ramón Emeterio Betances" class="heroe-img" />
      <p>
        Patriota puertorriqueño con fuertes vínculos con líderes dominicanos y cubanos. Participó en conspiraciones por la libertad del Caribe y promovió la Confederación Antillana: una unión regional basada en justicia, fraternidad y resistencia al colonialismo.
      </p>
    </div>

    <div class="heroe">
      <h3>Gregorio Luperón (1839–1897)</h3>
      <img src="images/luperon.jpg" alt="Gregorio Luperón" class="heroe-img" />
      <p>
        Líder dominicano de la Restauración. Su ideología liberal, republicana y antiimperialista influyó en los movimientos anticoloniales del Caribe, incluyendo la lucha por la independencia de Cuba.
      </p>
    </div>

    <div class="heroe">
      <h3>Narciso López (1797–1851)</h3>
      <img src="images/narciso.jpg" alt="Narciso López" class="heroe-img" />
      <p>
        Militar venezolano que, con apoyo de dominicanos y otros latinoamericanos, lideró expediciones desde EE.UU. para liberar a Cuba del dominio español. Aunque no tuvo éxito, representa el espíritu de solidaridad regional del siglo XIX.
      </p>
    </div>

    <div class="heroe">
      <h3>Antonio Maceo (1845–1896)</h3>
      <img src="images/maceo.jpg" alt="Antonio Maceo" class="heroe-img" />
      <p>
        Héroe cubano conocido como "El Titán de Bronce". Luchó por una Cuba libre y soberana, con una visión profundamente antirracista. Mantuvo lazos ideológicos con dominicanos y su legado trasciende fronteras.
      </p>
    </div>

    <div class="heroe">
      <h3>Solidaridad del Siglo XX y XXI</h3>
      <img src="images/logo.png" alt="Solidaridad RD-Cuba" class="heroe-img" />
      <p>
        Durante el siglo XX, especialmente en la dictadura de Trujillo, Cuba ofreció refugio a exiliados dominicanos. A lo largo de los años, ha brindado apoyo médico y educativo a comunidades dominicanas. La hermandad entre los pueblos se ha mantenido viva pese a los cambios políticos.
      </p>
    </div> <br><br>

    <p class="texto-historico">
      Las luchas por la libertad en Cuba y República Dominicana no fueron procesos aislados. Estuvieron entrelazadas por ideales comunes: soberanía, justicia y fraternidad. Hoy, <strong>Patriotas del Caribe</strong> retoma ese legado como un llamado a la unidad del Caribe.
    </p>
  </section>
  <br><br><br><br>
</main>

<footer>
    <div class="footer-links">
         <a href="historia.php">Historia Fraternal</a> |
         <a href="plan_trabajo.php">Plan de trabajo</a> |
         <a href="valores.php">Valores</a> |
         <a href="sobre_cuba.php">Cuba Hoy</a> |
          <a href="mision_patriotica.php">Misión Patriótica</a> |
        <a href="faq.php">Preguntas Frecuentes</a> |
        <a href="privacidad.php">Políticas de Privacidad</a> |
        <a href="terminos.php">Términos y Condiciones</a>
        <!-- <a href="estatutos.php">Estatutos</a> |
        <a href="acta-constitutiva.php">Acta Constitutiva</a> |
        <a href="registro-legal.php">Registro Legal</a> |
        <a href="transparencia.php">Transparencia</a> -->

    </div>
    <p>&copy; 2025 Patriotas del Caribe. Todos los derechos reservados.</p>
</footer>

</body>
</html>
