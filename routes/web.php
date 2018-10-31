<?php

Route::get('/categoria/{id}', 'Site\SiteController@categoria');
Route::get('/categoria2/{id}', 'Site\SiteController@categoriaop');

Route::get('/contato', 'Site\SiteController@contato');
Route::get('/', 'Site\SiteController@index');
