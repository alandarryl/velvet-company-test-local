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

    <!-- IMAGE -->
    <section class="company-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/hero.jpg" alt="">
    </section>

    <!-- MEMBRES -->
    <section class="company-members">


    <section class="company-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/company-members.png" alt="">
    </section>

        <h2>Nos membres</h2>
        <p>
        Velvet Company réunit des danseuses et artistes aux parcours variés,
        partageant une même vision artistique et sensorielle.
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
