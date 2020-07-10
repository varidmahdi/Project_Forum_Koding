<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ItemModel{
    public static function get_all(){
        $pertanyaans = DB::table('pertanyaans')->get();
        return $pertanyaans;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }

    public static function cari_data($id){
         $pertanyaan = DB::table('pertanyaans')->where('id', $id)->first();
         return $pertanyaan;
     }

    public static function update($id, $request){
         //dd($request->all());
         $pertanyaan = DB::table('pertanyaans')
                     ->where('id', $id)
                     ->update([
                         'judul' => $request["judul"],
                         'isi' => $request["isi"],
                         'tag' => $request["tag"]
                     ]);
         return $pertanyaan;
     }

    public static function hapus($id){
        $delete = DB::table('pertanyaans')
        ->where('id', $id)->delete();
        return $delete;
     }
    

}
