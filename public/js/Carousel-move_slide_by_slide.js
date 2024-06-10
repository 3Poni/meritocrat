function SlideShow( id , step ){
	let Sliders = document.getElementById( id ).querySelectorAll( 'div.Slide' );
	let SlidersCount = Sliders.length - 1;

	if( step == '-1' ){
		document.getElementById( id ).insertBefore( Sliders[ SlidersCount ] , document.getElementById( id ).childNodes[ 0 ] );
		CarouselPosition--;
	} else {
		document.getElementById( id ).appendChild( Sliders[ 0 ] );
		CarouselPosition++;
	}

	const dots = document.querySelectorAll('.dot');
	if( CarouselPosition > dots.length - 1 ){
		CarouselPosition = 0;
	}
	if( CarouselPosition < 0 ){
		CarouselPosition = dots.length - 1;
	}

    // Снимаем выделение со всех точек
    dots.forEach(dot => {
        dot.classList.remove('activeDot');
    });

	dots[ CarouselPosition ].classList.add( 'activeDot' );
}


function createDots(id, count) {
	const container = document.createElement( 'div' );
	container.className = 'dotsContainer';
	for( let i = 0 ; i < count ; i++ ){
		const dot = document.createElement( 'span' );
		dot.className = 'dot';
		dot.setAttribute( 'onclick' , `moveToSlide( '${id}' , ${i})` );
		container.appendChild( dot );
	}
	document.getElementById( id ).parentNode.appendChild( container );

	const dots = document.querySelectorAll('.dot');
	dots[0].classList.add( 'activeDot' );
}


function moveToSlide( id , index ) {
	let need2move = index - CarouselPosition;
	CarouselPosition = index;

	while( need2move ){
		if( need2move > 0 ){
			SlideShow( id , 1 );
			need2move--;
		}else{
			SlideShow( id , -1 );
			need2move++;
		}
	}
}
