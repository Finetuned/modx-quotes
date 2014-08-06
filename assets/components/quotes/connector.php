<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';
 
$corePath = $modx->getOption('core_path').'components/quotes/';
require_once $corePath.'quotes.class.php';
$modx->quotes = new quotes($modx);
 
$modx->lexicon->load('quotes:default');
 
 
/* handle request */
$path = $modx->quotes->config['processorsPath'];
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));
