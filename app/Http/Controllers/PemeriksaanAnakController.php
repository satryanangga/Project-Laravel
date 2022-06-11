<?php

namespace App\Http\Controllers;

use App\DataAnak;
use App\Http\Requests\PemeriksaanAnakRequest;
use App\PemeriksaanAnak;
use Illuminate\Http\Request;

class PemeriksaanAnakController extends Controller
{
    public function index()
    {
        $pemeriksaanAnak = PemeriksaanAnak::orderBy('anak_id', 'desc')->latest()->get();
        return view('pemeriksaan-anak.index', [
            // 'catatanAnaks' => CatatanAnak::latest()->get(),
            'pemeriksaanAnak' => $pemeriksaanAnak,
        ]);
    }

    // public function show(Request $request, $id)
    // {
    //     // dd($pemeriksaanAnak):
    //     $pemeriksaanAnak = PemeriksaanAnak::find($id);
    //     return view('pemeriksaan-anak.index',compact('pemeriksaanAnak'))->renderSections()['content'];
    // }

    public function create()
    {
        return view('pemeriksaan-anak.create',[
            'pemeriksaanAnak' => new PemeriksaanAnak(),
            'dataAnak' => DataAnak::get(),
        ]);
    } 

    public function store(PemeriksaanAnakRequest $request)
    {
        $attr = $request->all();
        $attr['anak_id'] = request('nama_anak');

        PemeriksaanAnak::create($attr);
        session()->flash('success', 'Pemeriksaan Anak Berhasil di Tambahkan');
        return redirect('/data-anak/pemeriksaan-anak');
    }

    public function edit(PemeriksaanAnak $pemeriksaanAnak)
    {
        return view('pemeriksaan-anak.edit',[
            'pemeriksaanAnak' => $pemeriksaanAnak,
            'dataAnak' => DataAnak::get(),
        ]);
    }

    public function update(PemeriksaanAnakRequest $request, PemeriksaanAnak $pemeriksaanAnak)
    {
        $attr = $request->all();
        $attr['anak_id'] = request('nama_anak');

        $pemeriksaanAnak->update($attr);
        session()->flash('success', 'Pemeriksaan Anak Berhasil di ubah');
        return redirect('/data-anak/pemeriksaan-anak');
    }

    public function destroy(PemeriksaanAnak $pemeriksaanAnak)
    {
        $pemeriksaanAnak->delete();

        session()->flash('success', 'Pemeriksaan Anak Berhasil di hapus');
        return redirect('/data-anak/pemeriksaan-anak');
    }

    // public function hapus(PemeriksaanAnak $pemeriksaanAnak)
    // {
    //     $pemeriksaanAnak->delete();

    //     session()->flash('success', 'Pemeriksaan Anak Berhasil di hapus');
    //     return redirect('/data-anak/pemeriksaan-anak');
    // }
}
