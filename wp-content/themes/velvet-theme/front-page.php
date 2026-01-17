<?php get_header(); ?>

<main class="home-main">

<!-- HERO -->
    <section class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/hero.jpg" alt="Velvet Company">
    </section>

    	<div class="header-cta">
            <h2 class="banner-branding">
                <span>VELVET</span>
                <span>COMPANY</span>
            </h2>
			<a href="#" class="btn primary">DECOUVREZ NOTRE UNIVERS</a>
		</div>

        <!-- INTRO -->
    <section class="home-intro">
        <div class="intro-grid" >
            <div class="intro-text">
                <h2>Qui Sommes Nous ?</h2>
                <p>
                Velvet Company est une compagnie de danse contemporaine qui crée des univers sensibles et visuels, 
                où le mouvement raconte des histoires. Nous imaginons des pièces poétiques et engageantes, 
                pensées pour toucher chaque spectateur au coeur.
                </p>
                <a href="#" class="btn secondary">
                    Découvrir la compagnie
                </a>
            </div>
            <div class="intro-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/company-members.png" alt="Velvet Company Intro">
            </div>
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

    <section class="section-pres" >
        <h2>Dernières prestations</h2>
        <div class="image-pres" >
            <div class="pres-left-image" >
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/company-members.png" alt="Prestation 1">
            </div>
            <div class="pres-right-image" >
                <img src="<?php echo get_template_directory_uri(); ?>//assets/media/members/company-members.png" alt="Prestation 2">
            </div>
        </div>
        <a href="#" class="btn primary">EN SAVOIR PLUS</a>
    </section>

    <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M43.613 35.3865C43.7843 35.5483 43.9857 35.6748 44.2059 35.7588C44.4261 35.8428 44.6606 35.8826 44.8961 35.8759C45.1317 35.8693 45.3636 35.8163 45.5786 35.72C45.7937 35.6237 45.9877 35.486 46.1495 35.3147C46.3113 35.1435 46.4378 34.942 46.5218 34.7219C46.6058 34.5017 46.6456 34.2672 46.6389 34.0316C46.6323 33.7961 46.5793 33.5642 46.483 33.3491C46.3867 33.1341 46.249 32.9401 46.0777 32.7783L29.9334 17.5309C29.6004 17.216 29.1594 17.0405 28.7011 17.0405C28.2427 17.0405 27.8018 17.216 27.4687 17.5309L11.3226 32.7783C11.1476 32.939 11.0063 33.133 10.9068 33.3488C10.8074 33.5647 10.7519 33.7981 10.7434 34.0356C10.735 34.2731 10.7738 34.5099 10.8577 34.7323C10.9415 34.9546 11.0687 35.1581 11.2319 35.3309C11.395 35.5036 11.5909 35.6423 11.8081 35.7387C12.0253 35.8352 12.2595 35.8875 12.4971 35.8927C12.7346 35.8979 12.9709 35.8558 13.1921 35.7689C13.4133 35.682 13.615 35.552 13.7855 35.3865L28.7011 21.3015L43.613 35.3865Z" fill="#FBF6F6"/>
        <circle cx="29" cy="29" r="27" stroke="#FBF6F6" stroke-width="4"/>
    </svg>





</main>

<?php get_footer(); ?>
