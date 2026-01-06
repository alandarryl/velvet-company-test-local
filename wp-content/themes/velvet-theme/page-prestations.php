<?php
/*
Template Name: Prestations
*/
get_header();
?>

<main class="prestations">

  <!-- TITRE -->
  <section class="prestations-title">
    <h1>NOS PROJETS</h1>
  </section>

  <!-- CATEGORIES -->
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
     <p>explication</p>
    <div class="prestation-row">
      <div class="prestation-media"></div>
      <div class="prestation-text">
        <h2>Sensuelle</h2>
        <p>Description et explication de la danse sensuelle.</p>
      </div>
      
    </div>

    <!-- SECTION 2 -->
     <h2>Heels</h2>
     <p>explication</p>
    <div class="prestation-row reverse">
      <div class="prestation-text">
        <h2>Heels</h2>
        <p>Description et explication du style Heels.</p>
      </div>
      <div class="prestation-media"></div>
    </div>

    <!-- SECTION 3 -->
     <h2>Street Jazz</h2>
     <p>explication</p>
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
