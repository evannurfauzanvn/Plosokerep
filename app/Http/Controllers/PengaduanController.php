<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengaduanController extends Controller
{
    public function pengaduan(Request $request) {
        $data = new Pengaduan();

        if ($request->get('search')) {
            $data = $data->where('nama', 'LIKE', '%' . $request->get('search') . '%')
                         ->orWhere('no_tlp', 'LIKE', '%' . $request->get('search') . '%');
        }

        $data = $data->get();

        return view('backend.pengaduan', compact('data', 'request'));
    }

    public function H_pengaduan() {
        return view('H_pengaduan');
    }

    public function pengaduanadmin()
    {
        
        return view('H_pengaduanadmin');
    }

    public function simpan_pengaduan(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'rincian_pengaduan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Pengaduan::create([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'rincian_pengaduan' => $request->rincian_pengaduan,
        ]);

        return redirect()->route('pengaduanadmin')->with('success', 'Pengaduan berhasil dikirim.');
    }

    public function delete_pengaduan(Request $request, $id) {
        $data = Pengaduan::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pengaduan');
    }
}
