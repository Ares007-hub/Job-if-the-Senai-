<?php

use Illuminate\Support\Facades\Route;

route::get('/', 'App\Http\Controllers\WebsiteController@home' );
route::get('/catalogo', 'App\Http\Controllers\WebsiteController@catalogo' );
route::get('/contato', 'App\Http\Controllers\WebsiteController@contato' );
route::get('/carrinho', 'App\Http\Controllers\WebsiteController@carrinho' );
route::get('/checkout', 'App\Http\Controllers\WebsiteController@checkout' );
route::get('/produto', 'App\Http\Controllers\WebsiteController@produto' );


route:: prefix('/admin')->group (function () {
    Route::get('/configuracoes', function () {
    return view('admin.configuracoes');
    });
    Route::get('/clientes', function () {
        return view('admin.clientes');
    });
    Route::get('/produtos', function () {
        return view('admin.produtos');
    });
    Route::get('/pedidos', function () {
        return view('admin.pedidos');
    });
});

Route::get('/admin', function () {
    return view('admin.index');
});
