<?php

use Illuminate\Support\Facades\Route;

route::get('/', 'App\Http\Controllers\WebsiteController@home' );

Route::get('/carrinho', function () {
    return view('carrinho');
}); 
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/produto', function () {
    return view('produto');
}); 

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

route::get('/catalogo', 'App\Http\Controllers\WebsiteController@catalogo' );