<?php
/**
 * @package WordPress
 * @subpackage Highend
 */
?>
<!-- BEGIN #copyright-wrapper -->
<div id="copyright-wrapper" class="<?php echo hb_options('hb_copyright_style'); ?> <?php echo hb_options('hb_copyright_color_scheme'); if ( hb_options("hb_footer_bg_image") ){ echo 'footer-bg-image'; } ?> clearfix"> <!-- Simple copyright opcija light style opcija-->

    <!-- BEGIN .container -->
    <div class="container">

        <!-- BEGIN #copyright-text -->
        <!-- <div id="copyright-text"> -->
        <div class="copyright-data">
            <div class="left">
                <h1>Second<span>life</span></h1>
                <p>&copy; Copyright 2017 all rights reserved</p>
            </div>
            <div class="right">
                <p>Call our toll free helpline</p>
                <div class="contact">
                    <div class="email">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> hello@secondlife.com
                    </div>
                    <div class="number">
                        <i class="fa fa-phone" aria-hidden="true"></i> 1800 555 5555
                    </div>
                </div>
            </div>
            <!-- <p> -->
            <!--?php echo do_shortcode(hb_options('hb_copyright_line_text')); ?-->

            <!--?php
                if (hb_options('hb_enable_backlink')){
                    echo ' <a href="http://www.mojomarketplace.com/store/hb-themes?r=hb-themes&utm_source=hb-themes&utm_medium=textlink&utm_campaign=themesinthewild">Theme by HB-Themes.</a>';
                }
            ?-->

            <!-- </p> -->

        </div>
        <!-- END #copyright-text -->

        <?php
        if ( has_nav_menu ('footer-menu') ) {
            wp_nav_menu( array ( 'theme_location' => 'footer-menu' , 'container_id' => 'footer-menu', 'container_class'=> 'clearfix', 'menu_id'=>'footer-nav', 'menu_class' => '', 'walker' =>  new hb_custom_walker) );
        } 
        ?>

    </div> 
    <!-- END .container -->

</div>
<!-- END #copyright-wrapper -->