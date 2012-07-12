<?php


$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/radiance',
  'uri' => 'http://ubusrv/radiance',
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
        'database' => 'radiance',
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
     ),
);


$aliases['stage'] = array (
  'parent' => '@radiance.remote',
  'uri' => 'http://stage.revealyourradiance.com',
  'root' => '/home/frontpagelocal/stage.revealyourradiance.com',
);

$aliases['prod'] = array (
  'parent' => '@radiance.remote',
  'uri' => 'http://www.revealyourradiance.com',
  'root' => '/home/frontpagelocal/www.revealyourradiance.com',
);
