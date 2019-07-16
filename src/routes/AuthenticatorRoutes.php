<?php

Route::group(['namespace' => 'Theuniquepoint\Authenticator\Http\Controllers', 'middleware' => ['AuthenticatorRoutes']], function(){
    Route::get('login', 'AuthenticatorController@getLogin');
    Route::post('login', 'AuthenticatorController@postLogin');
});

?>