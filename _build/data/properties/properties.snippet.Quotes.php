<?php
$properties = array(
    array(
        'name' => 'outerTpl',
        'desc' => 'prop_quotes.outerTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Quotes.listOuterTpl',
        'lexicon' => 'quotes:properties',
    ),
    array(
        'name' => 'groupTpl',
        'desc' => 'prop_quotes.groupTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Quotes.listGroupTpl',
        'lexicon' => 'quotes:properties',
    ),
    array(
        'name' => 'quoteTpl',
        'desc' => 'prop_quotes.quoteTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Quotes.listItemTpl',
        'lexicon' => 'quotes:properties',
    ),
    array(
        'name' => 'showNav',
        'desc' => 'prop_quotes.showNav_desc',
        'type' => 'list',
        'options' => array(
        		array('text' => 'Yes', 'value' => 1),
        		array('text' => 'No' , 'value' => 0)
        	),
        'value' => '1',
        'lexicon' => 'quotes:properties',
    ),
    array(
        'name' => 'navOuterTpl',
        'desc' => 'prop_quotes.navOuterTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Quotes.navOuterTpl',
        'lexicon' => 'quotes:properties',
    ),
    array(
        'name' => 'navItemTpl',
        'desc' => 'prop_quotes.navItemTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Quotes.navItemTpl',
        'lexicon' => 'quotes:properties',
    ),
);
return $properties;
