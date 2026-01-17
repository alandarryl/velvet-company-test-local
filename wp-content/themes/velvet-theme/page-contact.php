<?php
/*
Template Name: Contact
*/
get_header();
?>

<main class="contact">

    <!-- CONTACT -->
    <section class="contact-section">

        <h2>Nous contacter</h2>

        <div class="contact-grid">

        <!-- formulaire de contact -->
        <form class="contact-form">

            <div>
                <label for="you-are">Vous êtes :</label>
                <input type="checkbox" id="you-are" name="you-are" value="particulier" >
                <label for="you-are">Particulier</label>
                <input type="checkbox" id="you-are" name="you-are" value="professionnel">
                <label for="you-are">Professionnel</label>
            </div>

            <div class="form-row two">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Prénom">
            </div>

            <div class="form-row">
            <input type="text" placeholder="Type de demande / Type d'événement">
            </div>

            <div class="form-row three">
            <input type="text" placeholder="Jour">
            <input type="text" placeholder="Mois">
            <input type="text" placeholder="Année">
            </div>

            <div class="form-row">
            <input type="tel" placeholder="Numéro de téléphone">
            </div>

            <div class="form-row">
            <input type="email" placeholder="Adresse mail">
            </div>

            <div class="form-row">
            <textarea placeholder="Message libre (optionnel)"></textarea>
            </div>

            <div class="form-row">
            <button type="submit">Envoyer</button>
            </div>

        </form>

        </div>

    </section>

</main>

<?php get_footer(); ?>
