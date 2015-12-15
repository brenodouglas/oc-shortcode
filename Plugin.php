<?php namespace BrenoDouglas\Shortcode;

use Event, 
    Backend;

use System\Classes\PluginBase;
use BrenoDouglas\Shortcode\Models\Code;

/**
 * Shortcode Plugin Information File
 */
class Plugin extends PluginBase
{

    public function boot()
    {
        Event::listen('cms.page.display', function($controller, $url, $page, $result) {
            preg_match_all("/\:[a-zA-Z]+\:/", $result, $array);

            if(count($array[0]) > 0) {
                $shortcodes = Code::all();

                foreach ($shortcodes as $shortcode) 
                    $result = preg_replace("/\:{$shortcode->identity}\:/", $shortcode->content, $result);
            }

            return $result;
        });
    }

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Shortcode',
            'description' => 'Plugin for create shortcode wodpress style',
            'author'      => 'BrenoDouglas',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'brenodouglas.shortcode.code' => [
                'tab' => 'Shortcode',
                'label' => 'Code'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'shortcode' => [
                'label'       => 'Shortcode',
                'url'         => Backend::url('brenodouglas/shortcode/code'),
                'icon'        => 'icon-code',
                'permissions' => ['brenodouglas.shortcode.code'],
                'order'       => 500,
            ],
        ];
    }

}
