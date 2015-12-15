<?php namespace BrenoDouglas\Shortcode\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Code Back-end Controller
 */
class Code extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('BrenoDouglas.Shortcode', 'shortcode', 'code');
    }
}