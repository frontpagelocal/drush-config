<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/destin',
  'uri' => 'http://ubusrv/destin',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
);

$aliases['remote'] = array (
  //'remote-host' => 'drush.frontpagelocal.com',
  //'remote-user' => 'frontpagelocal',
  /*'path-aliases' => array(
      '%drush' => '/home/frontpagelocal/drush',
      '%drush-script' => '/home/frontpagelocal/drush/drush',
      '%dump-dir' => '/home/frontpagelocal/dumps/',
     ),*/
);


$aliases['stage'] = array (
  'parent' => '@destin.remote',
  'uri' => 'http://destin.frontpagelocal.com',
  'root' => '/home/frontpagelocal/destin.frontpagelocal.com',
);

$aliases['prod'] = array (
  'parent' => '@destin.remote',
  'uri' => 'http://www.destinparasailing.com',
  'root' => '/home/frontpagelocal/www.destinparasailing.com',
);
