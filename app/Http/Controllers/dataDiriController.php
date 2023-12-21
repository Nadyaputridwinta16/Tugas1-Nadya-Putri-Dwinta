<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataDiriController extends Controller
{    public function array()
    {
        $matakuliah =
        ['Kerja Praktek','Rekayasa Perangkat Lunak',
        'Pemograman Berorientasi Objek','Animasi dan Desain Grafis',
        'Pengolahan Suara','Kecerdasan Buatan','Jaringan Komputer Lanjut',
        'Pemograman Lanjut'];
        $nim = 210170157;
        $name = "Muhammad Raffi Shafwan";
        $jurusan = "Informatika";
        $program = "Teknik Informatika";
        $matkul = "Pemograman Lanjut A1";
        $totalmatakuliah = count($matakuliah);
        return view('array',['matakuliah' => $matakuliah, 'total' => $totalmatakuliah, 
        'name' => $name, 'jurusan' => $jurusan, 'nim' => $nim, 'program' => $program, 'matkul' => $matkul]);
    }
}
