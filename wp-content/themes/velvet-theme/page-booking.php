<?php
/*
Template Name: Contact / Booking
*/
get_header();
?>

<main class="booking">

  <!-- CALENDRIER -->
  <section class="booking-calendar">
    <h1>CALENDRIER DES DISPONIBILITÉS</h1>

    <div class="calendar-grid">
      <div class="day">Lundi</div>
      <div class="day">Mardi</div>
      <div class="day">Mercredi</div>
      <div class="day">Jeudi</div>
      <div class="day">Vendredi</div>
      <div class="day">Samedi</div>
      <div class="day">Dimanche</div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="booking-contact">

    <h2>Nous contacter</h2>

    <div class="contact-grid">

      <!-- COLONNE GAUCHE -->
      <div class="contact-info">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/media/members/company-members.png" alt="">
        <p>Pour toute demande de booking ou d'information.</p>

        <div class="contact-details">
          <p> projetdigitalcampus@gmail.com</p>
          <p> 06 00 00 00 00</p>
        </div>
      </div>

      <!-- COLONNE DROITE -->
      <form class="contact-form">

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
