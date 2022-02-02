<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    Route::post('/pessoa', 'Api\PessoaController@stor');
    Route::get('/pessoa/{id}', 'Api\PessoaController@show')->where('id', '[1-9]+');
});
