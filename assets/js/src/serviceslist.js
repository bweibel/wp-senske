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
	const servicesLists = document.getElementsByClassName( 'services-list' );

	Array.from(servicesLists).forEach( servicesList => {
		ServicesList( servicesList );
	});
}

function ServicesList ( servieListEL ) {
	const servicesItems = servieListEL.getElementsByClassName('has-info');

	Array.from( servicesItems ).forEach( service => {
		console.log(service);
		addClickToggle( service )
	});

	function addClickToggle(el, target=el ) {
		el.addEventListener( 'click', () => {
			serviceClickHandler( target );
		} );
	}

	function serviceClickHandler( target ) {
		if (! target.classList.contains( 'open' ) ) {
			target.classList.add( 'open' );
		} else {
			target.classList.remove( 'open' );
		}
	}
}


