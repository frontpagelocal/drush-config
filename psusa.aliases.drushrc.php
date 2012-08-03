<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/psusa',
  'uri' => 'http://ubusrv/sagebrush',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
  /*array (
  'remote-host' => 'lan.frontpagelocal.com',
  'remote-user' => 'frontpagelocal',
  ),*/
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
  'parent' => '@psusa.remote',
  'uri' => 'http://psusa.frontpagelocal.com',
  'root' => '/home/frontpagelocal/psusa.frontpagelocal.com',
);

$aliases['prod'] = array (
  'parent' => '@psusa.remote',
  'uri' => 'http://www.premiereservicesusa.com',
  'root' => '/home/frontpagelocal/www.premiereservicesusa.com',
);
