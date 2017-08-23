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
  Ilite.dropdown( $( '#nav__first' ), $( '#nav__first__wrapper' ) );
  Ilite.dropdown( $( '#nav__community' ), $( '#nav__community__wrapper' ) );
  Ilite.dropdown( $( '#nav__involved' ), $( '#nav__involved__wrapper' ) );
  // side menu
  Ilite.dropdown( $( '#side-menu__about' ), $( '#side-menu__about__wrapper' ) );
  Ilite.dropdown( $( '#side-menu__first' ), $( '#side-menu__first__wrapper' ) );
  Ilite.dropdown( $( '#side-menu__community' ), $( '#side-menu__community__wrapper' ) );
  Ilite.dropdown( $( '#side-menu__involved' ), $( '#side-menu__involved__wrapper' ) );

  // /* Side menu slideout
  // --------------------------------------------------------------------------------------------------------------- */
  $( '#burger' ).on( "click", function() {
    if( $( '#wrap' ).hasClass( 'right-0' ) ){
      $( '#wrap' ).removeClass( 'right-0' ).addClass( 'right-240' );
      $( '#navigation' ).removeClass( 'right-0' ).addClass( 'right-left-240' );
      $( '#side-menu' ).removeClass( 'width-0' ).addClass( 'width-240' );
    } else {
      $( '#wrap' ).removeClass( 'right-240' ).addClass( 'right-0' );
      $( '#navigation' ).removeClass( 'right-left-240' ).addClass( 'right-0' );
      $( '#side-menu' ).removeClass( 'width-240' ).addClass( 'width-0' );
    }
  });

  // Copyright year - footer
  var currentYear = new Date().getFullYear();
  $( '#copyright-year' ).html( currentYear );

});
