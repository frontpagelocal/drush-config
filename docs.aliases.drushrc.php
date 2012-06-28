<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/dev7',
  'uri' => 'http://docs.dev7',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/docs.dev7/',
  ),
  'databases' => 
  array (
    'default' => 
    array (
      'default' => 
      array (
        'database' => 'fpl_documentation',
        'username' => 'root',
        'password' => 'fpladmin8756',
        'host' => 'localhost',
        'port' => '',
        'driver' => 'mysql',
        'prefix' => '',
      ),
    ),
  ),
);
