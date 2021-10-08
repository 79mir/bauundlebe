function mz_0price_pre_get_posts_query( $query ) {
 if( $query->is_page( array( 'regulamin', 'moje-konto', 'kontakt', 'koszyk') ) ) return $query;
 $query->set( 'meta_query', array(array(
	'key'       => '_price',
	'value'     => '0',
	'compare'   => 'NOT IN')
 )));
 return $query;
}
add_action( 'pre_get_posts', 'mz_0price_pre_get_posts_query', 100 );
