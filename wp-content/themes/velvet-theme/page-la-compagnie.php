<?php
/*
Template Name: La compagnie
*/
get_header();
?>

<main class="company">

<div id="top"></div>


    <!-- <h2 class="company-title" >La compagnie</h2> -->

    <!-- IMAGE -->
    <section class="company-banner">
        <h2  >LA COMPAGNIE</h2>
        <video class="click-video" muted loop>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/media/company.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/media/hero.jpg" alt=""> -->
    </section>

    <!-- MEMBRES -->
    <section class="company-members">

    <p class="company-text" >
        Velvet Company est une compagnie de danse contemporaine qui explore le mouvement comme un langage sensible, 
        intime et universel. Fondée autour d’une vision artistique tournée vers l’émotion brute, Velvet Company mêle gestuelle organique, 
        théâtralité et recherche visuelle afin de créer des œuvres qui résonnent autant dans le corps que dans l’esprit. <br>
        Chaque création est pensée comme une expérience immersive où se rencontrent danseurs, scénographes, musiciens et artistes visuels. 
        Ensemble, ils façonnent des univers poétiques qui questionnent le rapport au temps, à l'identité et à la connexion humaine.
    </p>

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
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/nolwenn.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/luanda.png" alt="">
                
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/anouk.png" alt="">
                
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/marine.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/alice.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/sitini.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/manon.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/daniela.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/lena.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/kelly.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/louane.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/clelie.png" alt="">
            </div>

            <div class="member-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/media/member-alice2.png" alt="">
            </div>

        <!-- Duplique cette carte 13 fois -->
        
        </div>

    </section>

    
    <a href="#top">
    <!-- ton SVG ici -->
        <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M43.613 35.3865C43.7843 35.5483 43.9857 35.6748 44.2059 35.7588C44.4261 35.8428 44.6606 35.8826 44.8961 35.8759C45.1317 35.8693 45.3636 35.8163 45.5786 35.72C45.7937 35.6237 45.9877 35.486 46.1495 35.3147C46.3113 35.1435 46.4378 34.942 46.5218 34.7219C46.6058 34.5017 46.6456 34.2672 46.6389 34.0316C46.6323 33.7961 46.5793 33.5642 46.483 33.3491C46.3867 33.1341 46.249 32.9401 46.0777 32.7783L29.9334 17.5309C29.6004 17.216 29.1594 17.0405 28.7011 17.0405C28.2427 17.0405 27.8018 17.216 27.4687 17.5309L11.3226 32.7783C11.1476 32.939 11.0063 33.133 10.9068 33.3488C10.8074 33.5647 10.7519 33.7981 10.7434 34.0356C10.735 34.2731 10.7738 34.5099 10.8577 34.7323C10.9415 34.9546 11.0687 35.1581 11.2319 35.3309C11.395 35.5036 11.5909 35.6423 11.8081 35.7387C12.0253 35.8352 12.2595 35.8875 12.4971 35.8927C12.7346 35.8979 12.9709 35.8558 13.1921 35.7689C13.4133 35.682 13.615 35.552 13.7855 35.3865L28.7011 21.3015L43.613 35.3865Z" fill="#FBF6F6"/>
            <circle cx="29" cy="29" r="27" stroke="#FBF6F6" stroke-width="4"/>
        </svg>
    </a>


</main>

<?php get_footer(); ?>
