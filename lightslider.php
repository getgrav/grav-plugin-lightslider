<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use \Grav\Common\Registry;
use \Grav\Common\Grav;
use \Grav\Common\Page\Page;
use \Grav\Common\Page\Pages;

class LightsliderPlugin extends Plugin
{

    protected $active = false;

     /**
     * Activate snipcart plugin
     *
     * Also disables debugger.
     */
    public function onAfterInitPlugins()
    {
        $this->active = true;
    }

    /**
     * Initialize configuration
     */
    public function onAfterGetPage()
    {
        if (!$this->active) {
            return;
        }

        $defaults = (array) $this->config->get('plugins.lightslider');

        /** @var Page $page */
        $page = Registry::get('Grav')->page;
        if (isset($page->header()->lightslider)) {
            $page->header()->lightslider = array_merge($defaults, $page->header()->lightslider);
        } else {
            $page->header()->lightslider = $defaults;
        }

    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onAfterTwigTemplatesPaths()
    {
        if (!$this->active) {
            return;
        }

        Registry::get('Twig')->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * Set needed variables to display cart.
     */
    public function onAfterSiteTwigVars()
    {
        if (!$this->active) {
            return;
        }

        if ($this->config->get('plugins.lightslider.built_in_css')) {
            $twig = Registry::get('Twig');
            $twig->twig_vars['stylesheets'][] = 'user/plugins/lightslider/css/lightslider-core.css';
            $twig->twig_vars['stylesheets'][] = 'user/plugins/lightslider/css/lightslider-custom.css';
        }
    }
}
