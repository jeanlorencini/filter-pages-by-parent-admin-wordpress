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

if (!defined('ABSPATH')) {
    exit;
}

// Carrega as traduções
function filtrar_por_pai_load_textdomain() {
    load_plugin_textdomain(
        'filtrar-por-pai',
        false,
        dirname(plugin_basename(__FILE__)) . '/languages'
    );
}
add_action('plugins_loaded', 'filtrar_por_pai_load_textdomain');

// Carrega a classe principal
require_once plugin_dir_path(__FILE__) . 'includes/class-page-parent-filter.php';

// Inicializa o plugin
function init_page_parent_filter() {
    new PageParentFilter();
}
add_action('plugins_loaded', 'init_page_parent_filter');