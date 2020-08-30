<?php 
/**
 * Plugin Name: WooCommerce Checkout Field Removal
 * Plugin URI: https://github.com/kamaroly/wc-checkoutfield-removal
 * Description: This Plugin removes Field on WooCommerce Checkout Page
 * Author: KAMARO Lambert(Paul)
 * Author URI: #
 * Version: 4.42
 * License: GPL3
 */


add_filter( 'woocommerce_checkout_fields' , 'Wc_CheckOut_Field_Removal' );

/**
 * Removes Checkout Field on WooCommerce
 * @param  array $fields default woocommerce checkout fields
 * @return array  remaining fields
 */
function Wc_CheckOut_Field_Removal($fields)
{
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);
	unset($fields['order']['order_comments']);
	unset($fields['billing']['billing_email']);

	return $fields;
}
