<?php

namespace Vuep\Inc;

class AdminMenu{
    public function __construct(){
        add_action("admin_menu", array( $this,"register_admin_menu") );
    }

    public function register_admin_menu() {
        add_menu_page(
            'Vue WP Plugin',
            'Vue WP Plugin',
            'manage_options',
            'vue-wp-plugin',
            [$this, 'render_view'],
            'dashicons-admin-generic',
            25 // Position
        );
    }

    public function render_view(){ ?>
        <div class="wrap">
            <h1 class="wp-heading-inline">Vue WP Plugin</h1>
            <div id="vue-app" v-cloak></div>
        </div>
        <?php
    }
}