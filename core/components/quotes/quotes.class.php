<?php class Quotes {


function __construct( &$modx ){
		$this->modx =& $modx;
		$this->loadConfig();
		
		$this->modx->addPackage('quotes',$this->config['modelPath']);
		
	}//




private function loadConfig(){
		$this->config = array(
		
			'templatesPath' => dirname(__FILE__).'/templates/',
			'assetsUrl' => $this->modx->getOption('assets_url').'components/quotes/',
			'connectorUrl' => $this->modx->getOption('assets_url').'components/quotes/connector.php',
			'processorsPath' => $this->modx->getOption('core_path').'components/quotes/processors/',
			'modelPath' => $this->modx->getOption('core_path').'components/quotes/model/'
		);
	}//




public function getGroupedQuotes(){

	$quotes = $this->modx->getCollection('Quote');

	$authors = array();

	foreach( $quotes as $quoteObj ){
		$quote = $quoteObj->toArray();
		$authors[$quote['author']][] = $quote;
	};

	return $authors;
	}//




public function getQuotes(){
		$quotes = $this->modx->getCollection('Quote');
		$retArray = array();
		foreach($quotes as $quote){
			$retArray[] = $quote->toArray();
		};
		return $retArray;
	}//




public function getRandomQuote(){
	$c = $this->modx->newQuery('Quote');
	$c->limit(1);
	$c->sortby('rand()', '');

	$quotes = $this->modx->getCollection('Quote', $c);
	$retArray = array();
	foreach($quotes as $quote){
		$retArray[] = $quote->toArray();
	};
	
	return $retArray;
	}//
	
	
	
};// end class Quotes
