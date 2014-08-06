<?php
function getChunkContent($filename) {
    $o = file_get_contents($filename);
    $o = trim(str_replace(array('<?php','?>'),'',$o));
    return $o;
}
$chunks = array();
 
 
 
$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'Quotes.listOuterTpl',
    'snippet' => getChunkContent($sources['elements'].'chunks/listOuterTpl.tpl'),
),'',true,true);

$chunks[2]= $modx->newObject('modChunk');
$chunks[2]->fromArray(array(
    'id' => 2,
    'name' => 'Quotes.listGroupTpl',
    'snippet' => getChunkContent($sources['elements'].'chunks/listGroupTpl.tpl'),
),'',true,true);

$chunks[3]= $modx->newObject('modChunk');
$chunks[3]->fromArray(array(
    'id' => 3,
    'name' => 'Quotes.listItemTpl',
    'snippet' => getChunkContent($sources['elements'].'chunks/listItemTpl.tpl'),
),'',true,true);

$chunks[4]= $modx->newObject('modChunk');
$chunks[4]->fromArray(array(
    'id' => 4,
    'name' => 'Quotes.navOuterTpl',
    'snippet' => getChunkContent($sources['elements'].'chunks/navOuterTpl.tpl'),
),'',true,true);

$chunks[5]= $modx->newObject('modChunk');
$chunks[5]->fromArray(array(
    'id' => 5,
    'name' => 'Quotes.navItemTpl',
    'snippet' => getChunkContent($sources['elements'].'chunks/navItemTpl.tpl'),
),'',true,true);







//$properties = include $sources['data'].'properties/properties.snippet.Quotes.php';
//$chunks[1]->setProperties($properties);
//unset($properties);
 
return $chunks;
