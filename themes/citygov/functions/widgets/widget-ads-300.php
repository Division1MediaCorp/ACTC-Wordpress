<?php
/*---------------------------------------------------------------------------------*/
/* Ads Widget */
/*---------------------------------------------------------------------------------*/

class citygov_ad_300 extends WP_Widget {

	public function __construct() {
		$widget_ops = array('description' => esc_html__('Use this widget to add any type of Ad as a widget.','citygov') );
		parent::__construct(false, esc_html__('Themnific: Ads 300px/Free','citygov'),$widget_ops);      
	}

	function widget($args, $instance) {  
		$title = $instance['title'];
		$adcode = $instance['adcode'];
		$image = $instance['image'];
		$href = $instance['href'];
		$alt = $instance['alt'];

        

		
			
		echo '<div class="ad300"><div class="ad300_inn">';	
		
		if($title != '')

			echo '<h2 class="widget"><span>'.esc_attr($title).'</span></h2>';
			
		if($adcode != ''){
		?>
		
		<?php echo stripslashes($adcode); ?>
		
		<?php } else { ?>
		
			<a target="_blank" href="<?php echo esc_url($href); ?>"><img class="grayscale grayscale-fade" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>" /></a>
			<div style="clear: both;"></div>
		<?php
		}
		
		echo '</div></div>';

	}

	function update($new_instance, $old_instance) {                
		return $new_instance;
	}

	function form($instance) {    
	
		$defaults = array('title' => 'Advertisement', 'adcode' => '', 'image' => '', 'href' => '', 'alt' => '');
		$instance = wp_parse_args((array) $instance, $defaults);
			    
		$title = esc_attr($instance['title']);
		$adcode = esc_attr($instance['adcode']);
		$image = esc_attr($instance['image']);
		$href = esc_attr($instance['href']);
		$alt = esc_attr($instance['alt']);
		?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title (optional):','citygov'); ?></label>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('adcode')); ?>"><?php esc_html_e('Ad Code:','citygov'); ?></label>
            <textarea name="<?php echo esc_attr($this->get_field_name('adcode')); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('adcode')); ?>"><?php echo stripslashes($adcode); ?></textarea>
        </p>
        <p><strong>or</strong></p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_html_e('Image Url:','citygov'); ?></label>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('image')); ?>" value="<?php echo esc_url($image); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('image')); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('href')); ?>"><?php esc_html_e('Link URL:','citygov'); ?></label>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('href')); ?>" value="<?php echo esc_url($href); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('href')); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('alt')); ?>"><?php esc_html_e('Alt text:','citygov'); ?></label>
            <input type="text" name="<?php echo esc_attr($this->get_field_name('alt')); ?>" value="<?php echo esc_attr($alt); ?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('alt')); ?>" />
        </p>
        <?php
	}
} 

register_widget('citygov_ad_300');
?>