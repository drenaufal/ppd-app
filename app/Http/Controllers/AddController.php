<?php

namespace App\Http\Controllers;

use App\Models\datal;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        return view('add', [
            'title' => 'Add'
        ]);
    }

    public function tambah(Request $req){
        // return $req->all();
        $vtambah = $req->validate([
            'nama_barang' => 'required|max:255',
            'jumlah_barang' => 'required',
            'tgl_pembelian' => 'required',
            'status_pembayaran' => 'required',
            'file' => 'required|image'
            
        ]);

        if($req->file('file')){
            $vtambah['file'] = $req->file('file')->store('kwitansi');
        }

        datal::create($vtambah);
        //  $req->session()->flash('berhasil','data berhasil ditambah');
        // $req->session()->$req->session()->flash('key', 'asd');
        // $req->session()->now('key', 'asd');
        return back()->with('berhasil','Berhasil menambah data');
        
        // return redirect('/add');
     }
}
