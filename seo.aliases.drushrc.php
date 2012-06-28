<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/seo-overview',
  'uri' => 'http://ubusrv/seo-overview',
  'path-aliases' => 
  array (
    '%drush' => '/usr/share/php/drush',
    '%site' => 'sites/default/',
  ),
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


$aliases['prod'] = array (
  'parent' => '@seo.remote',
  'uri' => 'http://seo.frontpagelocal.com',
  'root' => '/home/frontpagelocal/seo.frontpagelocal.com',
);
