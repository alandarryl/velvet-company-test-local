<?php

if (!defined('ABSPATH')) exit;

class Velvet_Dashboard_Admin {

    public function __construct() {
        add_action('admin_menu', array($this, 'register_menu'));
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
}
