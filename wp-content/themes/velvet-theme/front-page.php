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
        <div class="intro-text">
            <h2>Qui Sommes Nous ?</h2>
            <p>
            Velvet Company est une compagnie de danse contemporaine qui crée des univers 
            sensibles et visuels, où le mouvement raconte des histoires. 
            Nous imaginons des pièces poétiques et engageantes, pensées 
            pour toucher chaque spectateur au coeur.
            </p>
            <a href="#" class="btn primary">
                Découvrir la compagnie
            </a>
        </div>
        <div class="intro-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/intro.jpg" alt="Velvet Company Intro">
        </div>
    </section>

    <!--- latest PROJECTS -->
    <!-- <section class="home-projects">
        <h2>Nos Projets Récents</h2>
        <div class="projects-grid">
            <?php
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
            );
            $projects = new WP_Query($args);
            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post(); ?>
                    <div class="project-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Aucun projet trouvé.</p>
            <?php endif; ?>
        </div>
    </section> -->

    <section>
        <h2>Dernières prestations</h2>
        <div class="image-pres" >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/pres1.jpg" alt="Prestation 1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/media/pres2.jpg" alt="Prestation 2">
        </div>
        <a href="#" class="btn secondary">EN SAVOIR PLUS</a>
    </section>

    <div  class="scroll-up">
        up button
    </div>


</main>

<?php get_footer(); ?>
