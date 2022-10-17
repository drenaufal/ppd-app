<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datal;
use Barryvdh\DomPDF\Facade\PDF as PDF;

class datalcontroller extends Controller
{
    public function index(){
        $hasil = datal::latest();

        // if(request(['tgl_awal','tgl_akhir'])){
        //     $tgl1 = 'tgl_awal';
        //     $tgl2 = 'rgl_akhir';
        //     $hasil->whereBetween('tgl_pembelian',[$tgl1,$tgl2]);
        // }
        
        
        return view('list',[
            "title" => "list",
            "data" => $hasil->get()
          
        ]);
        
    }

    public function showdetail(datal $datadetail){
        return view('detail',[
            "title" => "detail",
            "datadet" => $datadetail//datal::find($datadetail)
        ]);

    }
    public function cetak_pdf()
    {
    	$dat = datal::all();
    	$pdf = PDF::loadView('list',['data'=>$dat]);
    	return $pdf->download('export.pdf');
        
    }

    public function pie(){
 //$p =  datal::all();
        $result = datal::all();
        
        foreach ($result as $val){
            $data ="['".$val->nama_barang."',   ".$val->jumlah_barang."],";
        }
        $hasil = $data;
        return view('home',compact('hasil'));
    //         "title" => "home",
    //         "data" =>  compact('hasil')
            
    //     ]);
     }


}
