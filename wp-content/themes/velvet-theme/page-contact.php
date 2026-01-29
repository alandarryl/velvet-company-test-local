<?php
/*
Template Name: Contact
*/
get_header();
?>

<main class="contact">

    <div id="top"></div>

    <?php while ( have_posts() ) : the_post(); ?>

        <!-- CONTENU ÉDITABLE (banner, titres, textes, boutons…) -->
        <section class="contact-content">
            <?php the_content(); ?>
        </section>

    <?php endwhile; ?>

    <!-- FORMULAIRE (logique, volontairement fixe) -->
    <section class="contact-section">

        <div class="contact-container">

            <form class="contact-form" action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
                <input type="hidden" name="action" value="velvet_save_contact">

                <div class="you-are">
                    <label>Vous êtes :</label>
                    <label><input type="radio" name="you-are" value="particulier"> Particulier</label>
                    <label><input type="radio" name="you-are" value="professionnel"> Professionnel</label>
                </div>

                <div class="form-row two">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="prenom" placeholder="Prénom">
                </div>

                <div class="form-row">
                    <input type="text" name="type-demande" placeholder="Type de demande / Type d'événement">
                </div>

                <div class="form-row three">
                    <input type="text" name="jour" placeholder="Jour">
                    <input type="text" name="mois" placeholder="Mois">
                    <input type="text" name="annee" placeholder="Année">
                </div>

                <div class="form-row">
                    <input type="tel" name="telephone" placeholder="Numéro de téléphone">
                </div>

                <div class="form-row">
                    <input type="email" name="email" placeholder="Adresse mail">
                </div>

                <div class="form-row">
                    <textarea name="message" placeholder="Message libre (optionnel)"></textarea>
                </div>

                <div class="form-row button-row">
                    <button class="form-btn" type="submit">Envoyer</button>
                </div>

            </form>

        </div>
    </section>

    <!-- SCROLL TOP -->
    <a href="#top">
        <svg class="scroll-icon" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M43.613 35.3865L28.7011 21.3015L13.7855 35.3865" fill="#FBF6F6"/>
            <circle cx="29" cy="29" r="27" stroke="#FBF6F6" stroke-width="4"/>
        </svg>
    </a>

</main>

<?php get_footer(); ?>
