<?php
defined('ROOT_PATH') or define('ROOT_PATH', dirname(__FILE__));
if (is_file(ROOT_PATH . '/data/install.lock')) {
    header('Location: ./index.php');
    exit;
}
define('THINK_PATH', './includes/thinkphp/');
define('APP_NAME', 'install');
define('APP_PATH', './install/');
//define('APP_DEBUG', true);
require(THINK_PATH."/ThinkPHP.php");