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
                         //'tag' => $request["tag_id"]
                     ]);

        //  $id_tag = DB::table('pertanyaan_tag')->where('pertanyaan_id', $id)->first();
        //  dd($id_tag->all());
        //  return $id_tag;
        //  $tag = DB::table('tags')
        //                 ->where('id', $id_tag)
        //                 ->update([
        //                  // 'judul' => $request["judul"],
        //                  // 'isi' => $request["isi"]
        //                     'tag_name' => $request["tag_id"]
        //              ]);

         return $pertanyaan;
         //return $tag;
     }

    public static function hapus($id){
        $deleted = DB::table('pertanyaans')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
     }
    

}
