<?php
namespace lo\shortcodes\bootstrap;

use lo\plugins\BaseShortcode;
use lo\shortcodes\bootstrap\widgets\Alert;
use lo\shortcodes\bootstrap\widgets\Label;

/**
 * Plugin Name: Bootstrap 3 Components Shortcodes
 * Plugin URI: https://github.com/loveorigami/yii2-shortcodes-pack/tree/master/src/bootstrap
 * Version: 1.1
 * Description: A shortcodes pack with Bootstrap 3 components
 * Author: Andrey Lukyanov
 * Author URI: https://github.com/loveorigami
 */
class BootstrapComponentsShortcodes extends BaseShortcode
{
    /**
     * @return array
     */
    public static function shortcodes()
    {
        return [
            'alert' => [
                'callback' => [Alert::class, 'widget'],
                'config' => [
                    'type' => Alert::TYPE_INFO,
                    'dismissable' => false
                ],
                'tooltip' => '[alert] ... [/alert]'
            ],
            'label' => [
                'callback' => [Label::class, 'widget'],
                'config' => [
                    'type' => Label::TYPE_PRIMARY
                ],
                'tooltip' => '[label] ... [/label]'
            ],
        ];
    }
}

