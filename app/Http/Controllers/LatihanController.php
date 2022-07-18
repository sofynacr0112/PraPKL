<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function menu()
    {
        $a = [
            array('beranda' => "beranda" ,
            'berita' => "Berita",
            'Berita' =>['Politik','Manca Negara'],
            'Olahraga' => "Olahraga",
            'olahraga' =>['Sepak Bola','Bulu Tangkis'],
            'tentang' => "Tentang"),

        ];
        return view('page1.menu', ['menu' => $a]);
    }


   public function kampus()
    {
        $dosen = [
        
            ['nama' => 'Yusuf Bachtiar','mata_kuliah' => 'Pemrograman Mobile', 'mahasiswa' => [
                ['nama' => 'Muhammad Sholeh', 'nilai' =>78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95],
        ],
        ],
                ['nama' => 'Yaris Riyadi', 'mata_kuliah' => 'Pemrograman Web', 'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' =>67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60],
        ],
        ],
    
    ];
        return view('page1.kampus',['kampus' => $dosen]);
    }
      
    public function tv()
    {
        $tv = [
             ['stasiun' => 'TVRI','siaran' => 'berita','jam_tayang' => '18:00','tanggal' =>'13 july 2022'],
             ['stasiun' => 'NET TV','siaran' => 'comedy','jam_tayang' => '21:00','tanggal' =>'13 july 2022'],
             ['stasiun' => 'BEINSPORT','siaran' => 'olahraga','jam_tayang' => '08:00','tanggal' =>'13 july 2022'],
             ['stasiun' => 'Ochannel','siaran' => 'berita','jam_tayang' => '15:00','tanggal' =>'13 july 2022'],
             ['stasiun' => 'Indosiar','siaran' => 'dangdut','jam_tayang' => '18:00','tanggal' =>'13 july 2022'],

        ];
        return view('page1.tv',['tv' => $tv]);
    }
    public function belanja(){
        $belanja = [
        ['nama' => "Alfian", 'membeli'=>
        [
            ['beli'=> "Sepatu", 'harga' => 250000],
            ['beli'=> "Baju", 'harga' => 100000],
            ['beli'=> "Celana", 'harga' => 150000],
            ['beli'=> "Kupluk", 'harga' => 100000],
        ]
        ],

        ['nama' => "Dida", 'membeli'=>
        [
            ['beli'=> "Topi", 'harga' => 100000],
            ['beli'=> "Baju", 'harga' => 75000],
            ['beli'=> "Celana", 'harga' => 125000],
        ]
        ]
];

return view('page1.belanja',['belanja' => $belanja]);

    }
}

