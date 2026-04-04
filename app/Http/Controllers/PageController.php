<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public function home()
        {
            return view('home');
        }

    public function servizi()

    {

return view('servizi');
}











        public function index()
    {

        $cards = [
            [
                'title' => 'Servizio 1',
                'content' => 'Descrizione del servizio 1'
            ],
            [
                'title' => 'Servizio 2',
                'content' => 'Descrizione del servizio 2'
            ],
            [
                'title' => 'Servizio 3',
                'content' => 'Descrizione del servizio 3'
            ],

             [
                'title' => 'Servizio 4',
                'content' => 'Descrizione del servizio 4'
            ],
        ];


        return view('indice',['cards'=>$cards]);
    }
}

