<?php
/*
	RandomQuote
	
	
	Author: Radu Dumbrăveanu
	Email: vundicind@gmail.com
	Date: August 2014


******************************/

$path = $modx->getOption('core_path').'components/quotes/';
if(!class_exists('Quotes')){ 
		require $path.'quotes.class.php';
};
		$Quotes = new Quotes($modx);

// Outputness
$output = '';

$quotes = $Quotes->getRandomQuote();

if(!empty($quotes)) {

	$quote = $quotes[0];

	$quoteTpl = $scriptProperties['quoteTpl'];

	$quoteHTML = '';
	$params = array_merge($quote,array('anchor' => ''));
	$quotesHTML.= $modx->getChunk($quoteTpl,$params);

	$output .= $quotesHTML;
}

return $output;