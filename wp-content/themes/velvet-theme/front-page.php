<?php get_header(); ?>

<main class="home-main">

<!-- HERO -->
    <section class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/hero.jpg" alt="Velvet Company">
    </section>

    	<div class="header-cta">
			<a href="#" class="btn primary">DECOUVREZ NOS PROJETS</a>
		</div>

        <!-- INTRO -->
    <section class="home-intro">
        <h2>Qui Sommes Nous ?</h2>
        <p>
        Velvet Company est une compagnie de danse contemporaine qui crée des univers sensibles et visuels, 
        où le mouvement raconte des histoires. Nous imaginons des pièces poétiques et engageantes, 
        pensées pour toucher chaque spectateur au coeur.
        </p>
    </section>

    <!-- VIDEOS -->
    <h2 class="vid-title" >Dernières prestations</h2>
    <section class="home-videos">
        <div class="video">Vidéo 1</div>
        <div class="video">Vidéo 2</div>
    </section>

    <!-- DOTS -->
    <div class="carousel-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
    </div>

    <!-- CTA -->
    <div class="home-cta">
        <a href="#" class="btn secondary">En savoir plus</a>
    </div>

</main>

<?php get_footer(); ?>
