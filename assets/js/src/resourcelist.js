if ( 'loading' === document.readyState ) {
	// The DOM has not yet been loaded.
	document.addEventListener( 'DOMContentLoaded', init );

} else {
	// The DOM has already been loaded.
	init();
}

//
// Initialize the slider
//
function init() {
	console.log('testing');
}

