jQuery(document).ready(function($){




	imageWidget = {


		// Call this from the upload button to initiate the upload frame.
		uploader : function( widget_id, widget_id_string, image_link_id, image_preview_id ) {
      var frame = wp.media({
        title : 'Choose an image for link',
        multiple : false,
        library : { type : 'image' },
        button : { text : 'Get image link'}
      });
			// Handle results from media manager.
			frame.on('close',function( ) {
				var attachments = frame.state().get('selection').toJSON();
				imageWidget.render( widget_id, widget_id_string, image_link_id, image_preview_id, attachments[0] );
			});

			frame.open();
			return false;
		},

		// Output Image preview and populate widget form.
		render : function( widget_id, widget_id_string, image_link_id, image_preview_id, attachment ) {


      $("#" + widget_id_string + image_link_id).val(attachment.url);

			$("#" + widget_id_string + image_preview_id).html(imageWidget.imgHTML(attachment));





		},

		// Render html for the image.
		imgHTML : function( attachment ) {
			var img_html = '<img src="' + attachment.url + '" ';
			img_html += 'width="50px" ';

			if ( attachment.alt != '' ) {
				img_html += 'alt="' + attachment.alt + '" ';
			}
			img_html += '/>';
			return img_html;
		}

	};

});
