function mz_price_stock_0_pre_get_posts_query( $query ) {
 if( $query->is_admin || $query->is_page( array( 'start', 'moje-konto', 'kontakt', 'cookie', 'regulamin', 'wysyłka', 'koszyk', 'kasa') ) ) return $query;
 $query->set( 'meta_query', array(array(
	'key'       => '_stock',
	'value'     => '0',
	'compare'   => 'NOT IN' ),
	array(
	'key'       => '_stock_status',
	'value'     => 'outofstock',
	'compare'   => 'NOT IN' ),							  
	array(
	'key'       => '_price',
	'value'     => '0',
	'compare'   => 'NOT IN'
 )));
 return $query;
}
