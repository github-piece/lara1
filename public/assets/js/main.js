/*
Name: Main Js file for Crypterio Template
Date: 20 January 2019
Themeforest TopHive : https://themeforest.net/user/tophive
*/


'use strict';
jQuery(document).ready(function() {

	$("#confirm_divider").hide();

	jQuery(document).on('click', '.crypt-header i.menu-toggle', function(){
		jQuery('.crypt-mobile-menu').toggleClass('show');
		jQuery(this).toggleClass('open')
	});

	setInterval(function() {
		var dt = new Date();
	    document.getElementById("datetime").innerHTML = dt.toLocaleString();
	    document.getElementById("timetrackfooter").innerHTML = dt.toLocaleString();
	}, 1000);
	
	jQuery(document).on('hover', '.crypt-mega-dropdown-toggle', function(){
		jQuery('.crypt-mega-dropdown-menu-block').toggleClass('shown');
	});
	jQuery(document).on('click', '.crypt-mega-dropdown-toggle', function(e){
		e.preventDefault();
		jQuery('.crypt-mega-dropdown-menu-block').toggleClass('shown');
	});
	jQuery('[data-toggle="tooltip"]').tooltip();

	jQuery('#crypt-tab a').on('click', function (e) {
	  	
	  	e.preventDefault();

	  	var x = jQuery(this).attr('href');
		jQuery(this).parents().find('.crypt-tab-content .tab-pane').removeClass('active');
		jQuery(this).parents().find('.crypt-tab-content .tab-pane' + x).addClass('active');
	});

	jQuery('#history-in-logo').on('click', function(e){
		jQuery('#v-pills-zilliqua-btc-withdrawl').removeClass('active').removeClass('show');
		jQuery('#v-pills-zilliqua-btc-deposit').removeClass('active').removeClass('show');
		jQuery('#v-pills-zilliqua-btc-history').addClass('active').addClass('show');
	});
	jQuery('#item-credit').on('click', function(e){

		jQuery('#v-pills-zilliqua-btc-withdrawl').removeClass('active').removeClass('show');
		jQuery('#v-pills-zilliqua-btc-history').removeClass('active').removeClass('show');
		jQuery('#v-pills-zilliqua-btc-deposit').addClass('active').addClass('show');
	});
	jQuery('#item-withdraw').on('click', function(e){
		jQuery('#v-pills-zilliqua-btc-deposit').removeClass('active').removeClass('show');
		jQuery('#v-pills-zilliqua-btc-history').removeClass('active').removeClass('show');
		jQuery('#v-pills-zilliqua-btc-withdrawl').addClass('active').addClass('show');
	});

	jQuery(document).on( 'click', '.crypt-coin-select a', function(e){
		e.preventDefault();
		var div = jQuery(this).attr('href');
		jQuery('.crypt-dash-withdraw').removeClass('d-block').addClass('d-none');
		jQuery(div).removeClass('d-none').addClass('d-block');
	});
	var path = window.location.href;

 	jQuery('ul.crypt-heading-menu > li > a').each(function() {
  		if (this.href === path) {
   			jQuery(this).parent('li').addClass('active');
  		}else{
   			jQuery(this).parent('li').removeClass('active');
  		}
  		jQuery('.crypt-box-menu').removeClass('active');
 	});
 	if(document.getElementById('crypt-candle-chart')){
 		new TradingView.widget(
		 	{
		  		"autosize": true,
			  	"symbol": "NASDAQ:AAPL",
			  	"interval": "D",
			  	"timezone": "Etc/UTC",
			  	"theme": "Dark",
			  	"style": "1",
			  	"locale": "en",
			  	"toolbar_bg": "rgba(0, 0, 0, 1)",
			  	"enable_publishing": false,
			  	"allow_symbol_change": true,
			  	"container_id": "crypt-candle-chart"
			}
	  	);
 	}
});