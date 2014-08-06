<?php
class QuotesHomeManagerController extends QuotesManagerController {
    public function process(array $scriptProperties = array()) {
 
    }
    public function getPageTitle() { return $this->modx->lexicon('quotes'); }
    public function loadCustomCssJs() {
   		$this->addJavascript($this->quotes->config['assetsUrl'].'mgr/js/widgets/main.panel.js');
   		$this->addJavascript($this->quotes->config['assetsUrl'].'mgr/js/widgets/quotes.grid.js');
   		$this->addJavascript($this->quotes->config['assetsUrl'].'mgr/js/widgets/quote.window.create.js');
   		$this->addLastJavascript($this->quotes->config['assetsUrl'].'mgr/js/index.js');
    }
    public function getTemplateFile() { return $this->quotes->config['templatesPath'].'home.tpl'; }
}
