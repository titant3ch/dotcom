$( document ).on( 'click', '.faq h2 a', function( e )
{
    e.preventDefault();
    $( this ).parents( 'li' ).toggleClass( 'is-active' );
});