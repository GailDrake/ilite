// This is the master JavaScript file for the site. All code will be executed across
//    the whole site. Page specific code should go in a separate file.

// Ilite is a global object that should contain all functions. This will prevent
//   pollution of the global namespace
var Ilite = {

  dropdown: function ( trigger, dropdown ) {
    // A simple dropdown
    // Click is disabled if mouseover has fired
    trigger.on( 'click', function () {
      console.log('click')
      if( !trigger.hasClass( 'moused' ) ){
        dropdown.stop().slideToggle();
      }
    });
    trigger.on( 'mouseenter', function () {
      console.log('mouseenter')
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
  Ilite.dropdown( $( 'nav__about' ), $( '#nav__about__wrapper' ) );
});
