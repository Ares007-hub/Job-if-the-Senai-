<?php

namespace App\Http\Controllers; 

use App\Http\Controllers; 

class WebsiteController extends Controller{
    public function home() 
    {
        $produtos = [
            [
                'nome'  => 'Tênis Esportivo',
                'preco' => 299.90, 
                'img'   => 'assets/img/product2.svg',
            ],
            [
                'nome'  => 'Tênis Casual',
                'preco' => 149.90,
                'img'   => 'assets/img/product3.svg',
            ],
            [
                'nome'  => 'Tênis Running',
                'preco' => 249.90,
                'img'   => 'assets/img/product4.svg',
            ]
        ];
        
        return view('website.index', compact('produtos'));
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

    public function produto()
    {
        return view('produto');
    }
}