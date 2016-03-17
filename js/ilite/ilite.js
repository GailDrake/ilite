// This is the master JavaScript file for the site. All code will be executed across
//    the whole site. Page specific code should go in a separate file.

// Ilite is a global object that should contain all functions. This will prevent
//   pollution of the global namespace
var Ilite = {

  dropdown: function ( trigger, dropdown ) {
    // A simple dropdown
    // Click is disabled if mouseover has fired
    trigger.on( 'click', function () {
      if( !trigger.hasClass( 'moused' ) ){
        dropdown.stop().slideToggle();
      }
    });
    trigger.on( 'mouseenter', function () {
      trigger.addClass( "moused" );
      dropdown.stop().slideDown();
    });
    trigger.on( 'mouseleave', function () {
      trigger.removeClass( "moused" );
      dropdown.stop().slideUp();
    });

  }
};

// jQuery is ready:
$( document ).ready(function() {
  // initialize dropdowns
  Ilite.dropdown( $( '#nav__about' ), $( '#nav__about__wrapper' ) );
  Ilite.dropdown( $( '#nav__competition' ), $( '#nav__competition__wrapper' ) );
  Ilite.dropdown( $( '#nav__first' ), $( '#nav__first__wrapper' ) );
  Ilite.dropdown( $( '#nav__community' ), $( '#nav__community__wrapper' ) );
  Ilite.dropdown( $( '#nav__involved' ), $( '#nav__involved__wrapper' ) );

  console.log('clicker here')
  // /* Side menu slideout
  // --------------------------------------------------------------------------------------------------------------- */
  $( '#burger' ).on( "click", function() {
    console.log('clicker')
    if( $( '#wrap' ).hasClass( 'right-0' ) ){
      $( '#wrap, #navigation' ).removeClass( 'right-0' ).addClass( 'right-240' );
      $( '#side-menu' ).removeClass( 'width-0' ).addClass( 'width-240' );
    } else {
      $( '#wrap, #navigation' ).removeClass( 'right-240' ).addClass( 'right-0' );
      $( '#side-menu' ).removeClass( 'width-240' ).addClass( 'width-0' );
    }
  });

});
