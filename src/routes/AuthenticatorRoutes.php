<?php

Route::group(['namespace' => 'Theuniquepoint\Authenticator\Http\Controllers'], function(){
    Route::get('login', 'AuthenticatorController@getLogin');
    Route::post('login', 'AuthenticatorController@postLogin');
});

?>