<?php

namespace App\Http\Controllers;

use App\CatatanKehamilan;
use App\DataOrtu;
use App\Http\Requests\CatatanKehamilanRequest;
use Illuminate\Http\Request;

class CatatanKehamilanController extends Controller
{
    public function index()
    {
        $ctkehamilan = CatatanKehamilan::orderBy('ortu_id', 'desc')->latest()->get();
        return view('Catatan_kehamilan.index', [
            'catatanKehamilans' => $ctkehamilan,
        ]);
    }

    public function create()
    {
        return view('Catatan_kehamilan.create', [
            'catatanKehamilan' => new CatatanKehamilan(),
            'dataOrtu' => DataOrtu::get(),
        ]);
    }

    public function store(CatatanKehamilanRequest $request)
    {
        $attr = $request->all();

        $attr['ortu_id'] = request('nama_ibu');

        CatatanKehamilan::create($attr);
        session()->flash('success', 'Catatan Kehamilan Berhasil di Tambahkan');
        return redirect('/Catatan-kehamilan');
    }

    public function edit(CatatanKehamilan $catatanKehamilan)
    {
        return view('Catatan_kehamilan.edit',[
            'catatanKehamilan' => $catatanKehamilan,
            'dataOrtu' => DataOrtu::get(),
        ]);
    }

    public function update(CatatanKehamilanRequest $request, CatatanKehamilan $catatanKehamilan)
    {
        $attr = $request->all();

        $attr['ortu_id'] = request('nama_ibu');

        $catatanKehamilan->update($attr);
        session()->flash('success', 'Catatan Kehamilan Berhasil di Ubah');
        return redirect('/Catatan-kehamilan');
    }

    public function destroy(CatatanKehamilan $catatanKehamilan)
    {
        $catatanKehamilan->delete();

        session()->flash('success', 'Data Berhasil di Hapus');
        return redirect('/Catatan-kehamilan');
    }
}
