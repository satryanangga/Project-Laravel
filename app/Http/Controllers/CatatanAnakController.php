<?php

namespace App\Http\Controllers;

use App\{CatatanAnak, DataAnak};
use App\Http\Requests\CatatanAnakRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CatatanAnakController extends Controller
{
    public function index()
    {
        $ctanak = CatatanAnak::orderBy('anak_id', 'desc')->latest()->get();
        return view('Catatan_anak.index', [
            // 'catatanAnaks' => CatatanAnak::latest()->get(),
            'catatanAnaks' => $ctanak,

        ]);
    }

    public function create()
    {
        return view('Catatan_anak.create', [
            "catatanAnak"=> new CatatanAnak(),
            "dataAnak" => DataAnak::get(),
        ]);
    }

    public function store(CatatanAnakRequest $request)
    {
        $attr = $request->all();

        $attr['anak_id'] = request('nama_anak');

        CatatanAnak::create($attr);
        session()->flash('success', 'Catatan Anak Berhasil di Tambahkan');
        return redirect('/catatan-anak');
    }

    public function edit(CatatanAnak $catatanAnak)
    {
        return view('Catatan_anak.edit',[
            "catatanAnak" => $catatanAnak,
            "dataAnak" => DataAnak::get(),
        ]);
    }

    public function update(CatatanAnakRequest $request, CatatanAnak $catatanAnak)
    {
        $attr = $request->all();

        $attr['anak_id'] = request('nama_anak');

        $catatanAnak->update($attr);
        session()->flash('success', 'Catatan Anak Berhasil di Ubah');
        return redirect('/catatan-anak');
    }

    public function destroy(CatatanAnak $catatanAnak)
    {
        $catatanAnak->delete();

        session()->flash("success", "Data Berhasil di Hapus");
        return redirect('/catatan-anak');
    }
}
