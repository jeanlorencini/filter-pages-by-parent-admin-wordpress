<?php
/**
 * Plugin Name: Filtrar por Pai
 * Plugin URI:
 * Description: Adiciona um filtro para páginas filhas no painel administrativo do WordPress
 * Version: 1.0.0
 * Author: Jean
 * Author URI:
 * Text Domain: filtrar-por-pai
 * Domain Path: /languages
 * License: GPL v2 or later
 */

// Previne acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

// Carrega a classe principal
require_once plugin_dir_path(__FILE__) . 'includes/class-page-parent-filter.php';

// Inicializa o plugin
function init_page_parent_filter() {
    new PageParentFilter();
}
add_action('plugins_loaded', 'init_page_parent_filter');