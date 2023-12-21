<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    public function index()
    {
    $buah = buah::all();
    $jumlah = count($buah);
    return view('buah',['buah'=>$buah,'jumlah'=>$jumlah]);
    }
    public function tambah_data()
    {
        return view('tambah_data');
    }
    public function simpan_data(Request $request)
    {
        $nama_buah = $request->buah;
        buah::create(['nama'=>$nama_buah]);
        return redirect('/buah');
    }
    public function edit($id)
    {
        $buah = Buah::find($id);
        return view('edit',['buah'=>$buah]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name_baru = $request->buah;
        Buah::where('id',$id)->update(['home'=>$name_baru]);
        return redirect('/buah');
    }
    public function hapus(Request $request)
    {
        $id = $request->id;
        Buah::destroy($id);
        return redirect('/buah'); 
    }

}
