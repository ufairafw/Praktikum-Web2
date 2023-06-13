<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index ()
    {
        // ambil data produk dari database
        $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')

        // tampilin data
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();

        // kirim data ke view
        return view('admin.produk.produk', compact('produk'));
    }

}
