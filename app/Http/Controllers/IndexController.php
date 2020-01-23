<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getCpf() {
        return '015.288.180-83';
    }

    public function getCpfDevedor($numero) {
        $cpf = '015.288.180-83';
        $devedor = str_repeat('Muito, ', $numero);

        return "Você deve {$devedor} {$cpf}!!!";
    }

    public function getHome() {
        return view('welcome');
    }
}
