<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
        //member
        function index(){
            $data ['produk'] = produk::all();
            return view('produk.produk', $data);
        }

        function searchProduk(Request $req){
            $where = array(
                'nm_produk'=>$req->cari
            );

            $data['produk'] = produk::where('nm_produk', 'like', '%', $req->cari .'%')->orwhere('kd_produk', 'like', '%', $req->cari.'%')->get();
            return view('produk.produk', $data);
        }

        function addproduk(){
            $data = [
                'nm_produk' => '',
                'harga' => '',
                'deskripsi' => '',
                'gambar' => '',
                'action' => url('/produk/create'),
                'tombol' => "SIMPAN"
                ];
            return view('produk.addproduk',$data);
        }

        function createProduk(Request $req){
            $data = [
                'nm_produk'=>$req->nm_produk,
                'harga'=>$req->harga,
                'deskripsi'=>$req->deskripsi,
                'gambar'=>$req->gambar
            ];
            produk::create($data);
            return redirect('/produk');
        }
}
