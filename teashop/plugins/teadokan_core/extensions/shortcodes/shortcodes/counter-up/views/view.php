<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>
<!-- counter area start here -->
<div class="customer_wrapper">             
    <!-- ABOUT-COUNTER-LIST START -->
    <div class="coundown_single  text-center justify-content-between">
        <h2 class="about-counter"><span class="counter"><?php echo esc_html($atts['counterup_number']); ?></span></h2>
        <p><?php echo esc_html($atts['counterup_title']);?></p>
    </div>
    <!-- ABOUT-COUNTER-LIST END -->   
</div><!-- counter area end here -->
