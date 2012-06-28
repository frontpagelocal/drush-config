<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/sagebrush',
  'uri' => 'http://ubusrv/sagebrush',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
);

$aliases['remote'] = array (
  'remote-host' => 'www.sbcommunicationengineering.com',
  'remote-user' => 'frontpagelocal',
  'path-aliases' => array(
      '%drush' => '/home/frontpagelocal/drush',
      '%drush-script' => '/home/frontpagelocal/drush/drush',
      '%dump-dir' => '/home/frontpagelocal/dumps/',
     ),
);


$aliases['stage'] = array (
  'parent' => '@sagebrush.remote',
  'uri' => 'http://stage.sbcommunicationengineering.com',
  'root' => '/home/frontpagelocal/stage.sbcommunicationengineering.com',
);

$aliases['prod'] = array (
  'parent' => '@sagebrush.remote',
  'uri' => 'http://www.sbcommunicationengineering.com',
  'root' => '/home/frontpagelocal/www.sbcommunicationengineering.com',
);
