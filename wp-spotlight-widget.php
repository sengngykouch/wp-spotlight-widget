<?php
/**
 * Plugin Name: WP Spotlight Widget
 * Plugin URI: http://wcsu.edu/
 * Description: Widget for spotlight images and texts
 * Version: 1.0.0
 * Author: Sengngy Kouch
 * Author URI: http://wcsu.edu/
 * License: GPL2
 */

class wp_spotlight_widget extends WP_Widget {
    /**
	 * Sets up the widgets name etc
	 */
    public function __construct(){
        $widget_ops = array(
            'classname' => 'wp_spotlight_widget',
            'discription' => 'spotlight widget for images and texts',
        );
        // Give widget name here
        parent::__construct('wp_spotlight_widget', 'WP Spotlight Widget', $widget_ops);
    }

    /**
	 * Outputs the content of the widget
   *
	 * @param array $args
	 * @param array $instance
	 */
    public function widget( $args, $instance ) {
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        $spotlight_image_link = ! empty( $instance['spotlight_image_link'] ) ? $instance['spotlight_image_link'] : '';
        $spotlight_name = ! empty( $instance['spotlight_name'] ) ? $instance['spotlight_name'] : '';
        $spotlight_description = ! empty( $instance['spotlight_description'] ) ? $instance['spotlight_description'] : '';
        $spotlight_link = ! empty( $instance['spotlight_link'] ) ? $instance['spotlight_link'] : '';
       
        echo $args['before_widget'];
?>
        <!-- 00000000000000000000000 Working here 00000000000000000000000000000000000000 -->
        <div class="spotlight-wrapper">

            <p class="spotlight-title"><strong><?php echo $title; ?></strong></p>
            <div>
                <p class="spotlight-content"><a href="<?php echo $spotlight_link ?>">
                    <img src="<?php echo $spotlight_image_link; ?>" alt="" max-width="180" ></a>
                    <br/>
                    <br><?php echo $spotlight_name; ?><br> 
                    <em><?php echo $spotlight_description; ?></em><br>
                    <a href="<?php echo $spotlight_link; ?>">Learn more ...</a></p>
            </div>
        </div>

        <!--==================== Style sheet for this Spot light Widget ===================-->
        <style>
            .spotlight-wrapper{
                border: 1px solid #4678a1;
                width:90%;
            }

            .spotlight-title{
                background-color:#4678a1;
                padding:  5px 10px;
                color:white;
                text-align: center;
            }

            .spotlight-content{
                margin:auto;
                max-width: 180px;
                padding-top: 15px;
                padding-bottom: 20px;
            }

        </style>    
<?php
        echo $args['after_widget'];
    }


    /**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
    public function form( $instance ) {
        // outputs the options form on admin
        $instance = wp_parse_args( (array) $instance, array( 'title' => '','spotlight_image_link' => '', 'spotlight_name' => '', 'spotlight_description' => '', 'spotlight_link' => '', 'text' => '' ) );
        $title = sanitize_text_field( $instance['title'] );
        $spotlight_image_link = $instance['spotlight_image_link'];
        $spotlight_name = $instance['spotlight_name'];
        $spotlight_description = $instance['spotlight_description'];
        $spotlight_link = $instance['spotlight_link'];    
?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title for the spot light:', 'text_domain' ); ?></label>
            <input 
                   class="widefat" 
                   id="<?php echo $this->get_field_id('title'); ?>" 
                   name="<?php echo $this->get_field_name('title'); ?>" 
                   type="text" 
                   value="<?php echo esc_attr($title); ?>"
                   />
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'spotlight_image_link' ) ); ?>"><?php esc_attr_e( 'Image\'s link:', 'text_domain' ); ?></label>
            <input 
                   class="widefat" 
                   id="<?php echo $this->get_field_id('spotlight_image_link'); ?>" 
                   name="<?php echo $this->get_field_name('spotlight_image_link'); ?>" 
                   type="text" 
                   value="<?php echo esc_attr($spotlight_image_link); ?>" 
                   />
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'spotlight_name' ) ); ?>"><?php esc_attr_e( 'Person full name:', 'text_domain' ); ?></label>
            <input 
                   class="widefat" 
                   id="<?php echo $this->get_field_id('spotlight_name'); ?>" 
                   name="<?php echo $this->get_field_name('spotlight_name'); ?>" 
                   type="text" 
                   value="<?php echo esc_attr($spotlight_name); ?>" 
                   />
        </p>

         <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'spotlight_description' ) ); ?>"><?php esc_attr_e( 'Short description:', 'text_domain' ); ?></label>
             <textarea 
                      class="widefat" 
                      rows="2" cols="20" 
                      id="<?php echo $this->get_field_id('spotlight_description'); ?>" 
                      name="<?php echo $this->get_field_name('spotlight_description'); ?>">
                <?php echo esc_textarea( $instance['spotlight_description'] ); ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'spotlight_link' ) ); ?>"><?php esc_attr_e( 'Link to person\'s page:', 'text_domain' ); ?></label>
            <input 
                   class="widefat" 
                   id="<?php echo $this->get_field_id('spotlight_link'); ?>" 
                   name="<?php echo $this->get_field_name('spotlight_link'); ?>" 
                   type="text" 
                   value="<?php echo esc_attr($spotlight_link); ?>" 
                   />
        </p>   
<?php

    }

    /**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
    public function update( $new_instance, $old_instance ) {      

        $instance = $old_instance;
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['spotlight_image_link'] = sanitize_text_field( $new_instance['spotlight_image_link'] );        
        $instance['spotlight_name'] = sanitize_text_field( $new_instance['spotlight_name'] );
        $instance['spotlight_description'] = sanitize_text_field( $new_instance['spotlight_description'] );
        $instance['spotlight_link'] = sanitize_text_field( $new_instance['spotlight_link'] ); 
        return $instance;
    }
    
}

// register widget
add_action( 'widgets_init', function(){
    register_widget( 'wp_spotlight_widget' );
});
