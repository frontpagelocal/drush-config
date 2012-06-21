<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/profile-test',
  'uri' => 'http://ubusrv/profile-test',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
  'databases' => 
  array (
    'default' => 
    array (
      'default' => 
      array (
        'database' => 'profile-test',
        'username' => 'drupal',
        'password' => '',
        'host' => 'localhost',
        'port' => '',
        'driver' => 'mysql',
        'prefix' => '',
      ),
    ),
  ),
);
