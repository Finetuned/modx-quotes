<?php
$xpdo_meta_map['Quote']= array (
  'package' => 'quotes',
  'version' => '1.0',
  'table' => 'quotes',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'quote' => NULL,
    'author' => NULL,
    'modified' => 'CURRENT_TIMESTAMP',
    'modified_by' => NULL,
  ),
  'fieldMeta' => 
  array (
    'quote' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'author' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'modified' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
      'extra' => 'on update current_timestamp',
    ),
    'modified_by' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
  ),
  'aggregates' => 
  array (
    'Editor' => 
    array (
      'class' => 'modUser',
      'local' => 'modified_by',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
