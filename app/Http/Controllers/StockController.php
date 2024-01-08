<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Stock as StockModel;


class StockController extends Controller
{
    public function stock(){
        return view('panel.pelanggan.stock');
    }
    public function create_stock(Request $request){
        $nama_barang = $request->namabarang;
        $harga_jual = $request->hargajual;
        $harga_beli = $request->hargabeli;

        $k = new StockModel();
        $k->nama_barang = $nama_barang;
        $k->harga_beli = $harga_beli;
        $k->harga_jual = $harga_jual;
        $k->save();
        return redirect()->route('create-stock-get');
    }

}

