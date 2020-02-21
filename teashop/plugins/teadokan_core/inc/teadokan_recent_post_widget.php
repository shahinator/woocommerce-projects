<?php

add_action('widgets_init', 'teadokan_recent_post_load_widgets');
function teadokan_recent_post_load_widgets(){
	register_widget('teadokan_recent_post_Widget');
}


class teadokan_recent_post_Widget extends WP_Widget {
	public function __construct() {
		$widget_ops = array('classname' => 'teadokan_recent', 'description' => esc_html__('Teadokan: Recent Posts Widget','teadokan') );
		$control_ops = array('id_base' => 'teadokan_recent-widget');
		parent::__construct('teadokan_recent-widget', esc_html__('teadokan: Recent Posts','teadokan'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$number = $instance['number'];
		echo $before_widget;

		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  -->

		<div class="sidebar-recent-post">
			<div class="recent-post-widget">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => $number,
					'has_password' => false,
					'order' => 'DESC'
				);
				$post = new WP_Query($args);
					if($post->have_posts()):
				?>
				<?php while($post->have_posts()): $post->the_post(); ?>
				<?php
					$permalink = get_permalink();
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'teadokan-rcnt-post-wdgt' );
				?>		
				<div class="media single-post">
					<div class="pull-left">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'teadokan-small-thumb', array( 'class' => 'img-responsive' ) );
						}
						else {}
						?>
					</div>
					<div class="media-body">
						<h4 class="media-heading"><a href="<?php echo esc_url($permalink); ?>"><?php the_title(); ?></a></h4>								
						<span><?php echo esc_html(get_the_time('d M, Y')); ?></span>
					</div>
				</div>
				<?php  endwhile; endif; 
				wp_reset_postdata();
				?>			
			</div>
		</div>
		<!-- start code here -->

		<?php
		echo $after_widget;
	}
	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['number'] = $new_instance['number'];
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Post', 'number' => 4);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','teadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of Posts to show','teadokan'); ?>:</label>
			<input class="widefat" type="number" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
		</p>
	<?php
	}
}
