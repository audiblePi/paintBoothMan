/**
 * Main jQuery media file for the plugin.
 *
 * @since 2.3
 *
 * @package UpThemes Framework
 * @author  Thomas Griffin (modified by Chris Wallace)
 */
jQuery(document).ready(function($){
    // Prepare the variable that holds our custom media manager.
    var upfw_media_frame;

    // Bind to our click event in order to open up the new media experience.
    $(document.body).on('click.upfwOpenMediaManager', '.upfw-open-media', function(e){
        // Prevent the default action from occuring.
        e.preventDefault();

        window.target = e.target;

        // If the frame already exists, re-open it.
        if ( upfw_media_frame ) {
            upfw_media_frame.open();
            return;
        }

        /**
         * The media frame doesn't exist yet, so let's create it with some options.
         *
         * This options list is not exhaustive, so I encourage you to view the
         * wp-includes/js/media-views.js file to see some of the other default
         * options that can be utilized when creating your own custom media workflow.
         */
        upfw_media_frame = wp.media.frames.nmp_media_frame = wp.media({
            /**
             * We can pass in a custom class name to our frame, so we do
             * it here to provide some extra context for styling our
             * media workflow. This helps us to prevent overwriting styles
             * for other media workflows.
             */
            className: 'media-frame upfw-media-frame',

            /**
             * When creating a new media workflow, we are given two types
             * of frame workflows to chose from: 'select' or 'post'.
             *
             * The 'select' workflow is the default workflow, mainly beneficial
             * for uses outside of a post or post type experience where a post ID
             * is crucial.
             *
             * The 'post' workflow is tailored to screens where utilizing the
             * current post ID is critical.
             *
             * Since we only want to upload an image, let's go with the 'select'
             * frame option.
             */
            frame: 'select',

            /**
             * We can determine whether or not we want to allow users to be able
             * to upload multiple files at one time by setting this parameter to
             * true or false. It defaults to true, but we only want the user to
             * upload one file, so let's set it to false.
             */
            multiple: false,

            /**
             * We can set a custom title for our media workflow. I've localized
             * the script with the object 'tgm_nmp_media' that holds our
             * localized stuff and such. Let's populate the title with our custom
             * text.
             */
            title: upfw_nmp_media.title,

            /**
             * We can force what type of media to show when the user views his/her
             * library. Since we are uploading an image, let's limit the view to
             * images only.
             */
            library: {
                type: 'image'
            },

            /**
             * Let's customize the button text. It defaults to 'Select', but we
             * can customize it here to give us better context.
             *
             * We can also determine whether or not the modal requires a selection
             * before the button is enabled. It requires a selection by default,
             * and since this is the experience desired, let's keep it that way.
             *
             * By default, the toolbar generated by this frame fires a generic
             * 'select' event when the button is clicked. We could declare our
             * own events here, but the default event will work just fine.
             */
            button: {
                text:  upfw_nmp_media.button
            }
        });

        /**
         * ========================================================================
         * EVENT BINDING
         *
         * This section before opening the modal window should be used to bind to
         * any events where we want to customize the view. This includes binding
         * to any custom events that may have been generated by us creating
         * custom controller states and views.
         *
         * The events used below are not exhaustive, so I encourage you to again
         * study the wp-includes/js/media-views.js file for a better feel of all
         * the potential events you can attach to.
         * ========================================================================
         */

        /**
         * We are now attaching to the default 'select' event and grabbing our
         * selection data. Since the button requires a selection, we know that a
         * selection will be available when the event is fired.
         *
         * All we are doing is grabbing the current state of the frame (which will
         * be 'library' since that's the only area where we can make a selection),
         * getting the selection, calling the 'first' method to pluck the first
         * object from the string and then forcing a faux JSON representation of
         * the model.
         *
         * When all is said and done, we are given absolutely everything we need to
         * insert the data into our custom input field. Specifically, our
         * media_attachment object will hold a key titled 'url' that we want to use.
         */
        upfw_media_frame.on('select', function(){
            // Grab our attachment selection and construct a JSON representation of the model.
            var media_attachment = upfw_media_frame.state().get('selection').first().toJSON();

            // Send the attachment URL to our custom input field via jQuery.
            $(window.target).parent('.imageWrapper').find('input[type="text"]').val(media_attachment.url);
            $(window.target).parent('.imageWrapper').find('.image_preview').html('<img src="'+media_attachment.url+'" alt="">');
        });

        // Now that everything has been set, let's open up the frame.
        upfw_media_frame.open();
    });
});
