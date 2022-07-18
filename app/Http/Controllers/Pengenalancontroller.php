<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengenalancontroller extends Controller
{
    //

    public function pengenalan(){
        $nama = "Sofyna c.r";
        $umur = "16";
        return view('page1.pengenalan', compact('nama', 'umur'));
    }
    public function siswa ()
    {
        $a = [
            array('id' => 1, 'nama' =>'sofyna', 'umur' => 16, 'kelas' =>'XII RPL 2', 'mapel' =>['B.Indonesia,', 'B.Inggris']),
            array('id' => 2, 'nama' =>'kevan', 'umur' => 17, 'kelas' =>'XII RPL 2', 'mapel' =>['MTK,', 'IPA']),
            array('id' => 3, 'nama' =>'adriana', 'umur' => 18, 'kelas' =>'XII RPL 2', 'mapel' =>['SIMDIG,', 'B.SUNDA']),
            array('id' => 4, 'nama' =>'zalianty', 'umur' => 17, 'kelas' =>'XII RPL 2', 'mapel' =>['Fisika,', 'Kwu']),
            array('id' => 5, 'nama' =>'vivi', 'umur' => 16, 'kelas' =>'XII RPL 2', 'mapel' =>['Pai,', 'Al-Quran']),
        ];

        return view('/page1.siswa',['siswa' => $a]);
    }
}
