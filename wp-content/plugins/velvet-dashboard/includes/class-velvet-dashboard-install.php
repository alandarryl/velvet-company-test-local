<?php

if (!defined('ABSPATH')) exit;

class Velvet_Dashboard_Install {

    public static function create_tables() {
        global $wpdb;

        $table = $wpdb->prefix . 'velvet_messages';
        $charset = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            type VARCHAR(50) DEFAULT 'contact',
            nom VARCHAR(150) DEFAULT NULL,
            prenom VARCHAR(150) DEFAULT NULL,
            email VARCHAR(180) DEFAULT NULL,
            telephone VARCHAR(50) DEFAULT NULL,
            message TEXT DEFAULT NULL,
            date_jour VARCHAR(10) DEFAULT NULL,
            date_mois VARCHAR(10) DEFAULT NULL,
            date_annee VARCHAR(10) DEFAULT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id)
        ) $charset;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }
}
