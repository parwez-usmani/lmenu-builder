<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcustommenu', array('as' => 'haddcustommenu', 'uses' => '\Aha\Menu\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => '\Aha\Menu\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('as' => 'hdeletemenug', 'uses' => '\Aha\Menu\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnelmenu', array('as' => 'hcreatenelmenu', 'uses' => '\Aha\Menu\Controllers\MenuController@createnelmenu'));
    Route::post($path . '/generatemenucontrol', array('as' => 'hgeneratemenucontrol', 'uses' => '\Aha\Menu\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('as' => 'hupdateitem', 'uses' => '\Aha\Menu\Controllers\MenuController@updateitem'));
});
