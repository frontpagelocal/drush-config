<?php
/*
$aliases['dev'] = array (
  'root' => '/home/frontpagelocal/www/theranklab',
  'uri' => 'http://ubusrv/theranklab',
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
*/

$aliases['demo'] = array (
  //'parent' => '@theranklab.remote',
  'uri' => 'http://stage.theranklab.com',
  'root' => '/home/frontpagelocal/stage.theranklab.com',
);

$aliases['prod'] = array (
  //'parent' => '@theranklab.remote',
  'uri' => 'http://www.theranklab.com',
  'root' => '/home/frontpagelocal/www.theranklab.com',
);
