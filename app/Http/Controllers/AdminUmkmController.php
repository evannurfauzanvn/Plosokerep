<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminUmkmController extends Controller
{
    public function dashboard_umkm(){
        return view('admin_umkm.dashboard_umkm', [
            'total_produk' => Product::count(),
        ]);
    }

    public function product(){
        return view('umkm.product');
    }


    public function pesan(){
        return view('umkm.pesan');
    }

}
