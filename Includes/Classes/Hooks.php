<?php

namespace JadaNails\Includes\Classes;

use JadaNails\Includes\Classes\CallbackFunctions;
use JadaNails\Includes\Classes\Customizer;

class Hooks {

    use CallbackFunctions;
    use Customizer;

    public function __construct() {
        $this->initHooks();
    }

    // Load all required hooks in this method
    public function initHooks() {
        add_action('wp_enqueue_scripts', [$this, 'enqueueAssetFiles']);
        add_action('after_setup_theme', [$this, 'themeInitCallbacks']);
        add_action('customize_register', [$this, 'initCustomizer']);
    }
}