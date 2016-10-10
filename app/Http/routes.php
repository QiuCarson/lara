<?php
$app['router']->get("/",function(){
    return '路由成功';
});
$app['router']->get("welcome",'App\Http\Controllers\WelcomeController@index');


