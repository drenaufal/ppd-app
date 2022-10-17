<?php

namespace App\Http\Controllers;

use App\Models\datal;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){

        // $result = datal::all();
        // foreach ($result as $val){
        //     $data ="['".$val->nama_barang."', ".$val->jumlah_barang."],";
        // }
        // $chartdata = $data;
        return view('home', 
        // compact('chartdata')
        ['title' => 'home']
    );
        // $data['pieChart'] = datal::select(\DB::raw("COUNT(*) as count"), \DB::raw("MONTHNAME(created_at) as month_name"))
        // ->whereYear('created_at', date('Y'))
        // ->groupBy('month_name')
        // ->orderBy('count')
        // ->get();
    }

    
}
