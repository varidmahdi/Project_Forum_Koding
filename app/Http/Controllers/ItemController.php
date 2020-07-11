<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model Custom
use App\Models\ItemModel;
use App\Models\JawabanModel;

// Model Eloquent
use App\Item;
use App\Models\Tag;

class ItemController extends Controller
{
    public function create(){
        return view('item.form');
    }

    public function store(Request $request){
        //dd($request->all());
        // cara lama dengan query builder
        // $new_pertanyaan = ItemModel::save($request->all());
        // return redirect('pertanyaan');

        // cara baru dengan elequent
        // create item baru
        $new_item = Item::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        
        $tagArr = explode(',', $request->tags);
        $tagsMulti = [];
        foreach($tagArr as $strTag)
        {
            $tagArrAssc["tag_name"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        // create tags baru
        foreach($tagsMulti as $tagCheck)
        {
            $tag = Tag::firstOrCreate($tagCheck);
            $new_item->tags()->attach($tag->id);
        }

        return redirect('/pertanyaan');
    }

    public function index(){
        $items = ItemModel::get_all();
        return view('item.index', compact('items'));
    }

    public function show($id){
        // $item = ItemModel::cari_data($id);

        $item = Item::find($id);
        $jawabans = JawabanModel::find_by_pertanyaan_id($id);
        return view('item.show', compact('item', 'jawabans'));
    }

    public function edit($id){
        $item = ItemModel::cari_data($id);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $request){
        ItemModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $hapus = ItemModel::hapus($id);
        
        return redirect('/pertanyaan');
    }
}

?>