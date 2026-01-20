<?php

if (!defined('ABSPATH')) exit;

class Velvet_Dashboard_Public {

    public function __construct() {
        add_action('admin_post_nopriv_velvet_save_contact', [$this, 'save_contact']);
        add_action('admin_post_velvet_save_contact', [$this, 'save_contact']);
    }

    public function save_contact() {
        global $wpdb;

        $table = $wpdb->prefix . 'velvet_messages';

        $wpdb->insert($table, [
            'type' => 'contact',
            'nom' => sanitize_text_field($_POST['nom'] ?? ''),
            'prenom' => sanitize_text_field($_POST['prenom'] ?? ''),
            'email' => sanitize_email($_POST['email'] ?? ''),
            'telephone' => sanitize_text_field($_POST['telephone'] ?? ''),
            'message' => sanitize_textarea_field($_POST['message'] ?? ''),
            'date_jour' => $_POST['jour'] ?? null,
            'date_mois' => $_POST['mois'] ?? null,
            'date_annee' => $_POST['annee'] ?? null,
        ]);

        wp_safe_redirect(home_url('/contact/?sent=1'));
        exit;
    }
}
