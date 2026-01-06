<?php
/*
Template Name: La compagnie
*/
get_header();
?>

<main class="company">

    <!-- TITRE -->
    <section class="company-title">
        <h1>La compagnie</h1>
    </section>
    <!-- <h2 class="company-title" >La compagnie</h2> -->

    <!-- IMAGE -->
    <section class="company-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/hero.jpg" alt="">
    </section>

    <!-- MEMBRES -->
    <section class="company-members">

    <p>Velvet Company est une compagnie de danse contemporaine qui explore le mouvement comme un langage sensible, intime et universel. 
        Fondée autour d’une vision artistique tournée vers l’émotion brute, Velvet Company mêle gestuelle organique, théâtralité et recherche 
        visuelle afin de créer des œuvres qui résonnent autant dans le corps que dans l’esprit. Chaque création est pensée comme une expérience 
        immersive où se rencontrent danseurs, scénographes, musiciens et artistes visuels. Ensemble, ils façonnent des univers poétiques qui 
        questionnent le rapport au temps, à l'identité et à la connexion humaine.</p>

    <h2>Nos membres</h2>

    <section class="company-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/company-members.png" alt="">
    </section>

        
        <p>
        Découvrez les artistes qui donnent vie à Velvet Company. Chacun apporte sa sensibilité, 
        son énergie et son univers pour créer une identité collective unique.
        </p>

        <div class="members-grid">

            <!-- CARTE -->
            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/maryse.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/nolwenn.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/luanda.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/anouk.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/marine.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/alice.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/sitini.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/manon.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/daniela.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/lena.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/kelly.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/louane.png" alt="">
                <span>Nom du membre</span>
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/clelie.png" alt="">
                <span>Nom du membre</span>
            </div>

        <!-- Duplique cette carte 13 fois -->
        
        </div>

    </section>

</main>

<?php get_footer(); ?>
