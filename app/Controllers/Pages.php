<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
         $data = [
            'title' => ' 🏠 | RzlApp',
             
         ];
      
        return view('pages/home', $data);
        
        
    }
    
    public function about()
    {
        $data = [
            'title' => ' 🅰️ | About Me'
         ];
       
        return view('pages/about' ,$data);
        
    }

    public function contact ()
    {
        $data = [
            'title' => '📞 | Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. ABC No 90',
                    'kota' => 'Jembrana'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. CBA No .99',
                    'kota' => 'Negara'
                ]
            ]
            
        ];
        return view('pages/contact', $data);
        
    }


}
