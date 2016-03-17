// Home page only JavaScript

// jQuery is ready:
$( document ).ready(function() {

  // ----- Scrolling triggers - called on scroll ------
	var scrollCheck = function( homeBannerHeight ){
	    // Things to do based on scroll height - called in function so height can be "checked" on load
	    var scrollPosition = window.pageYOffset;

			console.log( scrollPosition );
	    if ( scrollPosition > 10 && scrollPosition < homeBannerHeight ) {
				console.log( 'A')
	        $( "#wrap" ).addClass( 'fade-nav' );
	    }

	    if ( scrollPosition < 10 || scrollPosition > homeBannerHeight ) {
				console.log( 'B')
	        $( "#wrap" ).removeClass( 'fade-nav' );
	    }

	    if ( scrollPosition > homeBannerHeight ) {
	        $( "#wrap" ).removeClass( 'home__top-style' );
	    }

	    if ( scrollPosition <= homeBannerHeight ) {
	        $( "#wrap" ).addClass( 'home__top-style' );
	    }

	};

  var homeBannerHeight = $( '#home__banner' ).outerHeight();

  // Call scrollCheck() on scroll
  $( window ).on( "scroll", function(){
    scrollCheck( homeBannerHeight );
  });




});
