<?php
/**
 * Plugin Name: WooCommerce Subscription Length Extender
 * Description: Add a custom 30 month subscription length to WooCommerce Subscriptions (requires WC Subscriptions 1.4.4 or newer) to give the option of having a subscription expire after 30 months.
 * CUL
 * Version: 1.0
 * License: GPL v2
 */

function eg_extend_subscription_expiration_options( $subscription_lengths ) {

	$subscription_lengths['month'][30] = wcs_get_subscription_period_strings( 30, 'month' );

	return $subscription_lengths;
}
add_filter( 'woocommerce_subscription_lengths', 'eg_extend_subscription_expiration_options' );