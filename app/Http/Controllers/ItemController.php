<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;
use App\Models\JawabanModel;

class ItemController extends Controller
{
    public function create(){
        return view('item.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_pertanyaan = ItemModel::save($request->all());
        return redirect('pertanyaan');
    }

    public function index(){
        $items = ItemModel::get_all();
        //dd($items);
        return view('item.index', compact('items'));
    }

    public function show($id){
        $item = ItemModel::cari_data($id);
        $jawabans = JawabanModel::find_by_pertanyaan_id($id);
        //dd($items);
        return view('item.show', compact('item', 'jawabans'));
    }

    public function edit($id){
        $item = ItemModel::cari_data($id);
        //dd($items);
        return view('item.edit', compact('item'));
    }

    public function update($id, Request $request){
        //dd($request->all());
        $new_item = ItemModel::update($id, $request->all());
        return redirect('pertanyaan');
    }

    public function destroy($id){
        $hapus = ItemModel::hapus($id);
        //dd($items);
        return redirect('pertanyaan');
    }
}

?>