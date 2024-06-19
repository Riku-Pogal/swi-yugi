<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $datas = Card::all();
        return view('views.card',[
            'datas' => $datas,
        ]);
    }

    public function post(Request $request){
        Card::create([
            'nama_kartu' => $request->nama_kartu,
            'efek' => $request->efek,
            'level' => $request->level,
            'hrgjual' => $request->harga,
            'satuan' => $request->satuan,
        ]);
        return redirect()->back()->with('success', 'Data berhasil di Simpan');
    }
}