<?php

namespace App\Http\Controllers;

use App\DataOrtu;
use App\Http\Requests\DataOrtuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataOrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu_id = DataOrtu::where('user_id', Auth::id())->latest()->get();
            // $danak = DataAnak::where('ortu_id', $ortu_id)->get();
        }else{
            $ortu_id = DataOrtu::latest()->get();
        };

    
        return view('dataOrtu.index', [
            'dataOrtus' => $ortu_id,   
        ]);
        // return view('dataOrtu.index', [
        //     'dataOrtus' => DataOrtu::latest()->get(),   
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataOrtu.create',[
            'dataOrtu' => new DataOrtu(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataOrtuRequest $request)
    {
        $attr = $request->all();

        $dataOrtu = auth()->user()->dataOrtus()->create($attr);
        session()->flash('success', 'Data Orang Tua Berhasil di Tambahkan');
        return redirect('/data-ortu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DataOrtu $dataOrtu)
    {
        $this->authorize('show', $dataOrtu);
        
        return view('dataOrtu.show', compact('dataOrtu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataOrtu $dataOrtu)
    {
        $this->authorize('edit', $dataOrtu);

        return view('dataOrtu.edit', [
            'dataOrtu' => $dataOrtu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataOrtuRequest $request, DataOrtu $dataOrtu)
    {
        $attr = $request->all();
        $dataOrtu->update($attr);
        session()->flash('success', 'Data Orang Tua Berhasil di Ubah');
        return redirect('/data-ortu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataOrtu $dataOrtu)
    {
        $this->authorize('delete', $dataOrtu);

        $dataOrtu->delete();
        session()->flash('success', 'Data Berhasil di Hapus');
        return redirect('/data-ortu');
    }
}
