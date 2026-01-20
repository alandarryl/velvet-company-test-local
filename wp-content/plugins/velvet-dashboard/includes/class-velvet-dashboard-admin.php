<?php

if (!defined('ABSPATH')) exit;

class Velvet_Dashboard_Admin {

public function __construct() {
    add_action('admin_menu', array($this, 'register_menu'));
    add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
}



    public function register_menu() {
        add_menu_page(
            'Velvet Dashboard',
            'Velvet Dashboard',
            'manage_options',
            'velvet-dashboard',
            array($this, 'page_main'),
            'dashicons-chart-line',
            3
        );

        $this->add_sub('Messages', 'messages');
        $this->add_sub('Bookings', 'bookings');
        $this->add_sub('Historique', 'historique');
        $this->add_sub('Statistiques', 'stats');
        $this->add_sub('Paramètres', 'settings');
    }

    private function add_sub($title, $slug) {
        add_submenu_page(
            'velvet-dashboard',
            $title,
            $title,
            'manage_options',
            "velvet-dashboard-$slug",
            array($this, "page_$slug")
        );
    }

    public function page_main()       { $this->render('dashboard-main'); }
    public function page_messages()   { $this->render('dashboard-messages'); }
    public function page_bookings()   { $this->render('dashboard-bookings'); }
    public function page_historique() { $this->render('dashboard-historique'); }
    public function page_stats()      { $this->render('dashboard-stats'); }
    public function page_settings()   { $this->render('dashboard-settings'); }

    private function render($file) {
        include VELVET_DASHBOARD_PATH . "admin/partials/$file.php";
    }


public function enqueue_admin_assets($hook) {

    // Charge seulement sur la page bookings
    if (!isset($_GET['page']) || $_GET['page'] !== 'velvet-dashboard-bookings') {
        return;
    }

    // FullCalendar CSS + JS
    wp_enqueue_style(
        'fullcalendar-css',
        'https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css'
    );

    wp_enqueue_script(
        'fullcalendar-js',
        'https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js',
        [],
        null,
        true
    );

    // Notre script calendar
    wp_enqueue_script(
        'velvet-calendar',
        VELVET_DASHBOARD_URL . 'admin/js/fullcalendar.js',
        ['fullcalendar-js'],
        null,
        true
    );
}



}
