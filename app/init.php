<?php

/*
** Require all dependincies to create new instance
** define values
** set the timezone etc
*/

require_once 'core/App.php';
require_once 'controllers/Controller.php';

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', dirname(__DIR__) . '/public')));
