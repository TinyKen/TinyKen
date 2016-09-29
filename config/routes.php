<?php
/**
 * Created by PhpStorm.
 * User: kenfo
 * Date: 2016/9/28
 * Time: 16:46
 */

use TinyKen\Routing\Router as Router;

Router::get('/', 'HomeController@home');

Router::any('foo', function() {
    echo "Foo!";
});
Router::filter(function() {
    return isset($_GET['token']) && $_GET['token'] == 1;
}, function(){
    Route::any('bar', function() {
        echo "Bar!<br>Filter Success!";
    });
});
Router::dispatch('View@process');