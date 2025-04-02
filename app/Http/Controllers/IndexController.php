<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Vite;


class IndexController extends Controller {
    public static function index() {
        return view("pages.index", ['destaques' => [
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
        ]]);
    }

    public static function courses() {
        return view("pages.courses", ['courses' => [
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'descricao' => '',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'descricao' => '',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'descricao' => '',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
            [
                'nome' => 'Desenvolvimento de Sistemas',
                'descricao' => '',
                'imagem' => Vite::asset('resources/images/etec_zona_leste.png')
            ],
        ]]);
    }

    public static function departments() {
        return view("pages.departments");
    }

    public static function contact() {
        return view("pages.contact");
    }
}
