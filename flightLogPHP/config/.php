<?php
return array (
  'debug' => true,
  'App' =>
  array (
    'namespace' => 'App',
    'encoding' => 'UTF-8',
    'defaultLocale' => 'en_US',
    'base' => false,
    'dir' => 'src',
    'webroot' => 'webroot',
    'wwwRoot' => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/webroot/',
    /*'fullBaseUrl' => 'http://localhost:8765',*/
    'fullBaseUrl' => 'http://flightlog.local',
    'imageBaseUrl' => 'img/',
    'cssBaseUrl' => 'css/',
    'jsBaseUrl' => 'js/',
    'paths' =>
    array (
      'plugins' =>
      array (
        0 => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/plugins/',
      ),
      'templates' =>
      array (
        0 => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/src/Template/',
      ),
      'locales' =>
      array (
        0 => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/src/Locale/',
      ),
    ),
  ),
  'Security' =>
  array (
  ),
  'Asset' =>
  array (
  ),
  'Error' =>
  array (
    'errorLevel' => 24575,
    'exceptionRenderer' => 'Cake\\Error\\ExceptionRenderer',
    'skipLog' =>
    array (
    ),
    'log' => true,
    'trace' => true,
  ),
  'Session' =>
  array (
    'defaults' => 'php',
  ),
  'plugins' =>
  array (
    'Bake' => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/vendor/cakephp/bake/',
    'DebugKit' => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/vendor/cakephp/debug_kit/',
    'Migrations' => '/media/external/work/web/www/FlightLogPhP/flightLogPHP/vendor/cakephp/migrations/',
  ),
);
