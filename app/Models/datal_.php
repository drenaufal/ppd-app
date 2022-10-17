<?php

namespace App\Models;



class datal 
{
    private static $datapem = [[
        'nama' => 'ban dalem',
        'slug' => 'ban-dalem'
      ],
      [
        'nama' => 'ban luar',
        'slug' => 'ban-luar123'
      ],
    ];

    public static function all()
    {
        return collect(self::$datapem);
    }

    public static function find($slug)
    {
        $datal = static::all();
        
    // $isidetail =  [];
    // foreach($datal as $idslug){
    //     if($idslug["slug"] === $slug){
    //         $isidetail = $idslug;
    //     }
    // }
    return $datal->firstWhere('slug',$slug);
    }
}
