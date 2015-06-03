// Masonry for portfolio pages
(function( $ ) {
	"use strict";
		$(function() {
		//set the container that Masonry will be inside of in a var
		var container = document.querySelector('.jetpack-portfolio-shortcode');
		//create empty var msnry
		var msnry;
		// initialize Masonry after all images have loaded
		imagesLoaded( container, function() {
		    msnry = new Masonry( container, {
		        itemSelector: '.portfolio-entry'
		    });
		});
	});
}(jQuery));
