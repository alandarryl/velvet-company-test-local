<?php
/**
 * Plugin Name: Velvet Dashboard
 * Description: Dashboard messages + booking
 * Author: Alan
 * Version: 0.1
 */

if (!defined('ABSPATH')) exit; // sécurité

add_action('admin_menu', 'velvetDashboard_register_menu');

function velvetDashboard_register_menu() {

    // Menu principal
    add_menu_page(
        'Velvet Dashboard',
        'Velvet Dashboard',
        'manage_options',
        'velvet-dashboard',
        'velvetDashboard_page_main',
        'dashicons-chart-line',
        3
    );

    // Sous-menu : Messages
    add_submenu_page(
        'velvet-dashboard',
        'Messages',
        'Messages',
        'manage_options',
        'velvet-dashboard-messages',
        'velvetDashboard_page_messages'
    );

    // Sous-menu : Bookings
    add_submenu_page(
        'velvet-dashboard',
        'Bookings',
        'Bookings',
        'manage_options',
        'velvet-dashboard-bookings',
        'velvetDashboard_page_bookings'
    );

    // Sous-menu : Historique
    add_submenu_page(
        'velvet-dashboard',
        'Historique',
        'Historique',
        'manage_options',
        'velvet-dashboard-historique',
        'velvetDashboard_page_historique'
    );

    // Sous-menu : Statistiques
    add_submenu_page(
        'velvet-dashboard',
        'Statistiques',
        'Statistiques',
        'manage_options',
        'velvet-dashboard-stats',
        'velvetDashboard_page_stats'
    );

    // Sous-menu : Paramètres
    add_submenu_page(
        'velvet-dashboard',
        'Paramètres',
        'Paramètres',
        'manage_options',
        'velvet-dashboard-settings',
        'velvetDashboard_page_settings'
    );
}

// Pages

function velvetDashboard_page_main() {
    echo "<h1>Velvet Dashboard</h1>";
    echo "<p>Résumé général du dashboard</p>";
}

function velvetDashboard_page_messages() {
    global $wpdb;
    $table = $wpdb->prefix . 'velvet_messages';

    $messages = $wpdb->get_results("SELECT * FROM $table ORDER BY created_at DESC");

    echo "<h1>Messages</h1>";

    if (!$messages) {
        echo "<p>Aucun message pour le moment.</p>";
        return;
    }

    echo "<table class='widefat striped'>";
    echo "<tr><th>Nom</th><th>Type</th><th>Email</th><th>Téléphone</th><th>Date</th></tr>";

    foreach ($messages as $m) {
        echo "<tr>
                <td>{$m->firstname} {$m->lastname}</td>
                <td>{$m->type_demande}</td>
                <td>{$m->email}</td>
                <td>{$m->phone}</td>
                <td>{$m->created_at}</td>
            </tr>";
    }

    echo "</table>";
}

function velvetDashboard_page_bookings() {
    echo "<h1>Bookings</h1>";
    echo "<p>Liste des bookings</p>";
}

function velvetDashboard_page_historique() {
    echo "<h1>Historique</h1>";
    echo "<p>Liste des bookings passés ou complétés</p>";
}

function velvetDashboard_page_stats() {
    echo "<h1>Statistiques</h1>";
    echo "<p>Stats sur messages + bookings</p>";
}

function velvetDashboard_page_settings() {
    echo "<h1>Paramètres</h1>";
    echo "<p>Réglages du dashboard</p>";
}



register_activation_hook(__FILE__, 'velvetDashboard_install');

function velvetDashboard_install() {
    global $wpdb;

    $table = $wpdb->prefix . 'velvet_messages';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        you_are VARCHAR(20) DEFAULT NULL,
        nom VARCHAR(100) DEFAULT NULL,
        prenom VARCHAR(100) DEFAULT NULL,
        type_demande VARCHAR(150) DEFAULT NULL,
        jour TINYINT DEFAULT NULL,
        mois TINYINT DEFAULT NULL,
        annee SMALLINT DEFAULT NULL,
        telephone VARCHAR(30) DEFAULT NULL,
        email VARCHAR(150) DEFAULT NULL,
        message TEXT DEFAULT NULL,
        status ENUM('unread','read') DEFAULT 'unread',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}


add_action('init', 'velvetDashboard_handle_form');

function velvetDashboard_handle_form() {
    if (isset($_POST['velvet_contact_submit'])) {

        global $wpdb;
        $table = $wpdb->prefix . 'velvet_messages';

        $wpdb->insert($table, [
            'you_are' => sanitize_text_field($_POST['you-are']),
            'firstname' => sanitize_text_field($_POST['prenom']),
            'lastname' => sanitize_text_field($_POST['nom']),
            'type_demande' => sanitize_text_field($_POST['type-demande']),
            'event_day' => intval($_POST['jour']),
            'event_month' => intval($_POST['mois']),
            'event_year' => intval($_POST['annee']),
            'phone' => sanitize_text_field($_POST['telephone']),
            'email' => sanitize_email($_POST['email']),
            'message' => sanitize_textarea_field($_POST['message']),
        ]);

        wp_redirect(home_url('/contact/?success=1'));
        exit;
    }
}

