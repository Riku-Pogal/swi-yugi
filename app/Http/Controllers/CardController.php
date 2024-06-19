<?php

namespace App\Http\Controllers;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $datas = Card::all();
        return view('pages.card',[
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

    public function getedit(Card $card){
        return view('pages.cardedit',[
            'card' => $card,
        ]);
    }

    public function update(Card $card){
        Card::where('id', '=', $card->id)->update([
            'nama_kartu' => request('nama_kartu'),
            'efek' => request('efek'),
            'level' => request('level'),
            'hrgjual' => (float) str_replace(',', '', request('harga')),
            'satuan' => request('satuan'),
        ]);        
        return redirect()->route('card')->with('success', 'Data berhasil di Update'); 
    }


public function delete(Card $card){
    Card::find($card->id)->delete();
    return redirect()->route('card')->with('success', 'Data berhasil di Delete');
}

public function  getcard(Request $request){
    $nama_kartu = $request->nama_kartu;
    if($nama_kartu == ''){
        $card = Card::select('id','nama_kartu','efek','level','hrgjual','satuan')->orderBy('nama_kartu', 'asc')->limit(20)->get();
    }else{
        $card = Card::select('id','nama_kartu','efek','level','hrgjual','satuan')->where('nama_kartu','=',$nama_kartu)->limit(20)->get();
    }
    return json_encode($card);

}
}