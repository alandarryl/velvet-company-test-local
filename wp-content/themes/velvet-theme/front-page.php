<?php get_header(); ?>

<main class="home-main">

<div id="top"></div>

<!-- HERO -->
<section class="hero">
    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'full', ['class' => 'hero-media'] );
    } else {
        // fallback Gutenberg — YouTube / video block
        echo '<div class="hero-media">';
        the_content(); // Gutenberg contiendra la vidéo ici
        echo '</div>';
    }
    ?>
</section>

<!-- CTA hero -->
<div class="header-cta">
    <h2 class="banner-branding">
        <?php 
        // Titre hero depuis Gutenberg (H1 ou H2)
        echo get_post_field('post_title', get_the_ID());
        ?>
    </h2>

    <?php
    // Bloc bouton Gutenberg dans le contenu
    // Yoast friendly
    ?>
</div>


<!-- SECTION INTRO (Qui sommes-nous ?) -->
<section class="home-intro">
    <div class="intro-grid">
        <div class="intro-text">
            <?php
            // Ici le client mettra un H2 + paragraphe + bouton
            the_content(); 
            ?>
        </div>

        <div class="intro-image">
            <?php
            // Image via Gutenberg
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('large');
            }
            ?>
        </div>
    </div>
</section>


<!-- SECTION PROJETS -->
<section class="section-pres">
    <h2><?php echo esc_html__('Derniers projets', 'velvet'); ?></h2>

    <div class="image-pres">
        <div class="pres-left-image">
            <?php
            // Inserer une vidéo ou image via Gutenberg
            // Flex 1
            ?>
        </div>

        <div class="pres-right-image">
            <?php
            // Flex 2
            ?>
        </div>
    </div>

    <!-- CTA -->
    <a href="#" class="btn primary">EN SAVOIR PLUS</a>
</section>


<!-- SCROLL TOP -->
<a href="#top">
    <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58">
        <path d="..."/>
    </svg>
</a>

</main>

<?php get_footer(); ?>
