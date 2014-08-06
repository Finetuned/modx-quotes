<?php
class QuotesQuoteGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'Quote';
    public $languageTopics = array('quotes:default');
    public $defaultSortField = 'author';
    public $defaultSortDirection = 'ASC';
    public $objectType = 'quotes.quote';

public function prepareQueryBeforeCount(xPDOQuery $c) {
		$query = $this->getProperty('query');
		if (!empty($query)) {
		    $c->where(array(
		        'quote:LIKE' => '%'.$query.'%',
		        'OR:author:LIKE' => '%'.$query.'%',
		    ));
		}
		return $c;
	}//

};// end class QuotesQuoteGetListProcessor
return 'QuotesQuoteGetListProcessor';
