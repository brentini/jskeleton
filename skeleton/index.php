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

        <?php if ($tpl_options->analytics):?>

            <script type="text/javascript">

              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', '<?php echo $tpl_options->analytics;?>']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();

            </script>

        <?php endif;?>

    </head>

    <body>

        <!-- tpl_page_wrapper -->
        <div class="jsk_page_wrapper">

            <!-- tpl_page -->
            <div class="jsk_page container">

                <!-- tpl_header_wrapper -->
                <div class="jsk_header_wrapper">

                    <!-- tpl_header -->
                    <div class="jsk_header">

                        <!-- tpl_toolbar -->
                        <div class="jsk_toolbar sixteen columns">
                            <div class="jsk_date"><?php echo JFactory::getDate()->format(JText::_('DATE_FORMAT_LC1'));?></div>
                            <jdoc:include type="modules" name="toolbar" style="jsk_xhtml" />
                        </div>
                        <div class="clear"></div>
                        <!-- /tpl_toolbar -->

                        <!-- tpl_logo -->
                        <div class="jsk_logo five columns">
                            <jdoc:include type="modules" name="logo" style="jsk_xhtml" />
                        </div>
                        <!-- /tpl_logo -->

                        <!-- tpl_menu -->
                        <div class="jsk_menu eleven columns">
                            <nav>
                                <jdoc:include type="modules" name="menu" style="none" />
                            </nav>
                        </div>
                        <div class="clear"></div>
                        <!-- /tpl_menu -->

                    </div>
                    <div class="clear"></div>
                    <!-- tpl_header -->

                </div>
                <div class="clear"></div>
                <!-- /tpl_header_wrapper -->

                <div class="jsk_message">
                    <jdoc:include type="message" />
                </div>
                <div class="clear"></div>


                <?php if ($this->countModules('top-a') || $this->countModules('top-b')): ?>

                    <!-- tpl_top_wrapper -->
                    <div class="jsk_top_wrapper">

                        <!-- tpl_top -->
                        <div class="jsk_top">

                        <?php if ($this->countModules('top-a')): ?>

                            <!-- tpl_top_a -->
                            <div class="jsk_top_a">
                                <jdoc:include type="modules" name="top-a" style="jsk_xhtml" />
                            </div>
                            <div class="clear"></div>
                            <!-- /tpl_top_a -->

                        <?php endif; ?>

                        <?php if ($this->countModules('top-b')): ?>

                            <!-- tpl_top_b -->
                            <div class="jsk_top_b">
                                <div id="jsk_top_b">
                                    <jdoc:include type="modules" name="top-b" style="jsk_xhtml" />
                                </div>
                            </div>
                            <div class="clear"></div>
                            <!-- /tpl_top_b -->

                        <?php endif; ?>

                        </div>
                        <div class="clear"></div>
                        <!-- /tpl_top -->

                    </div>
                    <div class="clear"></div>
                    <!-- /tpl_top_wrapper -->

                <?php endif; ?>

                <!-- tpl_main_wrapper -->
                <div class="jsk_main_wrapper">

                    <!-- tpl_main -->
                    <div class="jsk_main">

                        <!-- tpl_component -->
                        <div class="jsk_component <?php echo $tpl_options->component;?> columns">

                            <?php if ($this->countModules('innertop')): ?>

                                <!-- tpl_innertop -->
                                <div class="jsk_innertop">
                                    <jdoc:include type="modules" name="innertop" style="jsk_xhtml" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_innertop -->

                            <?php endif; ?>

                            <?php if ($this->countModules('breadcrumbs')): ?>

                                <!-- tpl_breadcrumbs -->
                                <div class="jsk_breadcrumbs">
                                    <jdoc:include type="modules" name="breadcrumbs" style="none" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_breadcrumbs -->

                            <?php endif; ?>                               
                            
                            <jdoc:include type="component" />
                                
                            <?php if ($this->countModules('innerbottom')): ?>

                                <!-- tpl_innerbottom -->
                                <div class="jsk_innerbottom">
                                    <jdoc:include type="modules" name="innerbottom" style="jsk_xhtml" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_innerbottom -->

                            <?php endif; ?>

                        </div>
                        <!-- /tpl_component -->

                        <?php if ($this->countModules('sidebar-a') || $this->countModules('sidebar-b')): ?>

                            <!-- tpl_sidebar -->
                            <div class="jsk_sidebar five columns">

                            <?php if ($this->countModules('sidebar-a')): ?>

                                <!-- tpl_sidebar_a -->
                                <div class="jsk_sidebar_a">
                                    <jdoc:include type="modules" name="sidebar-a" style="jsk_xhtml" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_sidebar_a -->

                            <?php endif; ?>

                            <?php if ($this->countModules('sidebar-b')): ?>

                                <!-- tpl_sidebar_b -->
                                <div class="jsk_sidebar_b">
                                    <jdoc:include type="modules" name="sidebar-b" style="jsk_xhtml" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_sidebar_b -->

                            <?php endif; ?>

                            </div>
                            <div class="clear"></div>
                            <!-- /tpl_sidebar -->

                        <?php endif; ?>

                    </div>
                    <div class="clear"></div>
                    <!-- /tpl_main -->

                </div>
                <div class="clear"></div>
                <!-- /tpl_main_wrapper -->

                <?php if ($this->countModules('bottom-a') || $this->countModules('bottom-b')): ?>

                    <!-- tpl_bottom_wrapper -->
                    <div class="jsk_bottom_wrapper">

                        <!-- tpl_bottom -->
                        <div class="jsk_bottom">

                            <?php if ($this->countModules('bottom-a')): ?>

                                <!-- tpl_bottom_a -->
                                <div class="jsk_bottom_a">
                                    <jdoc:include type="modules" name="bottom-a" style="jsk_xhtml" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_bottom_a -->

                            <?php endif; ?>

                            <?php if ($this->countModules('bottom-b')): ?>

                                <!-- tpl_bottom_b -->
                                <div class="jsk_bottom_b">
                                    <jdoc:include type="modules" name="bottom-b" style="jsk_xhtml" />
                                </div>
                                <div class="clear"></div>
                                <!-- /tpl_bottom_b -->

                            <?php endif; ?>

                        </div>
                        <div class="clear"></div>
                        <!-- /tpl_bottom -->

                    </div>
                    <div class="clear"></div>
                    <!-- /tpl_bottom_wrapper -->

                <?php endif; ?>

                <!-- tpl_footer_wrapper -->
                <div class="jsk_footer_wrapper">

                    <!-- tpl_footer -->
                    <div class="jsk_footer">
                        <jdoc:include type="modules" name="footer" style="xhtml" />
                    </div>
                    <div class="clear"></div>
                    <!-- /tpl_footer -->

                </div>
                <div class="clear"></div>
                <!-- /tpl_footer_wrapper -->

                <!-- tpl_copy -->
                <div class="jsk_copy">
                    <jdoc:include type="modules" name="copy" style="xhtml" />
                </div>
                <div class="clear"></div>
                <!-- /tpl_copy -->

            </div>
            <div class="clear"></div>
            <!-- /tpl_page -->

        </div>
        <div class="clear"></div>
        <!-- /tpl_page_wrapper -->

        <!-- resize div remove on for production templates -->
        <div class="resize"></div>

    </body>

</html>