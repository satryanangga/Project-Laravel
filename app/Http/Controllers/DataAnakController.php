<?php

namespace App\Http\Controllers;

use App\{DataAnak, DataOrtu, PemeriksaanAnak};
use App\Http\Requests\DataAnakRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DataAnakController extends Controller
{
    public function history($anak_id = null)
    {
        // dd($anak_id);
        $pemeriksaanAnak = PemeriksaanAnak::where('anak_id', $anak_id)->orderBy('anak_id', 'desc')->latest()->get();
        return view('dataAnak.history', [
            // 'catatanAnaks' => CatatanAnak::latest()->get(),
            'pemeriksaanAnak' => $pemeriksaanAnak,
        ]);
    }

    public function index()
    {
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu_id = DataOrtu::where('user_id', Auth::id())->get()[0]->id;
            $danak = DataAnak::where('ortu_id', $ortu_id)->latest()->get();
        }else{
            // $ortu = DataOrtu::get();
            $danak = DataAnak::orderBy('ortu_id', 'desc' )->latest()->get();
        };
        return view('dataAnak.index', [
            'dataAnaks' => $danak,   
        ]);
        // return view('dataAnak.index', [
        //     'dataAnaks' => DataAnak::latest()->get(),   
        // ]);
    }

    public function create()
    {
        return view('dataAnak.create',[
            'dataAnak' => new DataAnak(),
            'dataOrtu' => DataOrtu::get(),
        ]);
    }

    public function store(DataAnakRequest $request)
    {
        $attr = $request->all();

        $attr['ortu_id'] = request('nama_ibu');

        DataAnak::create($attr);
        session()->flash('success', 'Data Anak Berhasil di Tambahkan');
        return redirect('/data-anak');
    }

    public function edit(DataAnak $dataAnak)
    {
        return view('dataAnak.edit',[
            'dataAnak' => $dataAnak,
            'dataOrtu' => DataOrtu::get(),
        ]);
    }

    public function update(DataAnakRequest $request, DataAnak $dataAnak)
    {
        $attr = $request->all();

        $attr['ortu_id'] = request('nama_ibu');

        $dataAnak->update($attr);
        session()->flash('success', 'Data Anak Berhasil di Ubah');
        return redirect('/data-anak');
    }

    public function destroy(DataAnak $dataAnak)
    {
        $dataAnak->delete();

        session()->flash("success", "Data Berhasil di Hapus");
        return redirect('/data-anak');
    }
}
