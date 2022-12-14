/**
* @snippet       Display FREE if Price Zero or Empty - WooCommerce Single Product
* @author        Philip Mello
* @testedwith    WooCommerce 3.8 and Upper
*/
  
add_filter( 'woocommerce_get_price_html', 'bbloomer_price_free_zero_empty', 9999, 2 );
   
function bbloomer_price_free_zero_empty( $price, $product ){
    if ( '' === $product->get_price() || 0 == $product->get_price() ) {
        $price = '<span class="woocommerce-Price-amount amount">FREE</span>';
    }  
    return $price;
}