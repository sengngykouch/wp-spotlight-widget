<?php
/**
 * Plugin Name: WP Spotlight Widget
 * Plugin URI: http://wcsu.edu/
 * Description: Widget for spotlight images and texts
 * Version: 1.1
 * Author: Sengngy Kouch
 * Author URI: http://wcsu.edu/
 * License: GPL2
 */

class wp_spotlight_widget extends WP_Widget {
	/**
	 * Sets up the widgets name etc
	 */
	private $random_spotlight = 0;
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

		$max_spotlight = ( ! empty( $instance['max_spotlight'] ) ) ? absint( $instance['max_spotlight'] ) : 1;
		if ( ! $max_spotlight ) //default number of spotlight.
			$max_spotlight = 1;

		$title_background_color = ! empty( $instance['title_background_color'] ) ? $instance['title_background_color'] : '4678a1'; //4678a1 is a default color

		/**============== Spotlight 1 =========================*/
		$spotlight_image_link1 = ! empty( $instance['spotlight_image_link1'] ) ? $instance['spotlight_image_link1'] : '';
		$spotlight_name1 = ! empty( $instance['spotlight_name1'] ) ? $instance['spotlight_name1'] : '';
		$spotlight_description1 = ! empty( $instance['spotlight_description1'] ) ? $instance['spotlight_description1'] : '';
		$spotlight_link1 = ! empty( $instance['spotlight_link1'] ) ? $instance['spotlight_link1'] : '';

		/**============== Spotlight 2 =========================*/
		$spotlight_image_link2 = ! empty( $instance['spotlight_image_link2'] ) ? $instance['spotlight_image_link2'] : '';
		$spotlight_name2 = ! empty( $instance['spotlight_name2'] ) ? $instance['spotlight_name2'] : '';
		$spotlight_description2 = ! empty( $instance['spotlight_description2'] ) ? $instance['spotlight_description2'] : '';
		$spotlight_link2 = ! empty( $instance['spotlight_link2'] ) ? $instance['spotlight_link2'] : '';

		/**============== Spotlight 3 =========================*/
		$spotlight_image_link3 = ! empty( $instance['spotlight_image_link3'] ) ? $instance['spotlight_image_link3'] : '';
		$spotlight_name3 = ! empty( $instance['spotlight_name3'] ) ? $instance['spotlight_name3'] : '';
		$spotlight_description3 = ! empty( $instance['spotlight_description3'] ) ? $instance['spotlight_description3'] : '';
		$spotlight_link3 = ! empty( $instance['spotlight_link3'] ) ? $instance['spotlight_link3'] : '';

		/**============== Spotlight 4 =========================*/
		$spotlight_image_link4 = ! empty( $instance['spotlight_image_link4'] ) ? $instance['spotlight_image_link4'] : '';
		$spotlight_name4 = ! empty( $instance['spotlight_name4'] ) ? $instance['spotlight_name4'] : '';
		$spotlight_descriptio4n = ! empty( $instance['spotlight_description4'] ) ? $instance['spotlight_description4'] : '';
		$spotlight_link4 = ! empty( $instance['spotlight_link4'] ) ? $instance['spotlight_link4'] : '';

		/**============== Spotlight 5 =========================*/
		$spotlight_image_link5 = ! empty( $instance['spotlight_image_link5'] ) ? $instance['spotlight_image_link5'] : '';
		$spotlight_name5 = ! empty( $instance['spotlight_name5'] ) ? $instance['spotlight_name5'] : '';
		$spotlight_description5 = ! empty( $instance['spotlight_description5'] ) ? $instance['spotlight_description5'] : '';
		$spotlight_link5 = ! empty( $instance['spotlight_link5'] ) ? $instance['spotlight_link5'] : '';

		echo $args['before_widget'];

		//random variables
		$spotlight_image_linkR;
		$spotlight_nameR;
		$spotlight_descriptionR;
		$spotlight_linkR;
		//Randomly pick one of the spotlight individual 1 to 5, inclusive.
		$random_spotlight = rand(1,$max_spotlight);

		switch ($random_spotlight){
			case 1:
				$spotlight_image_linkR = $spotlight_image_link1;
				$spotlight_linkR = $spotlight_link1;
				$spotlight_nameR = $spotlight_name1;
				$spotlight_descriptionR = $spotlight_description1;
				break;
			case 2:
				$spotlight_image_linkR = $spotlight_image_link2;
				$spotlight_linkR = $spotlight_link2;
				$spotlight_nameR = $spotlight_name2;
				$spotlight_descriptionR = $spotlight_description2;
				break;
			case 3:
				$spotlight_image_linkR = $spotlight_image_link3;
				$spotlight_linkR = $spotlight_link3;
				$spotlight_nameR = $spotlight_name3;
				$spotlight_descriptionR = $spotlight_description3;
				break;
			case 4:
				$spotlight_image_linkR = $spotlight_image_link4;
				$spotlight_linkR = $spotlight_link4;
				$spotlight_nameR = $spotlight_name4;
				$spotlight_descriptionR = $spotlight_description4;
				break;
			case 5:
				$spotlight_image_linkR = $spotlight_image_link5;
				$spotlight_linkR = $spotlight_link5;
				$spotlight_nameR = $spotlight_name5;
				$spotlight_descriptionR = $spotlight_description5;
				break;
		}
?>
		<!-- Display on the webpage-->
		<div class="spotlight-wrapper">
			<p class="spotlight-title"><?php echo $title; ?></p>
			<div class="spotlight-content"><a href="<?php echo $spotlight_linkR; ?>">
				<img class="spotlight-img" src="<?php echo $spotlight_image_linkR; ?>" ></a>
				<p class="spotlight-paragraph">
					<br><strong><?php echo $spotlight_nameR; ?></strong><br>
					<em><?php echo $spotlight_descriptionR; ?></em><br>
				<div style="text-align:center">
					<a class="spotlight-btn-theme" href="<?php echo $spotlight_linkR; ?>">Learn more</a>
				</div>​ 
				</p>
		</div>
		</div>

		<!-- Style sheet for this display on the webpage-->
		<style>           

			.spotlight-wrapper{
				border: 1px solid #<?php echo $title_background_color; ?>;
				width: 100%;
			}

			.spotlight-title{
				background-color:#<?php echo $title_background_color; ?>;
				padding: 7px 10px;
				color:white;
				text-align: center;
				font-weight: bold;
			}

			.spotlight-content{
				margin:auto;
				width: 90%;
				padding-top: 15px;                
			}

			.spotlight-img{
				width:100%;
			}

			.spotlight-paragraph{
				text-align:center;
				font-size:1.1em;				
			}			

			.spotlight-btn-theme {
				background: #<?php echo $title_background_color; ?>;				
				color: #fff;
				user-select: none;
				background-image: none;							
				border-radius: 0;				
				background-clip: padding-box;
				display: inline-block;
				padding: 6px 12px;
				margin-bottom: 0;
				font-size: 14px;		
				font-weight: normal;
				line-height: 1.42857143;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				cursor: pointer;
				-webkit-transition: all 0.1s ease-in-out;
				-moz-transition: all 0.1s ease-in-out;
				-ms-transition: all 0.1s ease-in-out;
				-o-transition: all 0.1s ease-in-out;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				-moz-background-clip: padding;
				-webkit-background-clip: padding-box;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;						
			}			

			.spotlight-btn-theme,
			.spotlight-btn-theme:visited, 
			.spotlight-btn-theme:hover, 
			.spotlight-btn-theme:active{ 
				text-decoration: none;
			} 			

			@media only screen and (min-width: 768px){
				.spotlight-wrapper{
					border: 1px solid #<?php echo $title_background_color; ?>;
					width:90%;
				}				

				.spotlight-content{
					margin:auto;
					width: 80%;
					padding-top: 15px;				
				}

				.spotlight-img{
					max-width:180px;
				}

				.spotlight-paragraph{
					text-align:left;
					font-size:1em;				
				}
			}			

			@media only screen and (min-width: 1200px){					
				.spotlight-content{
					margin:auto;
					width: 200px;
					padding-top: 15px;				
				}

				.spotlight-img{
					max-width:200px;
				}				
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
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'title_background_color' => '',
															'spotlight_image_link1' => '', 'spotlight_name1' => '', 'spotlight_description1' => '', 'spotlight_link1' => '',
															'spotlight_image_link2' => '', 'spotlight_name2' => '', 'spotlight_description2' => '', 'spotlight_link2' => '',
															'spotlight_image_link3' => '', 'spotlight_name3' => '', 'spotlight_description3' => '', 'spotlight_link3' => '',
															'spotlight_image_link4' => '', 'spotlight_name4' => '', 'spotlight_description4' => '', 'spotlight_link4' => '',
															'spotlight_image_link5' => '', 'spotlight_name5' => '', 'spotlight_description5' => '', 'spotlight_link5' => '',
															'text' => '' ) );

		$title = sanitize_text_field( $instance['title'] );
		$max_spotlight  = isset( $instance['max_spotlight'] ) ? absint( $instance['max_spotlight'] ) : 1;
		$title_background_color = sanitize_text_field( $instance['title_background_color'] );

		/**================== Spotlight 1 ==============*/
		$spotlight_image_link1 = $instance['spotlight_image_link1'];
		$spotlight_name1 = $instance['spotlight_name1'];
		$spotlight_description1 = $instance['spotlight_description1'];
		$spotlight_link1 = $instance['spotlight_link1'];

		/**================== Spotlight 2 ==============*/
		$spotlight_image_link2 = $instance['spotlight_image_link2'];
		$spotlight_name2 = $instance['spotlight_name2'];
		$spotlight_description2 = $instance['spotlight_description2'];
		$spotlight_link2 = $instance['spotlight_link2'];

		/**================== Spotlight 3 ==============*/
		$spotlight_image_link3 = $instance['spotlight_image_link3'];
		$spotlight_name3 = $instance['spotlight_name3'];
		$spotlight_description3 = $instance['spotlight_description3'];
		$spotlight_link3 = $instance['spotlight_link3'];

		/**================== Spotlight 4 ==============*/
		$spotlight_image_link4 = $instance['spotlight_image_link4'];
		$spotlight_name4 = $instance['spotlight_name4'];
		$spotlight_description4 = $instance['spotlight_description4'];
		$spotlight_link4 = $instance['spotlight_link4'];

		/**================== Spotlight 5 ==============*/
		$spotlight_image_link5 = $instance['spotlight_image_link5'];
		$spotlight_name5 = $instance['spotlight_name5'];
		$spotlight_description5 = $instance['spotlight_description5'];
		$spotlight_link5 = $instance['spotlight_link5'];		

		$num = 1; //start spotlight from 1 to N.
?>
		<!--  Style sheet for Form -->
		<style>
			.spotlight-para{
				text-align:center !important;
				font-weight: 500;
			}
		</style>


		<p>  <!-- Show Spotlight title -->
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title for the spot light:', 'text_domain' ); ?></label>
			<input
				   class="widefat"
				   id="<?php echo $this->get_field_id('title'); ?>"
				   name="<?php echo $this->get_field_name('title'); ?>"
				   type="text"
				   value="<?php echo esc_attr($title); ?>"
				   />
		</p>

		<p>  <!-- title background color -->
			<label for="<?php echo $this->get_field_id( 'title_background_color' ); ?>"><?php _e( 'Title\'s background color:' ); ?></label>
			<input
				   class="widefat"
				   id="<?php echo $this->get_field_id( 'title_background_color' ); ?>"
				   name="<?php echo $this->get_field_name( 'title_background_color' ); ?>"
				   type="text"                
				   value="<?php echo esc_attr($title_background_color); ?>"
				   />
			<label for="<?php echo $this->get_field_id( 'max_spotlight' ); ?>"><?php _e( '( Eg: 2beffa, or ff00ff. Leave it empty for default color )' ); ?></label>
		</p>

		<p>  <!-- selector for numbers of spotlight to show -->
			<label for="<?php echo $this->get_field_id( 'max_spotlight' ); ?>"><?php _e( 'Number of spotlights to show:' ); ?></label>
			<input
				   class="tiny-text"
				   id="<?php echo $this->get_field_id( 'max_spotlight' ); ?>"
				   name="<?php echo $this->get_field_name( 'max_spotlight' ); ?>"
				   type="number" step="1" min="1" max="5" value="<?php if ($max_spotlight > 5) //prevent overflow.
					$max_spotlight = 5;
				echo $max_spotlight; ?>"
				   size="1"
				   />
			<label for="<?php echo $this->get_field_id( 'max_spotlight' ); ?>"><?php _e( '( Maximum of 5 )' ); ?></label>
		</p> <p>&nbsp;</p><hr/>
		<p class="spotlight-para">***All fields below are requried***</p>

<?php        
		//Display Spotlight input on the Widget Form from 1st Spotlight to max_spotlight, inclusive.
		while ($num <= $max_spotlight) {
?>
			<!-- Image input -->
			<p class="spotlight-para">Spotlight <?php echo $num; ?></p>
			<p> <?php $tempImage = 'spotlight_image_link' . $num; ?> <!-- store the combined name. -->
				<label for="<?php echo esc_attr( $this->get_field_id( $tempImage ) ); ?>"><?php esc_attr_e( 'Image\'s link:', 'text_domain' ); ?></label>
				<input
					   class="widefat"
					   id="<?php echo $this->get_field_id($tempImage); ?>"
					   name="<?php echo $this->get_field_name($tempImage); ?>"
					   type="text"
					   value="<?php echo esc_attr($$tempImage); ?>"
					   />
			</p>
			<!-- Name input -->
			<p> <?php $tempName = 'spotlight_name' . $num; ?>
				<label for="<?php echo esc_attr( $this->get_field_id( $tempName ) ); ?>"><?php esc_attr_e( 'Person full name:', 'text_domain' ); ?></label>
				<input
					   class="widefat"
					   id="<?php echo $this->get_field_id($tempName); ?>"
					   name="<?php echo $this->get_field_name($tempName); ?>"
					   type="text"
					   value="<?php echo esc_attr($$tempName); ?>"
					   />
			</p>
			<!-- description input -->
			<p> <?php $tempDescription = 'spotlight_description' . $num; ?>
				<label for="<?php echo esc_attr( $this->get_field_id( $tempDescription ) ); ?>"><?php esc_attr_e( 'Short description:', 'text_domain' ); ?></label>
				<textarea
						  class="widefat"
						  rows="2" cols="20"
						  id="<?php echo $this->get_field_id($tempDescription); ?>"
						  name="<?php echo $this->get_field_name($tempDescription); ?>"><?php echo esc_textarea( $instance[$tempDescription] ); ?> </textarea>
			</p>
			<!-- Link input -->
			<p> <?php $tempLink = 'spotlight_link' . $num; ?>
				<label for="<?php echo esc_attr( $this->get_field_id( $tempLink ) ); ?>"><?php esc_attr_e( 'Link to person\'s page:', 'text_domain' ); ?></label>
				<input
					   class="widefat"
					   id="<?php echo $this->get_field_id($tempLink); ?>"
					   name="<?php echo $this->get_field_name($tempLink); ?>"
					   type="text"
					   value="<?php echo esc_attr($$tempLink); ?>"
					   />
			</p>
<?php
			$num++;
		} //End of while loop
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
		$instance['max_spotlight'] = (int) $new_instance['max_spotlight'];
		$instance['title_background_color'] = sanitize_text_field ($new_instance['title_background_color']);

		///**=============== Spotlight 1 ===================*/
		//        $instance['spotlight_image_link1'] = sanitize_text_field( $new_instance['spotlight_image_link1'] );
		//        $instance['spotlight_name1'] = sanitize_text_field( $new_instance['spotlight_name1'] );
		//        $instance['spotlight_description1'] = sanitize_text_field( $new_instance['spotlight_description1'] );
		//        $instance['spotlight_link1'] = sanitize_text_field( $new_instance['spotlight_link1'] );
		//
		//        /**=============== Spotlight 2 ===================*/
		//        $instance['spotlight_image_link2'] = sanitize_text_field( $new_instance['spotlight_image_link2'] );
		//        $instance['spotlight_name2'] = sanitize_text_field( $new_instance['spotlight_name2'] );
		//        $instance['spotlight_description2'] = sanitize_text_field( $new_instance['spotlight_description2'] );
		//        $instance['spotlight_link2'] = sanitize_text_field( $new_instance['spotlight_link2'] );
		//
		//        /**============== Spotlight 3 ====================*/
		//        $instance['spotlight_image_link3'] = sanitize_text_field( $new_instance['spotlight_image_link3'] );
		//        $instance['spotlight_name3'] = sanitize_text_field( $new_instance['spotlight_name3'] );
		//        $instance['spotlight_description3'] = sanitize_text_field( $new_instance['spotlight_description3'] );
		//        $instance['spotlight_link3'] = sanitize_text_field( $new_instance['spotlight_link3'] );
		//
		//        /**============== Spotlight 4 ====================*/
		//        $instance['spotlight_image_link4'] = sanitize_text_field( $new_instance['spotlight_image_link4'] );
		//        $instance['spotlight_name4'] = sanitize_text_field( $new_instance['spotlight_name4'] );
		//        $instance['spotlight_description4'] = sanitize_text_field( $new_instance['spotlight_description4'] );
		//        $instance['spotlight_link4'] = sanitize_text_field( $new_instance['spotlight_link4'] );
		//
		//        /**============== Spotlight 5 ====================*/
		//        $instance['spotlight_image_link5'] = sanitize_text_field( $new_instance['spotlight_image_link5'] );
		//        $instance['spotlight_name5'] = sanitize_text_field( $new_instance['spotlight_name5'] );
		//        $instance['spotlight_description5'] = sanitize_text_field( $new_instance['spotlight_description5'] );
		//        $instance['spotlight_link5'] = sanitize_text_field( $new_instance['spotlight_link5'] );

		//**Same as above commented out code, but more elegant, yet it can be difficult to read.**
		$increment = 1;		
		while ( $increment <= 5 ){			
			//increment variables
			$increment_image_link = 'spotlight_image_link' . $increment;
			$increment_description = 'spotlight_description' . $increment;
			$increment_name = 'spotlight_name' . $increment;
			$increment_link = 'spotlight_link' . $increment;

			$instance[$increment_image_link] = sanitize_text_field( $new_instance[$increment_image_link] );
			$instance[$increment_name] = sanitize_text_field( $new_instance[$increment_name] );
			$instance[$increment_description] = sanitize_text_field( $new_instance[$increment_description] );
			$instance[$increment_link] = sanitize_text_field( $new_instance[$increment_link] );

			$increment++;
		}

		return $instance;
	}
}

// register widget
add_action( 'widgets_init', function(){
	register_widget( 'wp_spotlight_widget' );
});