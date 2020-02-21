<?php

add_action('widgets_init', 'cleanhit_about_load_widgets');
function cleanhit_about_load_widgets(){
	register_widget('cleanhit_about_Widget');
}


class cleanhit_about_Widget extends WP_Widget {

	public function __construct() {
		$widget_ops = array('classname' => 'deadokan_about', 'description' => esc_html__('cleanhit: About Widget','deadokan'));
		$control_ops = array('id_base' => 'deadokan_about-widget');
		parent::__construct('deadokan_about-widget', esc_html__('cleanhit: About Widget','deadokan'), $widget_ops, $control_ops);
	}

	function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		echo $before_widget;

		if($title) {
			echo $before_title.$title.$after_title;
		}
		?>

		<!-- start coding  --> 
			<p><?php if(isset($instance['description'])) echo $instance['description']; ?></p>
			<div class="social-media">
				<ul>
                	<?php
                    	if(isset($instance['fb'])){
                    		?><li><a href="<?php echo $instance['fb']; ?>"><i class="fa fa-facebook"></i></a></li><?php
                    	}  
                    	if(isset($instance['tw'])){
                    		?><li><a href="<?php echo $instance['tw']; ?>"><i class="fa fa-twitter"></i></a></li><?php
                    	}   
                    	if(isset($instance['pin'])){
                    		?><li><a href="<?php echo $instance['pin']; ?>"><i class="fa fa-pinterest-p"></i></a></li><?php
                    	}  
                    	if(isset($instance['ld'])){
                    		?><li><a href="<?php echo $instance['ld']; ?>"><i class="fa fa-linkedin"></i></a></li><?php
                    	}  
                    	if(isset($instance['inst'])){
                    		?><li><a href="<?php echo $instance['inst']; ?>"><i class="fa fa-instagram"></i></a></li><?php
                    	}  
                	?>
				</ul>
			</div> 
		<!-- start code here -->

		<?php
		echo $after_widget;
	}

	function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['description'] = $new_instance['description'];
		$instance['fb'] = $new_instance['fb'];
		$instance['tw'] = $new_instance['tw']; 
		$instance['pin'] = $new_instance['pin'];
		$instance['ld'] = $new_instance['ld'];
		$instance['inst'] = $new_instance['inst'];
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'About cleanhit','description' => '','fb' => '','tw' => '', 'pin' => '','ld' => '','inst' => '' );
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','deadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description','deadokan'); ?>:</label>
			<textarea class="widefat" rows="3" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>"><?php echo $instance['description']; ?></textarea>
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('fb')); ?>"><?php esc_html_e('Facebook','deadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('fb')); ?>" name="<?php echo esc_attr($this->get_field_name('fb')); ?>" value="<?php echo esc_attr($instance['fb']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('tw')); ?>"><?php esc_html_e('Twitter','deadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('tw')); ?>" name="<?php echo esc_attr($this->get_field_name('tw')); ?>" value="<?php echo esc_attr($instance['tw']); ?>" />
		</p> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('pin')); ?>"><?php esc_html_e('Pinterest','deadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('pin')); ?>" name="<?php echo esc_attr($this->get_field_name('pin')); ?>" value="<?php echo esc_attr($instance['pin']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('ld')); ?>"><?php esc_html_e('Linkedin','deadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('ld')); ?>" name="<?php echo esc_attr($this->get_field_name('ld')); ?>" value="<?php echo esc_attr($instance['ld']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('inst')); ?>"><?php esc_html_e('Instagram','deadokan'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id('inst')); ?>" name="<?php echo esc_attr($this->get_field_name('inst')); ?>" value="<?php echo esc_attr($instance['inst']); ?>" />
		</p>
	<?php
	}
}


