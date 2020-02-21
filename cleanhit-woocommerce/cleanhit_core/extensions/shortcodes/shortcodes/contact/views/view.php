<?php
    if (!defined('FW')) {
        die('Forbidden');
    }    
?>
<!--contact end here -->
    <!-- Contact Info start -->
    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <?php foreach ($atts['contact_info'] as $item) : ?>
                <div class="col-lg-4">
                    <div class="contact-item">
                        <div class="contact-icon">
                        <?php 
                            $url =  esc_url( $item['contact_image']['url'] );
                            $image = cleanhit_resize( $url, 60, 60, true, true, true );
                        ?>
                        <img src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>"/>
                        </div>
                        <div class="info-content">
                            <h5><?php echo esc_html($item['contact_title']); ?></h5>
                            <?php echo wp_kses_post($item['contact_content']); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

