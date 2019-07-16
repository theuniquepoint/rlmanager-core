<?php

Route::group(['namespace' => 'Theuniquepoint\Authenticator\Http\Controllers', 'middleware' => ['Authenticator']], function(){
    Route::get('login', 'AuthenticatorController@getLogin');
    Route::post('login', 'AuthenticatorController@postLogin');
});

?>