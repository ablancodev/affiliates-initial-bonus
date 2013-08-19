<?php
/*
Plugin Name: Affiliates Initial Bonus
Plugin URI: http://www.eggemplo.com
Description: Add an initial bonus to an affiliate.
Author: eggemplo
Version: 1.0
Author URI: http://www.eggemplo.com
*/



add_action( 'affiliates_added_affiliate', 'affiliates_initial_bonus' );
function affiliates_initial_bonus( $aff_id ) {

	$description = "Initial Bonus";
	$amount = 10;
	$currency_id = "USD";
	
	if ( class_exists( 'Affiliates_Referral_WordPress' ) ) {
		$r = new Affiliates_Referral_WordPress();
		$r->add_referrals( array( $aff_id ), null, $description, null, null, $amount, $currency_id);
	} else {
		affiliates_add_referral( $aff_id, null, $description, null, $amount, $currency_id);
	}
}
?>
