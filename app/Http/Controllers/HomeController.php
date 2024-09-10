<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Berita;
use App\Models\Pengaduan;
use App\Models\PengajuanSurat;
use App\Models\Product;
use App\Models\ProfilDesa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{   

    public function dashboard(){
         return view('backend.dashboard', [
            'total_berita' => Berita::count(),
            'total_user' => User::count(),
            'total_pengaduan' => Pengaduan::count(),
            'total_surat' => PengajuanSurat::count(),
            'total_aparatur' => Aparatur::count(),
            'latest_berita' => Berita::whereStatus(1)->latest()->take(5)->get(),
            'popular_berita' => Berita::whereStatus(1)->orderBy('views', 'desc')->take(5)->get() 
         ]);
     }

     public function datapenduduk(){
        return view('backend.datapenduduk');
    }

    public function homepage(){
        return view('homepage', [
            'latest_post' => Berita::whereStatus(1)->latest()->take(3)->get(),
            'popular_berita' => Berita::whereStatus(1)->orderBy('views', 'desc')->take(5)->get(),
            'berita' => Berita::latest()->get(),
            'pd' => ProfilDesa::latest()->get()
        ]);
    }

    public function homepageadmin(){
        return view('homepageadmin', [
            'latest_post' => Product::latest()->first(),
            'product' => Product::latest()->get()
        ]);
    }

    
    public function user(Request $request){
        $data = new User;

        if($request->get('search')){
            $data = $data->where('name','LIKE','%'.$request->get('search').'%')
            ->orWhere('email','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.user',compact('data','request'));
    }

    public function create(){ 
        return view ('create');
    }

    public function store(Request $request){
       $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'required',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['email']       = $request->email;
       $data['name']        = $request->nama;
       $data['password']    = Hash::make($request->password);

       User::create($data);

       return redirect()->route('index');
    }
}
