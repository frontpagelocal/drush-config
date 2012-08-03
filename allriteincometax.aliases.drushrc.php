<?php

$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/allriteincometax',
  'uri' => 'http://ubusrv/allriteincometax',
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
  'parent' => '@allriteincometax.remote',
  'uri' => 'http://allrite.frontpagelocal.com',
  'root' => '/home/frontpagelocal/allrite.frontpagelocal.com',
);

$aliases['prod'] = array (
  'parent' => '@allriteincometax.remote',
  'uri' => 'http://www.allritetax.com',
  'root' => '/home/frontpagelocal/www.allritetax.com',
);
