jQuery(document).ready(function($){




	imageWidget = {


		// Call this from the upload button to initiate the upload frame.
		uploader : function( widget_id, widget_id_string, image_link_id) {
      var frame = wp.media({
        title : 'Choose an image for link',
        multiple : false,
        library : { type : 'image' },
        button : { text : 'Get image link'}
      });
			// Handle results from media manager.
			frame.on('close',function( ) {
				var attachments = frame.state().get('selection').toJSON();
				imageWidget.render( widget_id, widget_id_string, image_link_id, attachments[0] );
			});

			frame.open();
			return false;
		},

		// Output Image preview and populate widget form.
		render : function( widget_id, widget_id_string, image_link_id, attachment ) {


      $("#" + widget_id_string + image_link_id).val(attachment.url);
      $("#my_image").attr("src",attachment.url);
      // alert(image_link_id);

		},

	};

});
