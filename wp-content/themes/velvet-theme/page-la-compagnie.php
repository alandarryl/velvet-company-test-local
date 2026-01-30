<?php
/*
Template Name: La compagnie
*/
get_header();
?>

<main class="company">

<div id="top"></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- CONTENU GUTENBERG -->
    <section class="company-content">
        <?php the_content(); ?>
    </section>

<?php endwhile; endif; ?>

<!-- SCROLL TOP -->
<a href="#top">
    <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58">
        <path d="M43.613 35.3865..." fill="#FBF6F6"/>
        <circle cx="29" cy="29" r="27" stroke="#FBF6F6" stroke-width="4"/>
    </svg>
</a>

</main>

<?php get_footer(); ?>
