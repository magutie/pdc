<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Historia fraternal entre Cuba y República Dominicana';
$page_description = 'Descubre la historia compartida entre Cuba y República Dominicana, los lazos de hermandad y los héroes que unieron ambas naciones en la lucha por la libertad.';

include 'includes/head.php';

// Generar schema Article para historia.php
$articleSchema = generateArticleSchema(
    $page_title,
    $page_description,
    "Fundación Patriotas del Caribe",
    "2025-01-27",
    "images/preview.jpg"
);

// Agregar schema Article
echo '<script type="application/ld+json">' . "\n";
echo json_encode($articleSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo "\n" . '</script>' . "\n";
?>
<body>
    

<header>
  <div class="header-container">
    <div class="logo-eslogan">
      <h1>Historia fraternal entre Cuba y República Dominicana</h1>
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

<?php include 'includes/footer.php'; ?>
