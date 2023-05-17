<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\View\ProdukController;
use App\Http\Controllers\View\ProdukVaraintController;
use App\Models\Produk;
use App\Models\ProdukVariant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard/produk',[ProdukController::class,'index'])->name('produk');
    Route::post('/dashboard/produk', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/dashboard/produk', [ProdukController::class, 'destroy'])->name('produk.destroy');
    Route::get('/dashboard/variant',[ProdukVaraintController::class,'index'])->name('variant');
    Route::post('/dashboard/variant', [ProdukVaraintController::class, 'update'])->name('variantupdate');
    Route::delete('/dashboard/variant', [ProdukVaraintController::class, 'destroy'])->name('variant.destroy');
    // Route::get('/dashboard/produk/update/{id}', function ($id) {
    //     $produk = Produk::find($id); // Assuming you want to retrieve data for a specific produk record
    //     $variant = ProdukVariant::where('produk_id', $produk->id)->first();
    
    //     return view('update', compact('produk', 'variant'));
    // })->name('update');
});

require __DIR__.'/auth.php';
