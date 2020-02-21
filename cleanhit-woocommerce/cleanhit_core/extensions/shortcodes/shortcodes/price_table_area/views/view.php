<?php if ( ! defined( 'FW' ) ) {
die( 'Forbidden' );
}
/**
* @var array $atts
*/

?>
<!-- Pricing Start -->
<section class="pricing-area">
    <div class="container">
        <div class="row">
            <?php	foreach ($atts['price_plan'] as $price):?>	
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-col">
                        <div class="pricing-header">
                            <h4><?php  echo $price['title']; ?></h4>
                            <h1 class="our-price"><?php  echo $price['rate']; ?></h1>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <?php	foreach ($price['price_list'] as $pricelist):?>	
                                    <li><?php  echo $pricelist['name']; ?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <button type="button" class="btn btn-primary btn-lg btn-block theme-btn"><?php echo esc_html('Sing Up','cleanhit');?></button>
                        </div>
                    </div>
                </div>
            <?php 
            endforeach;?>
        </div>
    </div>
</section>





