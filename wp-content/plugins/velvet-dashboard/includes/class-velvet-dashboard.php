<?php

if (!defined('ABSPATH')) exit;

class Velvet_Dashboard {

    public function __construct() {
        $this->load_dependencies();
        $this->init_admin();
        $this->init_public();
    }

    private function load_dependencies() {
        require_once VELVET_DASHBOARD_PATH . 'includes/class-velvet-dashboard-admin.php';
        require_once VELVET_DASHBOARD_PATH . 'includes/class-velvet-dashboard-public.php';
    }

    private function init_admin() {
        new Velvet_Dashboard_Admin();
    }

    private function init_public() {
        new Velvet_Dashboard_Public();
    }
}
