<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use \Grav\Common\Grav;
use \Grav\Common\Page\Page;

class LightsliderPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onPageInitialized' => ['onPageInitialized', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
        }
    }

    /**
     * Initialize configuration
     */
    public function onPageInitialized()
    {
        if (!$this->active) return;

        $defaults = (array) $this->config->get('plugins.lightslider');

        /** @var Page $page */
        $page = $this->grav['page'];
        if (isset($page->header()->lightslider)) {
            $page->header()->lightslider = array_merge($defaults, $page->header()->lightslider);
        } else {
            $page->header()->lightslider = $defaults;
        }
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        if (!$this->active) return;

        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * Set needed variables to display cart.
     */
    public function onTwigSiteVariables()
    {
        if (!$this->active) return;

        if ($this->config->get('plugins.lightslider.built_in_css')) {
            $this->grav['assets']
                ->add('plugin://lightslider/css/lightslider-core.css')
                ->add('plugin://lightslider/css/lightslider-custom.css')
                ->add('plugin://lightslider/js/jquery.lightSlider.min.js');
        }
    }
}
