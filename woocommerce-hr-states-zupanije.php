<?php
/*
Plugin Name: Hrvatske županije za WooCommerce (Croatian States for WooCommerce)
Plugin URI: https://github.com/markoidzan/woocommerce-hr-states/
Description: HR: Dodatak za WooCommerce kojime se dodaju Hrvatske županije u listu dostupnih regija. EN: Adds Croatian States within WooCommerce Core Regions.
Version: 1.1
Author: Marko Idžan
Author URI: https://idzan.com.hr
*/
/*
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
<<<<<<< HEAD
*/
function hr_states_woo ($states) {

	$states['HR'] = array(
							'HR-07' => 'Bjelovarsko-bilogorska županija' ,
							'HR-12' => 'Brodsko-posavska županija' ,
							'HR-19' => 'Dubrovačko-neretvanska županija' ,
							'HR-18' => 'Istarska županija' ,
							'HR-04' => 'Karlovačka županija' ,
							'HR-06' => 'Koprivničko-križevačka županija' ,
							'HR-02' => 'Krapinsko-zagorska županija' ,
							'HR-09' => 'Ličko-senjska županija' ,
							'HR-20' => 'Međimurska županija' ,
							'HR-14' => 'Osiječko-branjska županija' ,
							'HR-11' => 'Požeško-slavonska županija' ,
							'HR-08' => 'Primorsko-goranska županija' ,
							'HR-03' => 'Sisačko-moslavačka županija' ,
							'HR-17' => 'Splitsko-dalmatinska županija' ,
							'HR-05' => 'Varaždinska županija' ,
							'HR-10' => 'Virovitičko-podravska županija' ,
							'HR-16' => 'Vukovarsko-srijemska županija' ,
							'HR-13' => 'Zadarska županija' ,
							'HR.01' => 'Zagrebačka županija' ,
							'HR-15' => 'Šibensko-kninska županija' ,
							'HR-21' => 'Grad Zagreb'
							);
	return $states;
}

add_filter ('woocommerce_states', 'hr_states_woo');