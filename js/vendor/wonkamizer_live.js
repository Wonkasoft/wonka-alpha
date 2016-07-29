/*!
 * wonkaView Live v1.0.1
 * http://wonkasoft.com/
 *
 *
 * Date: 2016-07-14
 */

( function( $ ) {

    // Update the site title in real time...
    wp.customize( 'blogname', function( value ) {
        value.bind( function( newval ) {
            $( '#site-title a' ).html( newval );
        } );
    } );
    
    //Update the site description in real time...
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( newval ) {
            $( '.site-description' ).html( newval );
        } );
    } );

    //Update site title color in real time...
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( newval ) {
            $('#site-title a').css('color', newval );
        } );
    } );

    //Update site background color...
    wp.customize( 'background_color', function( value ) {
        value.bind( function( newval ) {
            $('body').css('background-color', newval );
        } );
    } );
    
    //Update site link color in real time...
    wp.customize( 'link_textcolor', function( value ) {
        value.bind( function( newval ) {
            $('a').css('color', newval );
        } );
    } );

    //Update Copyright in real time...
    wp.customize( 'wa_copyright', function( value ) {
        value.bind( function( newval ) {
            $('.copyright-custom').html( newval );
        } );
    } );

      wp.customize( 'wa_designed_switch', function( value ) {
        value.bind(function(newval) {
            wa_switch_check = newval;
            wa_hide;
            if (wa_switch_check != 'on') {
                wa_hide = "none";
            }
            else {
                wa_hide = "initial";
            }
            $('#customize-control-wa_designed').css('display', wa_hide);
        });
    });

                
} ) ( jQuery );