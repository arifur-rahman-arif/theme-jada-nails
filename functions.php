<?php

if (!defined('ABSPATH')) {
    return;
}

if (!defined('JADA_NAILS_VERSION')) {
    define('JADA_NAILS_VERSION', '1.1.1');
    // define('JADA_NAILS_VERSION', time());
}

if (!defined('JADA_NAILS_PATH')) {
    define('JADA_NAILS_PATH', trailingslashit(get_theme_file_path()));
}

if (!defined('JADA_NAILS_URL')) {
    define('JADA_NAILS_URL', trailingslashit(get_template_directory_uri()));
}

require_once JADA_NAILS_PATH . 'vendor/autoload.php';
require_once JADA_NAILS_PATH . 'Includes/Functions/templateFunctions.php';
require_once JADA_NAILS_PATH . 'Includes/TGM-Plugin-Activation-2.6.1-jada-nails/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';
require_once JADA_NAILS_PATH . 'Includes/TGM-Plugin-Activation-2.6.1-jada-nails/TGM-Plugin-Activation-2.6.1/example.php';

new \JadaNails\Includes\Classes\Hooks();