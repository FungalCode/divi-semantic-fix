<?php
/*
Plugin Name: Divi Semantic Fix
Description: Adds role="main" to Divi’s <div id="main-content"> element for better accessibility (main landmark).
Version: 1.1
Author: Samuel Lackner
License: GPL2+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Prevent direct access

if ( class_exists( 'ET_Builder_Plugin' ) ) {

    function divi_semantic_fix_add_role_main() {
        ?>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            var main = document.getElementById("main-content");
            if (main && !main.hasAttribute("role")) {
                main.setAttribute("role", "main");
            }
        });
        </script>
        <?php
    }

    add_action( 'wp_footer', 'divi_semantic_fix_add_role_main' );
}
