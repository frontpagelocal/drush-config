<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/herb',
  'uri' => 'http://ubusrv/herb',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
);

$aliases['remote'] = array (
  //'remote-host' => 'drush.frontpagelocal.com',
  //'remote-user' => 'frontpagelocal',
  'path-aliases' => array(
      '%drush' => '/home/frontpagelocal/drush',
      '%drush-script' => '/home/frontpagelocal/drush/drush',
      '%dump-dir' => '/home/frontpagelocal/dumps/',
     ),
);


$aliases['stage'] = array (
  'parent' => '@herb.remote',
  'uri' => 'http://stage.theherbshopii.com',
  'root' => '/home/frontpagelocal/stage.theherbshopii.com',
);

$aliases['prod'] = array (
  'parent' => '@herb.remote',
  'uri' => 'http://www.theherbshopii.com',
  'root' => '/home/frontpagelocal/www.theherbshopii.com',
);
