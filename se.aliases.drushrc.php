<?php


$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/successexceleration',
  'uri' => 'http://ubusrv/successexceleration',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
  /*'databases' => 
  array (
    'default' => 
    array (
      'default' => 
      array (
        'database' => 'successexceleration',
        'username' => 'root',
        'password' => 'fpladmin8756',
        'host' => 'localhost',
        'port' => '',
        'driver' => 'mysql',
        'prefix' => '',
      ),
    ),
  ),*/
);


$aliases['remote'] = array (
  'remote-host' => 'drush.frontpagelocal.com',
  'remote-user' => 'frontpagelocal',
  'path-aliases' => array(
      '%drush' => '/home/frontpagelocal/drush',
      '%drush-script' => '/home/frontpagelocal/drush/drush',
      '%dump-dir' => '/home/frontpagelocal/dumps/',
     ),/*
   'databases' => array (
    'default' => array (
      'default' => array (
        'username' => 'fpl_se',
        'password' => 'gNiMTuDT',
        'host' => 'mysql.reputationninjas.com',
        'port' => '',
        'driver' => 'mysql',
        'prefix' => '',
      ),
    ),
  ),*/
);


$aliases['stage'] = array (
  'parent' => '@se.remote',
  'uri' => 'http://stage.success-exceleration.com',
  'root' => '/home/frontpagelocal/stage.success-exceleration.com',
   /*'databases' => array (
    'default' => array (
      'default' => array (
        'database' => 'se_stage',
      ),
    ),
  ),*/
);

$aliases['prod'] = array (
  'parent' => '@se.remote',
  'uri' => 'http://www.success-exceleration.com',
  'root' => '/home/frontpagelocal/www.success-exceleration.com',
   /*'databases' => array (
    'default' => array (
      'default' => array (
        'database' => 'se_prod',
      ),
    ),
  ),*/
);
