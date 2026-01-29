<?php
/*
Template Name: La compagnie
*/
get_header();
?>

<main class="company">

    <div id="top"></div>

    <?php
    while ( have_posts() ) :
        the_post();
    ?>

    <!-- HERO / BANNER -->
    <section class="company-banner">
        <?php
        // Le client met ici :
        // - un bloc Titre
        // - un bloc Vidéo ou Image
        the_content();
        ?>
    </section>

    <!-- CONTENU PRINCIPAL -->
    <section class="company-members">
        <?php
        /*
        Ici le client pourra insérer :
        - paragraphes
        - titres
        - images
        - groupes
        - grilles de membres
        */
        ?>
    </section>

    <?php endwhile; ?>

    <!-- SCROLL TOP -->
    <a href="#top">
        <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58">
            <path d="M43.613 35.3865..." fill="#FBF6F6"/>
            <circle cx="29" cy="29" r="27" stroke="#FBF6F6" stroke-width="4"/>
        </svg>
    </a>

</main>

<?php get_footer(); ?>
