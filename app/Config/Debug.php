<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Debug extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Debug Toolbar Collectors
     * --------------------------------------------------------------------------
     * List of toolbar collectors that will be active. If empty,
     * all built-in collectors will be activated.
     */
    public $collectors = [];

    /**
     * --------------------------------------------------------------------------
     * Max History
     * --------------------------------------------------------------------------
     * The number of history items to keep track of in any
     * given collector.
     */
    public $maxHistory = 100;

    /**
     * --------------------------------------------------------------------------
     * Toolbar Views Path
     * --------------------------------------------------------------------------
     * The path to the directory that contains the toolbar views.
     * If empty, it will use its default.
     */
    public $toolbarViewsPath = 'Debug';

    /**
     * --------------------------------------------------------------------------
     * AJAX Toolbar Renderer
     * --------------------------------------------------------------------------
     * The renderer to use for the AJAX request for the toolbar.
     */
    public $ajaxToolbarRenderer = 'CodeIgniter\Debug\Toolbar\Collectors\Views';

    /**
     * --------------------------------------------------------------------------
     * AJAX Debugged Requests
     * --------------------------------------------------------------------------
     * Whether to include the current Request in the AJAX calls for the toolbar.
     * This will have a performance and memory impact and should be used sparingly.
     */
    public $ajaxDebug = false;

    /**
     * --------------------------------------------------------------------------
     * Whether to display the "FireLogger" setting in the Toolbar.
     * --------------------------------------------------------------------------
     * If true, will not display the FireLogger in the toolbar, allowing it to display the settings instead.
     */
    public $ignoreFireLogger = false;

    /**
 * --------------------------------------------------------------------------
 * Enable Debug Toolbar
 * --------------------------------------------------------------------------
 * If true, the debug toolbar will be displayed on every page.
 * This should be set to false in production environments to not
 * expose sensitive information.
 */
public $enabled = false;
}
