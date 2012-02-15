<?php

/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

/*
 * This module ads skeleton columns classes to the modules
 * The classes added depend on the module position
 * The module classes can be overriden using jsk_classes_names style
 */

function modChrome_jsk_xhtml($module, &$params, &$attribs) {

    $classes = skeletonColumns($attribs, $params->get('moduleclass_sfx'));

    if (!empty($module->content)) {
        echo '<div class="' . $classes . '">' . "\n";
        echo '<div class="moduletable' . htmlspecialchars($params->get('moduleclass_sfx')) . '">' . "\n";
        if ($module->showtitle != 0) {
            echo '<h3>' . $module->title . '</h3>' . "\n";
        }
        echo $module->content . "\n";
        echo "</div>\n";
        echo "</div>\n";
    }
}

function skeletonColumns($attribs, $moduleclass_sfx) {
    $module_columns = array(
        'top-a' => 'eight columns',
        'top-b' => 'one-third column',
        'bottom-a' => 'four columns',
        'bottom-b' => 'four columns'
    );
    $css_class = isset($module_columns[$attribs['name']]) ? $module_columns[$attribs['name']] : '';

    // search for jsk_ classes
    $module_classes = explode(' ', $moduleclass_sfx);
    foreach ($module_classes as $module_class) {
        if (substr($module_class, 0, 4) == 'jsk_') {
            $css_class = str_replace('_', ' ', $module_class);
        }
    }

    return $css_class;
}