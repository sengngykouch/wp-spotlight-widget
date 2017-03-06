<?php
/**
 * Plugin Name: WP Spotlight Widget
 * Plugin URI: http://wcsu.edu/
 * Description: Widget for spotlights that include images and texts
 * Version: 1.2
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

        $spotlight_add_row = ! empty( $instance['spotlight_add_row'] ) ? $instance['spotlight_add_row'] : '';
        $spotlight_row_appendee = ! empty( $instance['spotlight_row_appendee'] ) ? $instance['spotlight_row_appendee'] : '';
        $spotlight_hidden_order_tracker = ! empty( $instance['spotlight_hidden_order_tracker'] ) ? $instance['spotlight_hidden_order_tracker'] : '';

        /**============== Spotlight 0 =========================*/
        $spotlight_image_link0 = ! empty( $instance['spotlight_image_link0'] ) ? $instance['spotlight_image_link0'] : '';
        $spotlight_add_image0 = ! empty( $instance['spotlight_add_image0'] ) ? $instance['spotlight_add_image0'] : '';
				$spotlight_image_preview0 = ! empty( $instance['spotlight_image_preview0'] ) ? $instance['spotlight_image_preview0'] : '';
        $spotlight_name0 = ! empty( $instance['spotlight_name0'] ) ? $instance['spotlight_name0'] : '';
        $spotlight_description0 = ! empty( $instance['spotlight_description0'] ) ? $instance['spotlight_description0'] : '';
        $spotlight_link0 = ! empty( $instance['spotlight_link0'] ) ? $instance['spotlight_link0'] : '';

        /**============== Spotlight 1 =========================*/
        $spotlight_image_link1 = ! empty( $instance['spotlight_image_link1'] ) ? $instance['spotlight_image_link1'] : '';
        $spotlight_add_image1 = ! empty( $instance['spotlight_add_image1'] ) ? $instance['spotlight_add_image1'] : '';
				$spotlight_image_preview1 = ! empty( $instance['spotlight_image_preview1'] ) ? $instance['spotlight_image_preview1'] : '';
        $spotlight_name1 = ! empty( $instance['spotlight_name1'] ) ? $instance['spotlight_name1'] : '';
        $spotlight_description1 = ! empty( $instance['spotlight_description1'] ) ? $instance['spotlight_description1'] : '';
        $spotlight_link1 = ! empty( $instance['spotlight_link1'] ) ? $instance['spotlight_link1'] : '';

        /**============== Spotlight 2 =========================*/
        $spotlight_image_link2 = ! empty( $instance['spotlight_image_link2'] ) ? $instance['spotlight_image_link2'] : '';
        $spotlight_add_image2 = ! empty( $instance['spotlight_add_image2'] ) ? $instance['spotlight_add_image2'] : '';
				$spotlight_image_preview2 = ! empty( $instance['spotlight_image_preview2'] ) ? $instance['spotlight_image_preview2'] : '';
        $spotlight_name2 = ! empty( $instance['spotlight_name2'] ) ? $instance['spotlight_name2'] : '';
        $spotlight_description2 = ! empty( $instance['spotlight_description2'] ) ? $instance['spotlight_description2'] : '';
        $spotlight_link2 = ! empty( $instance['spotlight_link2'] ) ? $instance['spotlight_link2'] : '';

        /**============== Spotlight 3 =========================*/
        $spotlight_image_link3 = ! empty( $instance['spotlight_image_link3'] ) ? $instance['spotlight_image_link3'] : '';
        $spotlight_add_image3 = ! empty( $instance['spotlight_add_image3'] ) ? $instance['spotlight_add_image3'] : '';
				$spotlight_image_preview3 = ! empty( $instance['spotlight_image_preview3'] ) ? $instance['spotlight_image_preview3'] : '';
        $spotlight_name3 = ! empty( $instance['spotlight_name3'] ) ? $instance['spotlight_name3'] : '';
        $spotlight_description3 = ! empty( $instance['spotlight_description3'] ) ? $instance['spotlight_description3'] : '';
        $spotlight_link3 = ! empty( $instance['spotlight_link3'] ) ? $instance['spotlight_link3'] : '';

        /**============== Spotlight 4 =========================*/
        $spotlight_image_link4 = ! empty( $instance['spotlight_image_link4'] ) ? $instance['spotlight_image_link4'] : '';
        $spotlight_add_image4 = ! empty( $instance['spotlight_add_image4'] ) ? $instance['spotlight_add_image4'] : '';
				$spotlight_image_preview4 = ! empty( $instance['spotlight_image_preview4'] ) ? $instance['spotlight_image_preview4'] : '';
        $spotlight_name4 = ! empty( $instance['spotlight_name4'] ) ? $instance['spotlight_name4'] : '';
        $spotlight_description4 = ! empty( $instance['spotlight_description4'] ) ? $instance['spotlight_description4'] : '';
        $spotlight_link4 = ! empty( $instance['spotlight_link4'] ) ? $instance['spotlight_link4'] : '';

        echo $args['before_widget'];

        //random variables
        $spotlight_image_linkR;
        $spotlight_nameR;
        $spotlight_descriptionR;
        $spotlight_linkR;

        //Randomly pick an index from 0 to total CurrentS potlight - 1, inclusive.
        $index_spotlight = rand(0,strlen($instance['spotlight_hidden_order_tracker'])-1);
        //Pick the element from this index
        $random_spotlight = $instance['spotlight_hidden_order_tracker'][$index_spotlight];

        switch ($random_spotlight){
            case 0:
                $spotlight_image_linkR = $spotlight_image_link0;
                $spotlight_linkR = $spotlight_link0;
                $spotlight_nameR = $spotlight_name0;
                $spotlight_descriptionR = $spotlight_description0;
                break;
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
        }
?>
        <!-- Display on the webpage-->
        <div class="spotlight-wrapper">
            <p class="spotlight-title"><?php echo esc_html($title); ?></p>
            <div class="spotlight-content"><a href="<?php echo esc_url($spotlight_linkR); ?>">
                    <img class="spotlight-img" src="<?php echo esc_url($spotlight_image_linkR); ?>" ></a>
                    <p class="spotlight-paragraph">
                        <br><strong><?php echo esc_html($spotlight_nameR); ?></strong><br>
                        <em><?php echo esc_html($spotlight_descriptionR); ?></em><br>
                        <div style="text-align:center">
 							<a class="spotlight-btn-theme" href="<?php echo esc_url($spotlight_linkR); ?>">Learn more</a>
						</div>​
					</p>
            </div>
        </div>

        <!-- Style sheet for this display on the webpage-->
        <style>

      			.spotlight-wrapper{
      					border: 1px solid #4678a1;
      					width: 100%;
            }

            .spotlight-title{
                background-color:#4678a1;
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
      				background: #4678a1;
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
      					border: 1px solid #4678a1;
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
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'spotlight_add_row' => '', 'spotlight_row_appendee' => '', 'spotlight_hidden_order_tracker' => '', 'spotlight_image_link0' => '', 'spotlight_add_image0' => '', 'spotlight_image_preview0' => '', 'spotlight_name0' => '', 'spotlight_description0' => '', 'spotlight_link0' => '',
                                                            'spotlight_image_link1' => '', 'spotlight_add_image1' => '', 'spotlight_image_preview1' => '', 'spotlight_name1' => '', 'spotlight_description1' => '', 'spotlight_link1' => '',
                                                            'spotlight_image_link2' => '', 'spotlight_add_image2' => '', 'spotlight_image_preview2' => '', 'spotlight_name2' => '', 'spotlight_description2' => '', 'spotlight_link2' => '',
                                                            'spotlight_image_link3' => '', 'spotlight_add_image3' => '', 'spotlight_image_preview3' => '', 'spotlight_name3' => '', 'spotlight_description3' => '', 'spotlight_link3' => '',
                                                            'spotlight_image_link4' => '', 'spotlight_add_image4' => '', 'spotlight_image_preview4' => '', 'spotlight_name4' => '', 'spotlight_description4' => '', 'spotlight_link4' => '') );

        $title = sanitize_text_field( $instance['title'] );

        //Create Add and delete button
        $spotlight_add_row = $instance['spotlight_add_row'];
        //Append a new spotlight to this
        $spotlight_row_appendee = $instance['spotlight_row_appendee'];
        //Track which the order of spotlight
        $spotlight_hidden_order_tracker = $instance['spotlight_hidden_order_tracker'];

        /**================== Spotlight 0 ==============*/
        $spotlight_image_link0 = $instance['spotlight_image_link0'];
        $spotlight_add_image0 = $instance['spotlight_add_image0'];
				$spotlight_image_preview0 = $instance['spotlight_image_preview0'];
        $spotlight_name0 = $instance['spotlight_name0'];
        $spotlight_description0 = $instance['spotlight_description0'];
        $spotlight_link0 = $instance['spotlight_link0'];

        /**================== Spotlight 1 ==============*/
        $spotlight_image_link1 = $instance['spotlight_image_link1'];
        $spotlight_add_image1 = $instance['spotlight_add_image1'];
				$spotlight_image_preview1 = $instance['spotlight_image_preview1'];
        $spotlight_name1 = $instance['spotlight_name1'];
        $spotlight_description1 = $instance['spotlight_description1'];
        $spotlight_link1 = $instance['spotlight_link1'];

        /**================== Spotlight 2 ==============*/
        $spotlight_image_link2 = $instance['spotlight_image_link2'];
        $spotlight_add_image2 = $instance['spotlight_add_image2'];
				$spotlight_image_preview2 = $instance['spotlight_image_preview2'];
        $spotlight_name2 = $instance['spotlight_name2'];
        $spotlight_description2 = $instance['spotlight_description2'];
        $spotlight_link2 = $instance['spotlight_link2'];

        /**================== Spotlight 3 ==============*/
        $spotlight_image_link3 = $instance['spotlight_image_link3'];
        $spotlight_add_image3 = $instance['spotlight_add_image3'];
				$spotlight_image_preview3 = $instance['spotlight_image_preview3'];
        $spotlight_name3 = $instance['spotlight_name3'];
        $spotlight_description3 = $instance['spotlight_description3'];
        $spotlight_link3 = $instance['spotlight_link3'];

        /**================== Spotlight 4 ==============*/
        $spotlight_image_link4 = $instance['spotlight_image_link4'];
        $spotlight_add_image4 = $instance['spotlight_add_image4'];
				$spotlight_image_preview4 = $instance['spotlight_image_preview4'];
        $spotlight_name4 = $instance['spotlight_name4'];
        $spotlight_description4 = $instance['spotlight_description4'];
        $spotlight_link4 = $instance['spotlight_link4'];

        static $elementTracker = array(0,0,0,0,0); //setup a elementTracker for each spotlight, zero mean none active.

        $tempHiddenSort = 'spotlight_hidden_order_tracker';
        $HiddenSortArray = array();
        $hiddenNum = intval($$tempHiddenSort);
?>
        <!--  Style sheet for Form -->
        <style>
            .spotlight-para{
                text-align:center !important;
                font-weight: 500;
            }
        </style>

        <!-- Show Spotlight title -->
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
        </p> <p>&nbsp;</p><hr/>

        <p class="spotlight-para">***All fields below are requried***</p>

        <!-- Hidden Field for tracking the order of which spotlight come first -->
        <input
               class="widefat"
               id="<?php echo $this->get_field_id($tempHiddenSort); ?>"
               name="<?php echo $this->get_field_name($tempHiddenSort); ?>"
               type="hidden"
               value="<?php echo esc_attr($$tempHiddenSort); //return string of $tempHiddenSort ?>"
               />
<?php


        $counter = 0;
        while($counter <  strlen($$tempHiddenSort)){

          $num = intval(substr($$tempHiddenSort, $counter, 1));//return value of "$counter" index.
          $tempImage = 'spotlight_image_link' . $num;

          if ($$tempImage != ''){

            $elementTracker[$num] = 1; // index start at zero,
            $HiddenSortArray[] = $num; //append $num to the last element of array
?>
            <!-- Image input -->
            <div style=" border: #e5e5e5 solid 1px; padding: 14px; margin-top:14px;">
            <p> <?php $tempImage = 'spotlight_image_link' . $num;  $tempDeleteName = 'deletespotlight_'. $num;?> <!-- store the combined name. -->
                <input
                       class="widefat"
                       id="<?php echo $this->get_field_id($tempImage); ?>"
                       name="<?php echo $this->get_field_name($tempImage); ?>"
                       type="hidden"
                       value="<?php echo esc_attr($$tempImage); ?>"
                       />


             <!-- Image Preview -->
            <?php $tempImagePreview = 'spotlight_image_preview' . $num;?>
            <img  id="<?php echo $this->get_field_id($tempImagePreview)?>" src="<?php echo esc_attr($$tempImage); ?>" width="100%" />
            <br />
            <br />

            <!-- Name input -->
            <?php $tempName = 'spotlight_name' . $num; ?>
                <label for="<?php echo esc_attr( $this->get_field_id( $tempName ) ); ?>"><?php esc_attr_e( 'Person full name:', 'text_domain' ); ?></label>
                <input
                       class="widefat"
                       id="<?php echo $this->get_field_id($tempName); ?>"
                       name="<?php echo $this->get_field_name($tempName); ?>"
                       type="text"
                       value="<?php echo esc_attr($$tempName); ?>"
                       />

           <br />
           <br />

           <!-- description input -->
           <?php $tempDescription = 'spotlight_description' . $num; ?>
               <label for="<?php echo esc_attr( $this->get_field_id( $tempDescription ) ); ?>"><?php esc_attr_e( 'Short description:', 'text_domain' ); ?></label>
               <textarea
                         class="widefat"
                         rows="2" cols="20"
                         id="<?php echo $this->get_field_id($tempDescription); ?>"
                         name="<?php echo $this->get_field_name($tempDescription); ?>"><?php echo esc_textarea( $instance[$tempDescription] ); ?> </textarea>
           <br />
           <br />

           <!-- Link input -->
           <?php $tempLink = 'spotlight_link' . $num; ?>
               <label for="<?php echo esc_attr( $this->get_field_id( $tempLink ) ); ?>"><?php esc_attr_e( 'Link to person\'s page:', 'text_domain' ); ?></label>
               <input
                      class="widefat"
                      id="<?php echo $this->get_field_id($tempLink); ?>"
                      name="<?php echo $this->get_field_name($tempLink); ?>"
                      type="text"
                      value="<?php echo esc_attr($$tempLink); ?>"
                      />
           <br />
           <br />
           <br/>
           <!-- Delete Spotlight Button -->
           <input style="float:right;" id="delete-spotlight" name="<?php echo $tempDeleteName; ?>" type="button" value="Delete" class="button"/>
           <br />
           <br />

            </p>
            </div>
<?php
          } //end of if
         $counter++;
       } //end of while

        $id_prefix = $this->get_field_id(''); //get the widget prefix id.
?>
        <!-- Appdenee for all spotlight to append to -->
        <span id="<?php echo $this->get_field_id('spotlight_row_appendee'); ?>"> </span>
        <div>
          <p></p><br/><br/>
          <input style="background-color: #08a538; color:white; height: 47px;"
                class="button widefat"
                type="button"
                id="<?php echo $this->get_field_id('spotlight_add_row'); ?>"
                value="Add Spotlight"
                onclick="repeater.uploader('<?php echo $this->id;?>', '<?php echo $id_prefix;?>'); return false;"
                />
          <p></p><br/><br/>
        </div>


        <script>
        jQuery(document).ready(function($){

          var elementTracker = <?php echo json_encode($elementTracker); ?>;
          var currentIndex;
          var hiddenSort = <?php echo json_encode($HiddenSortArray); ?>;
          var preIndexID;

          //disbale add button when reaches max spotlight.
          if(elementTracker.every(x => x > 0)){
            $('#' + '<?php echo $id_prefix; ?>' + 'spotlight_add_row').attr("disabled",true);
          }

          repeater = {

              uploader :function(widget_id, widget_id_string){
                  preIndexID = widget_id_string;

                  //Find the non active element
                  var i;
                  for (i = 0; i < 5; i++){
                    if ( elementTracker[i] == 0){
                      currentIndex = i;
                      break;
                    }
                  }
                  currentIndex;

                  //Create a WP media button
                  var frame = wp.media({
                    title : 'Choose an image for link',
                    multiple : false,
                    library : { type : 'image' },
                    button : { text : 'Get image link'}
                  });

                  //When the pop up is close
                  frame.on('close',function() {

                      var attachment = frame.state().get('selection').first().toJSON();

                      //Append the each spotlight form
                      $("#" + preIndexID + "spotlight_row_appendee").append('<div style="border: #e5e5e5 solid 1px; padding: 14px; margin-top:14px;"><p><input  class="widefat" id="<?php echo $this->get_field_id("spotlight_image_link'+currentIndex+'"); ?>"  name="<?php echo $this->get_field_name("spotlight_image_link'+currentIndex+'"); ?>" type="hidden" value="" /><img id="<?php echo $this->get_field_id("spotlight_image_preview'+currentIndex+'");?>" src="" width="100%" /><br /><br /><label for="<?php echo esc_attr( $this->get_field_id( "spotlight_name'+currentIndex+'" ) ); ?>"><?php esc_attr_e( 'Person full name:', 'text_domain' ); ?></label>   <input class="widefat" id="<?php echo $this->get_field_id("spotlight_name'+currentIndex+'"); ?>"  name="<?php echo $this->get_field_name("spotlight_name'+currentIndex+'"); ?>" type="text" /><br /><br /><label for="<?php echo esc_attr( $this->get_field_id( "spotlight_description0'+currentIndex+'" ) ); ?>"><?php esc_attr_e( 'Short description:', 'text_domain' ); ?></label> <textarea class="widefat" rows="2" cols="20" id="<?php echo $this->get_field_id("spotlight_description'+currentIndex+'"); ?>" name="<?php echo $this->get_field_name("spotlight_description'+currentIndex+'"); ?>"></textarea><br /><br /><label for="<?php echo esc_attr( $this->get_field_id( "spotlight_link'+currentIndex+'" ) ); ?>"><?php esc_attr_e( 'Link to person\'s page:', 'text_domain' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id("spotlight_link'+currentIndex+'" ); ?>" name="<?php echo $this->get_field_name("spotlight_link'+currentIndex+'" ); ?>" type="text" /><br /><br /><br /><input style="float:right;"id="delete-spotlight" name="deletespotlight_'+currentIndex+'" type="button" value="Delete" class="button"/><br /><br /> </p></div>');

                      //check element as active, 1 = true, 0 = false;
                      elementTracker[currentIndex] = 1;
                      hiddenSort.push(currentIndex);//insert order of spotlight into array

                      //if all element is 1 (used up), disable the deleteButton.
                      if(elementTracker.every(x => x > 0)){
                        $('#' + preIndexID + 'spotlight_add_row').attr("disabled",true);
                      }

                      //parse through array hiddenSort and store into a string
                      var hiddenString = '';
                      for (var i in hiddenSort) {
                        hiddenString += hiddenSort[i];
                      }

                      var temp = "spotlight_image_link" + currentIndex;

                      $('#' + preIndexID + 'spotlight_hidden_order_tracker').val(hiddenString);//change the value of the hidden field.
                      $('#' + preIndexID + temp).val(attachment.url);
                      $('#' + preIndexID + 'spotlight_image_preview' + currentIndex).attr('src', attachment.url);//render image
                });

                frame.open(); //Open the WordPress Media

                return false;
              }
          };

          $(document).on('click', '#delete-spotlight', function() {

            $(this).parent().parent().remove(); //remove the field.

            $('#' + preIndexID + 'spotlight_add_row').removeAttr("disabled"); //reset add button.

            //Get the name, and parse to get the ID.
            var deleteButtonName = this.name;
            var stringDeleteButton = deleteButtonName.split("_").pop(); //Example: deletespotlight_1, we want to get the 1.
            var deleteButtonID = parseInt(stringDeleteButton);
            var index = hiddenSort.indexOf(deleteButtonID);

            hiddenSort.splice(index, 1);//remove this index from the array
            elementTracker[deleteButtonID] = 0; //reset element to not in used

            //concat all the array element and store into a string.
            var hiddenString = '';
            for (var i in hiddenSort) {
              hiddenString += hiddenSort[i];
            }
            $('#' + preIndexID + 'spotlight_hidden_order_tracker').val(hiddenString);

          });

      });
      </script>

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

	    $instance['title_background_color'] = sanitize_text_field ($new_instance['title_background_color']);
      $instance['spotlight_add_row'] = sanitize_text_field($new_instance['spotlight_add_row']);
      $instance['spotlight_row_appendee'] = sanitize_text_field($new_instance['spotlight_row_appendee']);
      $instance['spotlight_hidden_order_tracker'] = sanitize_text_field($new_instance['spotlight_hidden_order_tracker']);

			$increment = 0;
			while ( $increment < 5 ){
				//increment variables
				$increment_image_link = 'spotlight_image_link' . $increment;
	      $increment_add_image = 'spotlight_add_image' . $increment;
				$increment_image_preview = 'spotlight_image_preview' . $increment;
				$increment_description = 'spotlight_description' . $increment;
				$increment_name = 'spotlight_name' . $increment;
				$increment_link = 'spotlight_link' . $increment;

				$instance[$increment_image_link] = sanitize_text_field( $new_instance[$increment_image_link] );
	      $instance[$increment_add_image] = sanitize_text_field( $new_instance[$increment_add_image] );
				$instance[$increment_image_preview] = sanitize_text_field( $new_instance[$increment_image_preview]);
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

// register all script
function register_admin_script_wp_spotlight_widget(){
  wp_enqueue_media(); //requre for "Add media" button to work
  //wp_enqueue_script('dwwp_image_uploader_js', plugin_dir_url(__FILE__). 'wp-spotlight-widget.js', array('jquery', 'media-upload'), '0.0.2', true );
  // wp_localize_script('wwp_image_uploader_js', 'customUploads', array('imageDate' => get_post_meta(get_the_ID(), 'custom_image_data', true)));
}
add_action('admin_enqueue_scripts', 'register_admin_script_wp_spotlight_widget');
