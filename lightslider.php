<?php
namespace Grav\Plugin;

use \Grav\Common\Grav;
use \Grav\Common\Plugin;
use \RocketTheme\Toolbox\Event\Event;

class LightsliderPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onGetPageTemplates'   => ['onGetPageTemplates', 0],
        ];
    }

    /**
     * Register template type with blueprint
     * @param Event $event
     */
    public function onGetPageTemplates(Event $event)
    {
        /**
         * @var Types $types
         */
        $types = $event->types;
        $types->register('modular/lightslider', __DIR__.'/blueprints/modular/lightslider.yaml');
    }

    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin())
        {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__.'/templates';
    }

    /**
     * Set needed variables to display cart.
     */
    public function onTwigSiteVariables()
    {
        if ($this->config->get('plugins.lightslider.built_in_css'))
        {
            $this->grav['assets']
            ->addCss('plugin://lightslider/css/lightslider.css')
            ->addCss('plugin://lightslider/css/lightslider-custom.css');
        }

        $this->grav['assets']
        ->add('jquery', 101)
        ->addJs('plugin://lightslider/js/lightslider.min.js');
    }
}
