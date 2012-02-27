<?php

/**
 * @package     Skeleton for Joomla!
 * @copyright   Copyright (C) 2012 CloudHotelier. All rights reserved.
 * @license     GNU/GPL v3 or later
 * @link        http://www.cloudhotelier.com
 * @author      Xavier Pallicer <xpallicer@gmail.com>
 */
// no direct access
defined('_JEXEC') or die;

class TplSkeletonHelper {

    static function initializeTemplate($document) {

        $base_url = $document->baseurl . '/templates/' . $document->template;

        // default styles
        $default_styles = array(
            'style' => '',
            'background' => '',
            'font_text' => '',
            'font_text_style' => '',
            'font_headers' => '',
            'font_headers_style' => '',
            'analytics' => '',
            'jquery' => 1
        );

        // template options
        foreach ($default_styles as $option => $value) {
            $tpl_options->$option = $document->params->get($option, $value);
        }

        // load CSS files
        $document->addStyleSheet($base_url . '/css/base.css');
        $document->addStyleSheet($base_url . '/css/skeleton.css');
        $document->addStyleSheet($base_url . '/css/layout.css');
        $document->addStyleSheet($base_url . '/css/superfish.css');
        $document->addStyleSheet($base_url . '/css/template.css');
        if ($tpl_options->style && $tpl_options->style != -1) {
            $document->addStyleSheet($base_url . 'assets/styles/' . $tpl_options->style . '/style.css');
        }

        // background
        if ($tpl_options->background && $tpl_options->background != -1) {
            $document->addStyleDeclaration('body{ background: #EEE url(' . $base_url . '/assets/backgrounds/' . $tpl_options->background . ")}\n");
        }

        // load custom css files
        $files = JFolder::files(dirname(__FILE__) . DS . 'assets' . DS . 'custom');
        if (count($files)) {
            foreach ($files as $file) {
                if (substr($file, -3) == 'css') {
                    $document->addStyleSheet($base_url . '/custom/' . $file);
                }
            }
        }

        // text font
        if ($tpl_options->font_text && $tpl_options->font_text_style) {
            $document->addStyleSheet('http://fonts.googleapis.com/css?family=' . $tpl_options->font_text);
            $document->addStyleDeclaration("body{font-family: $tpl_options->font_text_style;}\n");
        }

        // headers font
        if ($tpl_options->font_headers && $tpl_options->font_headers_style) {
            $document->addStyleSheet('http://fonts.googleapis.com/css?family=' . $tpl_options->font_headers);
            $document->addStyleDeclaration("h1,h2,h3,h4,h5,h6,
                    div.cht_menu,
                    div.componentheading,
                    div.itemHeader h2.itemTitle,
                    div.genericItemHeader h2.genericItemTitle,
                    div.catItemHeader h3.catItemTitle{
                        font-family: $tpl_options->font_headers_style;
                    }");
        }

        // load Javascripts
        if (!JFactory::getApplication()->get('jquery') && $tpl_options->jquery) {
            if ($tpl_options->jquery == 1) {
                $document->addScript($base_url . '/js/jquery-1.7.1.min.js');
            } else {
                $document->addScript('http://code.jquery.com/jquery-1.7.1.min.js');
            }
            JFactory::getApplication()->get('jquery', true);
        }
        $document->addScript($base_url . '/js/hoverIntent.js');
        $document->addScript($base_url . '/js/superfish.js');
        $document->addScript($base_url . '/js/jquery.mobilemenu.js');
        $document->addScript($base_url . '/js/template.js');
        $document->addScriptDeclaration("
            \$jsk = jQuery.noConflict();
            \$jsk(document).ready(function(){
                \$jsk('ul.menu').superfish({delay:200});
                \$jsk('#jsk_menu').mobileMenu({
                    switchWidth: 768,                   //width (in px to switch at)
                    topOptionText: '" . JText::_('TPL_SELECT_A_PAGE') . "',     //first option text
                    indentString: '&nbsp;&nbsp;&nbsp;'  //string for indenting nested items
                });

                \$jsk('body').on('click', 'ul.tabs > li > a', function(e) {

                    //Get Location of tab's content
                    var contentLocation = \$jsk(this).attr('href');

                    //Let go if not a hashed one
                    if(contentLocation.charAt(0)== '#') {

                        e.preventDefault();

                        //Make Tab Active
                        \$jsk(this).parent().siblings().children('a').removeClass('active');
                        \$jsk(this).addClass('active');

                        //Show Tab Content & add active class
                        \$jsk(contentLocation).show().addClass('active').siblings().hide().removeClass('active');

                    }
                });

            });
        ");


        // mobile stuff
        $document->setMetaData('viewport', 'width=device-width, initial-scale=1, maximum-scale=1');
        $document->addHeadLink($base_url . '/images/apple-touch-icon.png', 'apple-touch-icon');
        $document->addHeadLink($base_url . '/images/apple-touch-icon-72x72.png', 'apple-touch-icon', 'rel', array('sizes' => '72x72'));
        $document->addHeadLink($base_url . '/images/apple-touch-icon-114x114.png', 'apple-touch-icon', 'rel', array('sizes' => '114x114'));

        // component width
        if ($document->countModules('sidebar-a') || $document->countModules('sidebar-b')) {
            $tpl_options->component = 'eleven';
        } else {
            $tpl_options->component = 'sixteen';
        }

        return $tpl_options;
    }

}