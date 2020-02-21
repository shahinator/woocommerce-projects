<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<!-- Faq Start -->
<section class="faq-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="faq-btn-col">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <?php  
                            $activeClass = 'active';
                            foreach ($atts['faq_setting'] as $faq) : 
                        ?>
                        <a class="nav-link  <?php echo esc_attr($activeClass); ?>" id="<?php echo cleanhit_make_slug($faq['title']); ?>-tab" data-toggle="pill" href="#<?php echo cleanhit_make_slug($faq['title']); ?>" role="tab" aria-selected="true"><?php  echo esc_html($faq['title']); ?></a>

                        <?php 
                        $activeClass = ' ';
                        endforeach;?>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="faq-col">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show   <?php echo esc_attr($activeClass); ?>" id="<?php echo cleanhit_make_slug($faq['title']); ?>" role="tabpanel" aria-labelledby="<?php echo cleanhit_make_slug($faq['title']); ?>-tab">
                    <div class="row">
                            <?php  
                                $activeClass = 'active';
                                foreach ($faq['faq_list'] as $faqlist) : 
                            ?>
                            <div class="col-md-6">
                                <div class="question-box">
                                    <h5><?php  echo esc_html($faqlist['name']); ?></h5>
                                    <?php echo wp_kses_post($faqlist['faq_content']); ?>
                                </div>
                            </div>
                            <?php 
                            $activeClass = ' ';
                            endforeach;?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>