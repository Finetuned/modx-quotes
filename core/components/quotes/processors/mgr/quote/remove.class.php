<?php
class QuotesQuoteRemoveProcessor extends modObjectRemoveProcessor {
    public $classKey = 'Quote';
    public $languageTopics = array('quotes:default');
    public $objectType = 'quotes.Quote';
}
return 'QuotesQuoteRemoveProcessor';
