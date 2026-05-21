<?php

namespace App\Http\Controllers; 

use App\Http\Controllers; 

class WebsiteController extends Controller{

    public function home() 
    {
        $produtos = [
            [
                'nome'  => 'Tênis',
                'preco' => 299.90, 
                'img'   => 'assets/img/product2.svg',
            ],
            [
                'nome'  => 'Casa',
                'preco' => 149.90,
                'img'   => 'assets/img/product3.svg',
            ],
            [
                'nome'  => 'Fone',
                'preco' => 249.90,
                'img'   => 'assets/img/product4.svg',
            ]
        ];
        
        return view('website.home', compact('produtos'));
    }

    public function catalogo() 
    {
        $produtos = [
            [
                'nome'  => 'Tênis',
                'preco' => 299.90, 
                'img'   => 'assets/img/product2.svg',
            ],
            [
                'nome'  => 'Casa',
                'preco' => 149.90,
                'img'   => 'assets/img/product3.svg',
            ],
            [
                'nome'  => 'Fone',
                'preco' => 249.90,
                'img'   => 'assets/img/product4.svg',
            ]
        ];
        
        return view('website.catalogo', compact('produtos'));
    }

    public function contato(){
        return view('website.contato');
    }
    public function carrinho(){
        return view('website.carrinho');
    }
    public function checkout(){
        return view('website.checkout');
    }
    public function produto()
    {
        $nomeProduto = request()->query('nome');

        $produtos = [
            [
                'nome'  => 'Tênis',
                'preco' => 299.90, 
                'img'   => 'assets/img/product2.svg',
            ],
            [
                'nome'  => 'Casa',
                'preco' => 149.90,
                'img'   => 'assets/img/product3.svg',
            ],
            [
                'nome'  => 'Fone',
                'preco' => 249.90,
                'img'   => 'assets/img/product4.svg',
            ]
        ];

        $produtoSelecionado = collect($produtos)->firstWhere('nome', $nomeProduto) ?? $produtos[0];

        return view('website.produto', compact('produtoSelecionado'));
    }


}