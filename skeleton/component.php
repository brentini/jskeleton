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

// initialize template
require dirname(__FILE__) . DS . 'helper.php';
$tpl_options = TplSkeletonHelper::initializeTemplate($this);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

    <head>

        <jdoc:include type="head" />

    </head>

    <body>

        <!-- tpl_page_wrapper -->
        <div class="jsk_page_wrapper">

            <!-- tpl_page -->
            <div class="jsk_page container">             
                
                <!-- tpl_main_wrapper -->
                <div class="jsk_main_wrapper">

                    <!-- tpl_main -->
                    <div class="jsk_main">

                        <!-- tpl_component -->
                        <div class="jsk_component sixteen columns">

                            <div id="jsk_component">
                                <jdoc:include type="message" />
                                <jdoc:include type="component" />
                            </div>

                        </div>
                        <!-- /tpl_component -->

                    </div>
                    <div class="clear"></div>
                    <!-- /tpl_main -->

                </div>
                <div class="clear"></div>
                <!-- /tpl_main_wrapper -->

            </div>
            <div class="clear"></div>
            <!-- /tpl_page -->

        </div>
        <div class="clear"></div>
        <!-- /tpl_page_wrapper -->

    </body>

</html>