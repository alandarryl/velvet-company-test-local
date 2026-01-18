<?php
/*
Template Name: Prestations
*/
get_header();
?>

<main class="prestations">

    <!-- IMAGE -->
    <section class="prestation-banner">
      <h2>Nos Prestations</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/prestations-header.png" alt="">
    </section>

  <!-- CATEGORIES -->

  <h2 class="prestations-heading">Nos Projets</h2>

  <section class="prestations-categories">

    <div class="category-card">
      <h3>Sensuelle</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/media/sensuelle.jpg" alt="">
    </div>

    <div class="category-card">
      <h3>Heels</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/media/heels.png" alt="">
    </div>

    <div class="category-card">
      <h3>Street Jazz</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/media/street-jazz.jpg" alt="">
    </div>

  </section>

  <!-- SECTIONS -->
  <section class="prestations-content">

    <!-- SECTION 1 -->
     <h2>Sensuelle</h2>
     <p>
        La danse sensuelle est un style qui célèbre le corps, la confiance et l’expression personnelle. Elle se caractérise par 
        des mouvements fluides, lents et contrôlés, qui mettent en valeur la féminité, la douceur et la force intérieure. 
        Plus qu’une simple chorégraphie, c’est une manière d’apprendre à écouter son corps, à s’assumer pleinement et à 
        se reconnecter à ses émotions. Accessible à toutes, la danse sensuelle permet de développer souplesse, présence et 
        assurance, tout en offrant un espace où chacun peut s’exprimer librement et sans jugement.
     </p>
    <div class="prestation-row">
      <div class="prestation-media"></div>
      <div class="prestation-text">
        <h2>Sensuelle</h2>
        <p>Description et explication de la danse sensuelle.</p>
      </div>
      
    </div>

    <!-- SECTION 2 -->
     <h2>Heels</h2>
     <p>
      La danse Heels est un style puissant et affirmé, caractérisé par l’utilisation de talons pour sublimer la silhouette 
      et renforcer la posture. Inspirée du jazz, du street et du commercial, elle mélange précision, élégance et attitude. 
      Les mouvements sont travaillés, dynamiques et expressifs, mettant l’accent sur la confiance en soi, la présence 
      scénique et le contrôle du corps. Plus qu’une simple performance, le Heels est une discipline qui permet 
      d’apprendre à marcher, danser et s’assumer avec assurance et finesse. Accessible à tous niveaux, c’est un style qui 
      célèbre la force, la sensualité et l’empowerment.
     </p>
    <div class="prestation-row reverse">
      <div class="prestation-text">
        <h2>Heels</h2>
        <p>Description et explication du style Heels.</p>
      </div>
      <div class="prestation-media"></div>
    </div>

    <!-- SECTION 3 -->
     <h2>Street Jazz</h2>
     <p>
      Le street jazz est un style de danse hybride qui mêle l’énergie du street dance à la technique du jazz. Rythmique, 
      expressif et dynamique, il met en avant des mouvements précis, des isolations, des jeux d’attitude et des 
      chorégraphies percutantes inspirées du monde urbain et de la pop culture. Accessible et moderne, le street jazz 
      permet de développer la coordination, l’expression corporelle et la musicalité tout en laissant une grande place à la
      personnalité du danseur. C’est une danse qui allie puissance, style et fluidité, idéale pour évoluer sur des sons 
      actuels et faire ressortir son propre groove.
      </p>
    <div class="prestation-row">
      <div class="prestation-media"></div>
      <div class="prestation-text">
        <h2>Street Jazz</h2>
        <p>Description et explication du Street Jazz.</p>
      </div>
      
    </div>

  </section>

      <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M43.613 35.3865C43.7843 35.5483 43.9857 35.6748 44.2059 35.7588C44.4261 35.8428 44.6606 35.8826 44.8961 35.8759C45.1317 35.8693 45.3636 35.8163 45.5786 35.72C45.7937 35.6237 45.9877 35.486 46.1495 35.3147C46.3113 35.1435 46.4378 34.942 46.5218 34.7219C46.6058 34.5017 46.6456 34.2672 46.6389 34.0316C46.6323 33.7961 46.5793 33.5642 46.483 33.3491C46.3867 33.1341 46.249 32.9401 46.0777 32.7783L29.9334 17.5309C29.6004 17.216 29.1594 17.0405 28.7011 17.0405C28.2427 17.0405 27.8018 17.216 27.4687 17.5309L11.3226 32.7783C11.1476 32.939 11.0063 33.133 10.9068 33.3488C10.8074 33.5647 10.7519 33.7981 10.7434 34.0356C10.735 34.2731 10.7738 34.5099 10.8577 34.7323C10.9415 34.9546 11.0687 35.1581 11.2319 35.3309C11.395 35.5036 11.5909 35.6423 11.8081 35.7387C12.0253 35.8352 12.2595 35.8875 12.4971 35.8927C12.7346 35.8979 12.9709 35.8558 13.1921 35.7689C13.4133 35.682 13.615 35.552 13.7855 35.3865L28.7011 21.3015L43.613 35.3865Z" fill="#FBF6F6"/>
        <circle cx="29" cy="29" r="27" stroke="#FBF6F6" stroke-width="4"/>
    </svg>

</main>

<?php get_footer(); ?>
