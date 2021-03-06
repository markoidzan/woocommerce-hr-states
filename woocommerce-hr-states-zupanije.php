<?php
/*
Plugin Name: Hrvatske županije za WooCommerce (Croatian States for WooCommerce)
Plugin URI: https://github.com/markoidzan/woocommerce-hr-states/
Description: HR: Dodatak za WooCommerce kojime se dodaju Hrvatske županije u listu dostupnih regija. EN: Adds Croatian States within WooCommerce Core Regions.
Version: 1.2
Author: Marko Idžan
Author URI: https://idzan.com.hr
*/

function hr_states_woo ($states) {

	$states['HR'] = array(
							'BBŽ' => 'Bjelovarsko-bilogorska županija' ,
							'BPŽ' => 'Brodsko-posavska županija' ,
							'DNŽ' => 'Dubrovačko-neretvanska županija' ,
							'IŽ' => 'Istarska županija' ,
							'KŽ' => 'Karlovačka županija' ,
							'KKŽ' => 'Koprivničko-križevačka županija' ,
							'KZŽ' => 'Krapinsko-zagorska županija' ,
							'LSŽ' => 'Ličko-senjska županija' ,
							'MŽ' => 'Međimurska županija' ,
							'OBŽ' => 'Osiječko-branjska županija' ,
							'PSŽ' => 'Požeško-slavonska županija' ,
							'PGŽ' => 'Primorsko-goranska županija' ,
							'SMŽ' => 'Sisačko-moslavačka županija' ,
							'SDŽ' => 'Splitsko-dalmatinska županija' ,
							'VŽ' => 'Varaždinska županija' ,
							'VPŽ' => 'Virovitičko-podravska županija' ,
							'VSŽ' => 'Vukovarsko-srijemska županija' ,
							'ZDŽ' => 'Zadarska županija' ,
							'ZGŽ' => 'Zagrebačka županija' ,
							'ŠKŽ' => 'Šibensko-kninska županija' ,
							'GZG' => 'Grad Zagreb'
							);
	return $states;
}

add_filter ('woocommerce_states', 'hr_states_woo');
