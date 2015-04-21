/*global redux_change, wp, redux*/

/**
 * Media Uploader
 * Dependencies        : jquery, wp media uploader
 * Feature added by    : Smartik - http://smartik.ws/
 * Date                  : 05.28.2013
 */

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.media = redux.field_objects.media || {};

    $( document ).ready(
        function() {
            //redux.field_objects.media.init();
        }
    );

    redux.field_objects.media.init = function( selector ) {
        if ( !selector ) {
            selector = $( document ).find( '.redux-container-media' );
        }
        $( selector ).each(
            function() {
                var el = $( this );
                var parent = el;
                if ( !el.hasClass( 'redux-field-container' ) ) {
                    parent = el.parents( '.redux-field-container:first' );
                }
                if ( parent.hasClass( 'redux-field-init' ) ) {
                    parent.removeClass( 'redux-field-init' );
                } else {
                    return;
                }
                // Remove the image button
                el.find( '.remove-image, .remove-file' ).unbind( 'click' ).on(
                    'click', function() {
                        redux.field_objects.media.removeFile( $( this ).parents( 'fieldset.redux-field:first' ) );
                    }
                );
                // Upload media button
                el.find( '.media_upload_button' ).unbind().on(
                    'click', function( event ) {
                        redux.field_objects.media.addFile( event, $( this ).parents( 'fieldset.redux-field:first' ) );
                    }
                );
            }
        );
    };

    // Add a file via the wp.media function
    redux.field_objects.media.addFile = function( event, selector ) {
        event.preventDefault();

        var frame;
        var jQueryel = $( this );

        // If the media frame already exists, reopen it.
        if ( frame ) {
            frame.open();
            return;
        }

        // Create the media frame.
        frame = wp.media(
            {
                multiple: false,
                library: {
                    //type: 'image' //Only allow images
                },

                // Set the title of the modal.
                title: jQueryel.data( 'choose' ),

                // Customize the submit button.
                button: {
                    // Set the text of the button.
                    text: jQueryel.data( 'update' )
                    // Tell the button not to close the modal, since we're
                    // going to refresh the page when the image is selected.
                }
            }
        );

        // When an image is selected, run a callback.
        frame.on(
            'select', function() {

                // Grab the selected attachment.
                var attachment = frame.state().get( 'selection' ).first();
                frame.close();
                if ( typeof redux.media === 'undefined' ) {
                    redux.media = {};
                }
                if ( typeof redux.media[$( selector ).attr( 'data-id' )] === 'undefined' ) {
                    redux.media[$( selector ).attr( 'data-id' )] = {};
                    redux.media[$( selector ).attr( 'data-id' )].mode = "image";
                }

                if ( redux.media[$( selector ).attr( 'data-id' )].mode !== false && attachment.attributes.type !== redux.media[jQuery( selector ).attr( 'data-id' )].mode ) {
                    return;
                }

                selector.find( '.upload' ).val( attachment.attributes.url );
                selector.find( '.upload-id' ).val( attachment.attributes.id );
                selector.find( '.upload-height' ).val( attachment.attributes.height );
                selector.find( '.upload-width' ).val( attachment.attributes.width );

                redux_change( $( selector ).find( '.upload-id' ) );

                var thumbSrc = attachment.attributes.url;
                if ( typeof attachment.attributes.sizes !== 'undefined' && typeof attachment.attributes.sizes.thumbnail !== 'undefined' ) {
                    thumbSrc = attachment.attributes.sizes.thumbnail.url;
                } else if ( typeof attachment.attributes.sizes !== 'undefined' ) {
                    var height = attachment.attributes.height;

                    for ( var key in attachment.attributes.sizes ) {
                        var object = attachment.attributes.sizes[key];

                        if ( object.height < height ) {
                            height = object.height;
                            thumbSrc = object.url;
                        }
                    }
                } else {
                    thumbSrc = attachment.attributes.icon;
                }

                selector.find( '.upload-thumbnail' ).val( thumbSrc );
                if ( !selector.find( '.upload' ).hasClass( 'noPreview' ) ) {
                    selector.find( '.screenshot' ).empty().hide().append( '<img class="redux-option-image" src="' + thumbSrc + '">' ).slideDown( 'fast' );
                }

                //selector.find('.media_upload_button').unbind();
                selector.find( '.remove-image' ).removeClass( 'hide' );//show "Remove" button
                selector.find( '.redux-background-properties' ).slideDown();
            }
        );

        // Finally, open the modal.
        frame.open();
    };

    // Function to remove the image on click. Still requires a save
    redux.field_objects.media.removeFile = function( selector ) {

        // This shouldn't have been run...
        if ( !selector.find( '.remove-image' ).addClass( 'hide' ) ) {
            return;
        }

        selector.find( '.remove-image' ).addClass( 'hide' );//hide "Remove" button
        selector.find( '.upload' ).val( '' );
        selector.find( '.upload-id' ).val( '' );
        selector.find( '.upload-height' ).val( '' );
        selector.find( '.upload-width' ).val( '' );
        selector.find( '.upload-thumbnail' ).val( '' );
        redux_change( $( selector ).find( '.upload-id' ) );
        selector.find( '.redux-background-properties' ).hide();

        var screenshot = selector.find( '.screenshot' );

        // Hide the screenshot
        screenshot.slideUp();

        selector.find( '.remove-file' ).unbind();

        // We don't display the upload button if .upload-notice is present
        // This means the user doesn't have the WordPress 3.5 Media Library Support
        if ( selector.find( '.section-upload .upload-notice' ).length > 0 ) {
            selector.find( '.media_upload_button' ).remove();
        }
    };
})( jQuery );