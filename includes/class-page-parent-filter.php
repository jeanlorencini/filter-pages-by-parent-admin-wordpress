<?php
if (!defined('ABSPATH')) {
    exit;
}

class PageParentFilter {
    public function __construct() {
        if (!is_admin()) {
            return;
        }

        add_action('restrict_manage_posts', [$this, 'add_parent_filter_dropdown']);
        add_action('pre_get_posts', [$this, 'filter_pages_by_parent']);
    }

    /**
     * Adiciona o dropdown de filtro por página pai
     */
    public function add_parent_filter_dropdown() {
        global $pagenow, $typenow;
        
        // Verifica se estamos na listagem de páginas
        if ($pagenow !== 'edit.php' || $typenow !== 'page') {
            return;
        }

        $parent_id = isset($_GET['parent_filter']) ? (int) $_GET['parent_filter'] : 0;
        
        $dropdown_options = [
            'show_option_none'  => 'Todas as páginas',
            'option_none_value' => '',
            'post_type'        => 'page',
            'selected'         => $parent_id,
            'name'            => 'parent_filter',
            'id'              => 'parent_filter',
            'show_option_all'  => false,
            'sort_column'      => 'menu_order, post_title',
            'hierarchical'     => true,
        ];

        echo '<label class="screen-reader-text" for="parent_filter">Filtrar por página pai</label>';
        wp_dropdown_pages($dropdown_options);
    }

    /**
     * Filtra as páginas com base na página pai selecionada
     * 
     * @param WP_Query $query Query object
     */
    public function filter_pages_by_parent($query) {
        global $pagenow, $typenow;

        // Verifica se é a query principal na área administrativa
        if (!is_admin() || 
            !$query->is_main_query() || 
            $pagenow !== 'edit.php' || 
            $typenow !== 'page') {
            return;
        }

        // Verifica se existe um filtro de pai selecionado
        if (!isset($_GET['parent_filter']) || empty($_GET['parent_filter'])) {
            return;
        }

        $parent_id = (int) $_GET['parent_filter'];
        if ($parent_id > 0) {
            $query->set('post_parent', $parent_id);
        }
    }
}
