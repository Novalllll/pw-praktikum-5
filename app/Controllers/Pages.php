<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Praktikum 5'
        ];

        return view('pages/home', $data);   
    }

    public function about()
    {
        $data = [
            'title' => 'Device'
        ];
        
        return view('pages/about', $data);
        
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                   'tipe' => 'rumah',
                   'alamat' => 'Jl.Teratai 10',
                   'kota' => 'Depok'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Gatot Subroto Kav.10',
                    'kota' => 'Depok'
                ]
            ]
        ];
        
        return view('pages/contact', $data);
    }
}
