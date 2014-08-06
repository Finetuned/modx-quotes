<?php
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('core_path').'components/quotes/model/';
            $modx->addPackage('quotes',$modelPath);
 
            $manager = $modx->getManager();
 
            $manager->createObjectContainer('Quote');
 
            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;

