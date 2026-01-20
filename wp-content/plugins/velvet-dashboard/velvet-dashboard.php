<?php
/**
 * Plugin Name: Velvet Dashboard
 * Description: Dashboard custom (messages + booking)
 * Author: Alan
 * Version: 0.1
 */

if (!defined('ABSPATH')) exit;

define('VELVET_DASHBOARD_PATH', plugin_dir_path(__FILE__));
define('VELVET_DASHBOARD_URL', plugin_dir_url(__FILE__));

// Charger la classe principale
require_once VELVET_DASHBOARD_PATH . 'includes/class-velvet-dashboard.php';

// Lancer le plugin
function velvet_dashboard_init() {
    new Velvet_Dashboard();
}
add_action('plugins_loaded', 'velvet_dashboard_init');
