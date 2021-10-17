<?php

namespace JadaNails\Includes\Classes;

use JadaNails\Includes\Classes\CallbackFunctions;

class Hooks {

    use CallbackFunctions;

    public function __construct() {
        $this->initHooks();
    }

    // Load all required hooks in this method
    public function initHooks() {
        add_action('wp_enqueue_scripts', [$this, 'enqueueAssetFiles']);
        add_action('after_setup_theme', [$this, 'themeInitCallbacks']);
    }
}