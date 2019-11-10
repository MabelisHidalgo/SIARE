
// Set up HTML elements into variables
var $overlay	= $('<div id="lightboxOverlay"></div>');
var $image		= $('<img>');
var $caption	= $('<h3></h3>');
var $close		= $('<i class="fa fa-times"></i>');

// Just more variables
var imageUrl;
var imageAlt;

// Adding HTML stuff
$('body').append($overlay);		// Add the overlay to the document
$overlay.hide();				// Hide the overlay

// When a user clicks on an image
$('#deadSimpleLightbox img').click(function(){
	imageUrl = $(this).attr('src');		// Find the image URL
	imageAlt = $(this).attr('alt');		// Find the image Alt text

	$overlay.append($image);			// Add the image to the overlay
	$overlay.append($caption);			// Add the image caption to the overlay
	$overlay.append($close);			// Add the close button to the overlay
	$image.attr('src', imageUrl);		// Add the link to the image attribute
	$caption.text(imageAlt);			// Add text to the <p> tag
	$overlay.fadeIn('1000');			// Show the overlay
	$image.fadeIn('1000');
});

// If the users clicks anywhere on the click iccon, hide  the overlay.
$close.click( function() {
	$overlay.fadeOut('1000');
} );