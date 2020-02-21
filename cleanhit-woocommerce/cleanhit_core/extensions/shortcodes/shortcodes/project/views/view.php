<?php
    if (!defined('FW')) {
        die('Forbidden');
    }  

    $project_image = $atts['project_image']; 
    if ( empty( $atts['project_image'] ) ) {
        return;
    }
    $url =  esc_url( $project_image['url'] );
    $image = cleanhit_resize( $url,132, 120, true, true, true );



global $post;
$cleanhit_paged = get_query_var('paged') ? get_query_var('paged') : 1;
query_posts( array( 
    'post_type' => 'cleanhitprojects', 
    'paged' => $cleanhit_paged,
    'posts_per_page' => $atts['posts_per_page'],
    'order'   => $atts['order'],
    ) ); 
?>



<!-- Project Start -->
<section class="project-area">
    <div class="container-fluid">
        <div class="row">
            <?php if($atts['section_style'] == 'title_show'): ?>
            <div class="col-md-12">
                <div class="section-title">
                    <p><?php echo esc_html($atts['project_subtitle']); ?></p>
                    <h2><?php echo esc_html($atts['project_title']); ?></h2>
                    <?php echo wp_kses_post($atts['project_content']); ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title();?>">
                </div>
            </div>
            <?php else: ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Filter Nav -->               
                <ul class="project-nav"> 
                    <li class="filter" data-filter="all"><?php esc_html_e('All','cleanhit') ?></li>
                    <?php $cleanhit_terms = get_terms( 'cleanhitprojects_cat' );
                        if ( ! empty( $cleanhit_terms ) && ! is_wp_error( $cleanhit_terms ) ){
                            foreach ( $cleanhit_terms as $term ) {
                                echo '<li class="filter" data-filter=".' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</li>';
                            }	
                        } 
                    ?>
                </ul>                
                <div id="Container">                
                <?php if($atts['container_style'] == 'container_fuild'): ?>
                    <div class="custom container-fluid">
                            <div class="row">                    
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php
                                    $cleanhit_terms = get_the_terms( $post->ID, 'cleanhitprojects_cat' );	
                                    if ( $cleanhit_terms && ! is_wp_error( $cleanhit_terms ) ) : 
                                        $cleanhit_links = array();
                                        foreach ( $cleanhit_terms as $term ) {
                                            $cleanhit_links[] = $term->slug;
                                        }	
                                        $cleanhit_jlink = join( " ", $cleanhit_links );
                                        $type = get_post_meta(get_the_ID(),'_cleanhit_select_type',true);
                                        $tp = strtolower(str_replace(" ", "-", $type));

                                        $url = get_post_meta( get_the_ID(), 'cleanhitproject_project_thumbnail', true );
                                        $image = cleanhit_resize( $url, 380, 380, true, true, true );
                                ?>
                                <?php if( $atts['per_row_setting'] == 'per_row_3'): ?>
                                    <div class="col-md-4 mix  <?php echo esc_attr($cleanhit_jlink); ?>">                        
                                        <div class="portfolio-item portfolio-item--eff3">   
                                            <img class="portfolio-item__image" src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">                            
                                            <div class="portfolio-item__info">
                                                <h3 class="portfolio-item__header"><?php the_title(); ?></h3>
                                                <div class="portfolio-item__links">
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link" href="#" title="Link Title">
                                                        <i class="icon icon-Linked"></i>
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link html5lightbox" href="<?php echo esc_url($url);?>" data-group="mygroup" data-thumbnail="<?php echo esc_url($url);?>" title="Project 3">
                                                        <i class="icon icon-Search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                <?php else: ?>
                                    <div class="filtr-item col-md-3 mix  <?php echo esc_attr($cleanhit_jlink); ?>">                        
                                        <div class="portfolio-item portfolio-item--eff3">   
                                            <img class="portfolio-item__image" src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">                            
                                            <div class="portfolio-item__info">
                                                <h3 class="portfolio-item__header"><?php the_title(); ?></h3>
                                                <div class="portfolio-item__links">
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link" href="#" title="Link Title">
                                                        <i class="icon icon-Linked"></i>
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link html5lightbox" href="<?php echo esc_url($url);?>" data-group="mygroup" data-thumbnail="<?php echo esc_url($url);?>" title="Project 3">
                                                        <i class="icon icon-Search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                <?php endif; ?>
                                <?php endif; endwhile; wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                <div class="custom container">
                    <div class="row">                    
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php
                            $cleanhit_terms = get_the_terms( $post->ID, 'cleanhitprojects_cat' );	
                            if ( $cleanhit_terms && ! is_wp_error( $cleanhit_terms ) ) : 
                                $cleanhit_links = array();
                                foreach ( $cleanhit_terms as $term ) {
                                    $cleanhit_links[] = $term->slug;
                                }	
                                $cleanhit_jlink = join( " ", $cleanhit_links );
                                $type = get_post_meta(get_the_ID(),'_cleanhit_select_type',true);
                                $tp = strtolower(str_replace(" ", "-", $type));

                                $url = get_post_meta( get_the_ID(), 'cleanhitproject_project_thumbnail', true );
                                $image = cleanhit_resize( $url, 380, 380, true, true, true );
                        ?>
                            <?php if($atts['per_row_setting'] == 'per_row_3'): ?>
                                <?php if($atts['gutter_setting'] == 'guttter'): ?>                                
                                    <div class="col-md-4 mix  <?php echo esc_attr($cleanhit_jlink); ?>">                        
                                        <div class="portfolio-item portfolio-item--eff3">   
                                            <img class="portfolio-item__image" src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">                            
                                            <div class="portfolio-item__info">
                                                <h3 class="portfolio-item__header"><?php the_title(); ?></h3>
                                                <div class="portfolio-item__links">
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link" href="#" title="Link Title">
                                                        <i class="icon icon-Linked"></i>
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link html5lightbox" href="<?php echo esc_url($url);?>" data-group="mygroup" data-thumbnail="<?php echo esc_url($url);?>" title="Project 3">
                                                        <i class="icon icon-Search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                <?php else: ?>
                                    <div class="filtr-item col-md-3 mix  <?php echo esc_attr($cleanhit_jlink); ?>">                        
                                        <div class="portfolio-item portfolio-item--eff3">   
                                            <img class="portfolio-item__image" src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">                            
                                            <div class="portfolio-item__info">
                                                <h3 class="portfolio-item__header"><?php the_title(); ?></h3>
                                                <div class="portfolio-item__links">
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link" href="#" title="Link Title">
                                                        <i class="icon icon-Linked"></i>
                                                        </a>
                                                    </div>
                                                    <div class="portfolio-item__link-block">
                                                        <a class="portfolio-item__link html5lightbox" href="<?php echo esc_url($url);?>" data-group="mygroup" data-thumbnail="<?php echo esc_url($url);?>" title="Project 3">
                                                        <i class="icon icon-Search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                <?php endif; ?>                                
                            <?php else: ?>
                                <div class="filtr-item col-md-3 mix  <?php echo esc_attr($cleanhit_jlink); ?>">                        
                                    <div class="portfolio-item portfolio-item--eff3">   
                                        <img class="portfolio-item__image" src="<?php echo esc_url($image);?>" alt="<?php bloginfo('name');?>">                            
                                        <div class="portfolio-item__info">
                                            <h3 class="portfolio-item__header"><?php the_title(); ?></h3>
                                            <div class="portfolio-item__links">
                                                <div class="portfolio-item__link-block">
                                                    <a class="portfolio-item__link" href="#" title="Link Title">
                                                    <i class="icon icon-Linked"></i>
                                                    </a>
                                                </div>
                                                <div class="portfolio-item__link-block">
                                                    <a class="portfolio-item__link html5lightbox" href="<?php echo esc_url($url);?>" data-group="mygroup" data-thumbnail="<?php echo esc_url($url);?>" title="Project 3">
                                                    <i class="icon icon-Search"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            <?php endif; ?>
                        <?php endif; endwhile; wp_reset_query();?>
                    </div>
                </div>
                </div>
                <?php endif; ?>
                </div>
        </div> 
    </div>
</section>