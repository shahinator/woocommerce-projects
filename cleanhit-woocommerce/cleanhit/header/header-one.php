<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleanhit
 */
global $cleanhit_opt;

?>
    <!-- Main Header start -->
   <header class="main-header">
       <?php if (!empty($cleanhit_opt['cleanhit_header_topbar']) && $cleanhit_opt['cleanhit_header_topbar'] == 1) { ?>
           <!-- Header Top bar Start -->
           <div class="header-topbar-area">
               <div class="arrow-bg"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-6">
                           <div class="header-topbar-col">
                               <p><?php echo esc_html('Welcome to our cleaning services','cleanhit');?></p>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="header-topbar-col">
                                   <?php if (!empty($cleanhit_opt['cleanhit_social_enable']) && $cleanhit_opt['cleanhit_social_enable'] == 1) { ?>
                                       <!-- Social Icons -->
                                       <ul>
                                           <?php if (!empty($cleanhit_opt['cleanhit_facebook']) && !empty($cleanhit_opt['cleanhit_facebook'])) { ?>
                                               <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_facebook']); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                           <?php } ?>
                                           <?php if (!empty($cleanhit_opt['cleanhit_twitter']) && !empty($cleanhit_opt['cleanhit_twitter'])) { ?>
                                               <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_twitter']); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                           <?php } ?>
                                           <?php if (!empty($cleanhit_opt['cleanhit_linkedin']) && !empty($cleanhit_opt['cleanhit_linkedin'])) { ?>
                                               <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_linkedin']); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                           <?php } ?>
                                           <?php if (!empty($cleanhit_opt['cleanhit_google_plus']) && !empty($cleanhit_opt['cleanhit_google_plus'])) { ?>
                                               <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_google_plus']); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                           <?php } ?>
                                           <?php if (!empty($cleanhit_opt['cleanhit_instagram']) && !empty($cleanhit_opt['cleanhit_instagram'])) { ?>
                                               <li><a href="<?php echo esc_url($cleanhit_opt['cleanhit_instagram']); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                           <?php } ?>
                                           </ul>
                                       <!-- Social Icons -->						
                                   <?php } ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       <?php } ?>		
       <?php if (!empty($cleanhit_opt['cleanhit_header_middle']) && $cleanhit_opt['cleanhit_header_middle'] == 1) { ?>
       <!-- Header Info Bar Start -->
           <div class="header-infobar-area">
               <div class="container">
                   <div class="row">
                       <?php if (!empty($cleanhit_opt['cleanhit_header_middle_phone']) && !empty($cleanhit_opt['cleanhit_header_middle_phone'])) { ?>
                           <div class="col-md-3 col-sm-6">
                               <div class="header-infobar-col">
                                   <img src="<?php echo CLEANHIT_IMAGES; ?>/icon/call.png" alt="<?php bloginfo( 'name' ); ?>">
                                   <h6><?php echo esc_html('Phone','cleanhit');?></h6>
                                   <p><?php echo esc_html($cleanhit_opt['cleanhit_header_middle_phone']); ?></p>
                               </div>
                           </div>
                       <?php } ?>
                       <?php if (!empty($cleanhit_opt['cleanhit_header_middle_email']) && !empty($cleanhit_opt['cleanhit_header_middle_email'])) { ?>
                       <div class="col-md-3 col-sm-6">
                           <div class="header-infobar-col">
                               <img src="<?php echo CLEANHIT_IMAGES; ?>/icon/email.png" alt="<?php bloginfo( 'name' ); ?>">
                               <h6><?php echo esc_html('Email','cleanhit');?></h6>
                               <p><?php echo esc_html($cleanhit_opt['cleanhit_header_middle_email']); ?></p>
                           </div>
                       </div>
                       <?php } ?>
                       <?php if (!empty($cleanhit_opt['cleanhit_header_middle_location']) && !empty($cleanhit_opt['cleanhit_header_middle_location'])) { ?>
                       <div class="col-md-3 col-sm-6">
                           <div class="header-infobar-col">
                               <img src="<?php echo CLEANHIT_IMAGES; ?>/icon/location.png" alt="<?php bloginfo( 'name' ); ?>">
                               <h6><?php echo esc_html('Location','cleanhit');?></h6>
                               <p><?php echo esc_html($cleanhit_opt['cleanhit_header_middle_location']); ?></p>
                           </div>
                       </div>
                       <?php } ?>
                       <?php if (!empty($cleanhit_opt['cleanhit_header_middle_book_now']) && !empty($cleanhit_opt['cleanhit_header_middle_book_now'])) { ?>
                       <div class="col-md-3 col-sm-6">
                           <div class="header-infobar-btn">
                               <a class="btn btn-primary theme-btn" href="<?php echo esc_url($cleanhit_opt['cleanhit_header_middle_book_now']); ?>" role="button"><?php echo esc_html('Book Now','cleanhit');?></a>
                           </div>
                       </div>
                       <?php } ?>


                   </div>
               </div>
           </div>
       <?php } ?>
       <div class="header-navbar fixed-header">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-6 col-7">
                       <div class="header-logo">
                           <a href="<?php echo esc_url(home_url('/')); ?>">
                               <img src="<?php echo esc_url(cleanhit_logo_url(CLEANHIT_IMAGES . '/logo.png'));?>" alt="<?php bloginfo('name') ?>">
                            </a> 
                       </div>
                   </div>
                   <div class="col-lg-9 col-md-6 col-5">
                       <div class="stellarnav">
                           <?php cleanhit_main_menu(); ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
