<?php

/**
 * Created by PhpStorm.
 * User: kenfo
 * Date: 2016/9/28
 * Time: 17:19
 */
use Illuminate\Database\Capsule\Manager as Capsule;

// 定义 BASE_PATH
define('BASE_PATH', __DIR__);

// VIEW_BASE_PATH
define('VIEW_BASE_PATH', BASE_PATH.'/app/views/');

// Autoload 自动载入
require BASE_PATH.'/vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require BASE_PATH.'/config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// View Loader
class_alias('\TinyKen\View\View','View');

class_alias('\Kmanager\services\Mail','Mail');

class_alias('\Kmanager\services\Redis','Redis');