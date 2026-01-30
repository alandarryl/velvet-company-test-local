<?php get_header(); ?>

<main class="home-main">

<div id="top"></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- HERO -->
    <section class="hero">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('full', ['class' => 'hero-media']);
        }
        ?>
    </section>

    <!-- CTA HERO -->
    <div class="header-cta">
        <h2 class="banner-branding"><?php the_title(); ?></h2>
    </div>

    <!-- CONTENU GUTENBERG -->
    <section class="home-content">
        <?php the_content(); ?>
    </section>

<?php endwhile; endif; ?>


<!-- SCROLL TOP -->
<a href="#top">
    <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58">
        <path d="..."/>
    </svg>
</a>

</main>

<?php get_footer(); ?>
