		<?php wp_footer(); ?>
		<footer>
		
		</footer>

		<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.YWsHs5nuAIw.O/m=auth/exm=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCPbPVDqkfZvr7scFt64teozEcrr0g/t=zcms/cb=gapi.loaded_1" async=""></script>
		<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.YWsHs5nuAIw.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCPbPVDqkfZvr7scFt64teozEcrr0g/t=zcms/cb=gapi.loaded_0" async=""></script>
		<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
		<script>

	'use strict';


	// search & highlight

	;( function( $, window, document, undefined )
	{
		var $container = $( '.faq' );
		if( !$container.length ) return true;

		var $input			= $container.find( 'input' ),
			$notfound		= $container.find( '.faq__notfound' ),
			$items			= $container.find( '> ul > li' ),
			$item			= $(),
			itemsIndexed	= [];

		$items.each( function()
		{
			itemsIndexed.push( $( this ).text().replace( /\s{2,}/g, ' ' ).toLowerCase() );
		});

		$input.on( 'keyup', function( e )
		{
			if( e.keyCode == 13 ) // enter
			{
				$input.trigger( 'blur' );
				return true;
			}

			$items.each( function()
			{
				$item = $( this );
				$item.html( $item.html().replace( /<span class="highlight">([^<]+)<\/span>/gi, '$1' ) );
			});

			var searchVal = $.trim( $input.val() ).toLowerCase();
			if( searchVal.length )
			{
				for( var i in itemsIndexed )
				{
					$item = $items.eq( i );
					if( itemsIndexed[ i ].indexOf( searchVal ) != -1 )
						$item.removeClass( 'is-hidden' ).html( $item.html().replace( new RegExp( searchVal+'(?!([^<]+)?>)', 'gi' ), '<span class="highlight">$&</span>' ) );
					else
						$item.addClass( 'is-hidden' );
				}
			}
			else $items.removeClass( 'is-hidden' );

			$notfound.toggleClass( 'is-visible', $items.not( '.is-hidden' ).length == 0 );
		});
	})( jQuery, window, document );


	// toggling items on title press

	;( function( $, window, document, undefined )
	{
		$( document ).on( 'click', '.faq h2 a', function( e )
		{
			e.preventDefault();
			$( this ).parents( 'li' ).toggleClass( 'is-active' );
		});
	})( jQuery, window, document );


	// auto-show item content when show results reduces to single

	;( function( $, window, document, undefined )
	{
		var $container = $( '.faq' );
		if( !$container.length ) return true;

		var $input		= $container.find( 'input' ),
			$items		= $container.find( '> ul > li' ),
			$item		= $();

		$input.on( 'keyup', function()
		{
			$item = $items.not( '.is-hidden' );
			if( $item.length == 1 )
				$item.addClass( 'js--autoshown is-active' );
			else
				$items.filter( '.js--autoshown' ).removeClass( 'js--autoshown is-active' );
		});
	})( jQuery, window, document );

</script>
	</body>
</html>