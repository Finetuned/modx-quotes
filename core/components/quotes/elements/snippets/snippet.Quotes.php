<?php
/*
	Quotes
	
	
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

// Grab all quotes grouped by author
$authors = $Quotes->getGroupedQuotes();

// Show navigation list (if on)
if((bool) $scriptProperties['showNav']){

   // Prepare author chunks
		$tplAuthors = '';
		foreach($authors as $author => $quotes){
					if(count($quotes)>0){
        $tplAuthors.= $modx->getChunk($navItemTpl,array('author' => $author));
					};
		};

		// Wrap authors in outer tpl
		$output.= $modx->getChunk($navOuterTpl,array( 'authors' => $tplAuthors ));

};



// Output all quotes (grouped)
$quoteTpl = $scriptProperties['quoteTpl'];
$groupTpl = $scriptProperties['groupTpl'];
$outerTpl = $scriptProperties['outerTpl'];
$groupsHTML = '';
foreach($authors as $author => $quotes){
			if(count($quotes)>0){

					// Prepare Quotes HTML
			  $quoteHTML = '';
					foreach($quotes as $quote){
					   $params = array_merge($quote,array(
														'anchor' => strtolower(str_replace(' ','-',$quote['quote']))
										));
								$quotesHTML.= $modx->getChunk($quoteTpl,$params);
					};

					// Prepare author wrapper HTML
					$groupsHTML .= $modx->getChunk($groupTpl,array(
											'items'=>$quotesHTML,
											'author' => $author
										));
			};
};

// Add groups to outer wrapper
$output .= $modx->getChunk($outerTpl,array('groups'=>$groupsHTML));

return $output;