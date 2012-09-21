<pre>
<?php
session_start();

$_SESSION['tracker'] = time();

var_dump($_SESSION);

?>
</pre>
<hr>
<pre>
<?php
$processusCorePath = '../library/Processus/core/';
$applicationPath   = '../application/php/Application/';

require_once($processusCorePath . 'Interfaces/InterfaceBootstrap.php');
require_once($processusCorePath . 'Interfaces/InterfaceApplicationContext.php');
require_once($processusCorePath . 'ProcessusBootstrap.php');
require_once($applicationPath . 'ApplicationBootstrap.php');

$bootstrap = \Application\ApplicationBootstrap::getInstance();
$bootstrap->init();

$context = \Processus\ProcessusContext::getInstance();

print_r($context);