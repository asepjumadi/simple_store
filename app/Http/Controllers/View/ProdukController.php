<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\ProdukVariant;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produks =  ProdukVariant::select(
            'produk.nama_produk',
            'produk.kategori',
            'produk.deskripsi',
            'warna_produk.warna',
            'produk_size.nama_ukuran',
            'produk_varaint.price',
            'produk_varaint.id'
            
        )
        ->leftJoin('produk','produk_varaint.produk_id','produk.id')
        ->leftJoin('warna_produk','produk_varaint.color_id','warna_produk.id')
        ->leftJoin('produk_size','produk_varaint.size_id','produk_size.id')
        ->leftJoin('categories','produk.categori_id','categories.id')
        ->get();
    //dd($produks);

        //dd($produks);
        return View('produk',['produks' => $produks]);
    }
    public function store(Request $request){
       Produk::create([
        'nama_produk'=>$request->nama_produk,
        'kategori'=>$request->kategori,
        'deskripsi'=>$request->deskripsi
       ]);
      

       return redirect()->back();
    }
    public function update(Request $request,$id){
        $input = $request->all();
        $produk = Produk::findOrFail($id);
        $produk->nama_produk=$input['produk_name'];
        $produk->kategori= $input['produk_kategori'];
        $produk->deskripsi= $input['produk_deskripsi'];
        $produk->save();
        return redirect()->back()->with('success', 'Produk updated successfully.');
    }
    public function destroy(Request $request,$id){
        $produk = Produk::find($id);
        $produk->delete();
    }

}
