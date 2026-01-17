<?php
/*
Template Name: Prestations
*/
get_header();
?>

<main class="prestations">

    <!-- IMAGE -->
    <section class="prestation-main-image">
      <h2>Nos Prestations</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/hero.jpg" alt="">
    </section>

  <!-- CATEGORIES -->

  <h2 class="prestations-heading">Nos Projets</h2>

  <section class="prestations-categories">

    <div class="category-card">
      <span>Sensuelle</span>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/media/sensuelle.jpg" alt="">
    </div>

    <div class="category-card">
      <span>Heels</span>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/media/heels.png" alt="">
    </div>

    <div class="category-card">
      <span>Street Jazz</span>
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

</main>

<?php get_footer(); ?>
