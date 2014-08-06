<?php
require_once dirname(__FILE__) . '/quotes.class.php';
abstract class QuotesManagerController extends modExtraManagerController {
    public $quotes;
    public function initialize() {
        $this->quotes = new Quotes($this->modx);
 
//      $this->addCss($this->doodles->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->quotes->config['assetsUrl'].'mgr/js/quotes.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            Quotes.config = '.$this->modx->toJSON($this->quotes->config).';
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('quotes:default');
    }
    public function checkPermissions() { return true;}
}
class ControllerManagerController extends QuotesManagerController {
    public static function getDefaultController() { return 'home'; }
}
