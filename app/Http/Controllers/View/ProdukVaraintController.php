<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\ProdukVariant;
use Illuminate\Http\Request;

class ProdukVaraintController extends Controller
{
    
    public function index(){
        $variant = ProdukVariant::all();
        return view('variant',['variants'=>$variant]);
    }
    public function store(Request $request){
       ProdukVariant::create([
        'nama_produk'=>$request->nama_produk,
        'kategori'=>$request->kategori,
        'deskripsi'=>$request->deskripsi
       ]);
       return redirect()->back();
    }
    public function update(Request $request,$id){
        $input = $request->all();
        $variant = ProdukVariant::findOrFail($id);
        $variant->produk_id=$input['variant_produkid'];
        $variant->color_id= $input['variant_colorid'];
        $variant->size_id= $input['variant_sizeid'];
        $variant->price= $input['price'];
        $variant->save();
        return redirect()->back()->with('success', 'variant updated successfully.');
        
    }
    public function destroy(Request $request,$id){
        $variant = ProdukVariant::find($id);
        $variant->delete();
        return redirect()->back();
    }

}
