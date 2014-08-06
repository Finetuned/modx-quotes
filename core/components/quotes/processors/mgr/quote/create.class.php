<?php
class QuotesQuoteCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'Quote';
    public $languageTopics = array('quotes:default');
    public $objectType = 'quotes.quote';
 
    public function beforeSave() {
        $quote = $this->getProperty('quote');
        if (empty($quote)) {
            $this->addFieldError('quote',$this->modx->lexicon('quotes.quote_err_ns_quote'));
        } else if ($this->doesAlreadyExist(array('quote' => $quote))) {
            $this->addFieldError('quote',$this->modx->lexicon('quotes.quote_err_ae_quote'));
        }
        
        $author = $this->getProperty('author');
        
        return parent::beforeSave();
    }
}
return 'QuotesQuoteCreateProcessor';

