<?php

namespace App\Http\Controllers;

use App\{AsupanLahir, CatatanPersalinan, DataOrtu, KondisiLahir};
use App\Http\Requests\CatatanPersalinanRequest;
use Illuminate\Http\Request;
use Psy\Util\Json;
use Illuminate\Support\Str;
use DB;

class CatatanPersalinanController extends Controller
{
    public function index()
    {
        $catatanPersalinan = CatatanPersalinan::orderBy('ortu_id','desc')->latest()->get();
        foreach( $catatanPersalinan as $key => $kondisi){
            $kondisi_lahir = '';
            $asupan_lahir = '';
            foreach($kondisi->kondisiLahirs as $keyLahir => $lahir){
                if($keyLahir == 0){
                    $kondisi_lahir = $kondisi_lahir.''. $lahir->name;
                }else{
                    $kondisi_lahir = $kondisi_lahir.', '. $lahir->name;
                }
            }
            foreach($kondisi->asupanLahirs as $keyAsupan => $asupan){
                if($keyAsupan == 0){
                    $asupan_lahir = $asupan_lahir.''. $asupan->name;
                }else{
                    $asupan_lahir = $asupan_lahir.', '. $asupan->name;
                }
            }
            $catatanPersalinan[$key]->kondisi_lahir = $kondisi_lahir;
            $catatanPersalinan[$key]->asupan_lahir = $asupan_lahir;
        }

        // dd($catatanPersalinan);
        return view('catatan-persalinan.index', [
            'catatanPersalinans' => $catatanPersalinan
        ]);
    }

    public function create()
    {
        return view('catatan-persalinan.create', [
            'catatanPersalinan' => new CatatanPersalinan(),
            // 'kondisiLahirs' => KondisiLahir::get(),
            // 'asupanLahir' => AsupanLahir::get(),
            'dataOrtu' => DataOrtu::get(),
            
        ]);
    }

    public function store(CatatanPersalinanRequest $request, CatatanPersalinan $catatanPersalinan)
    {
        $attr = $request->all();
        // dd($attr);

        $attr['ortu_id'] = request('nama_ibu');
        $catatanPersalinan = CatatanPersalinan::create($attr);

        foreach($attr['kondisi_lahir'] as $kondisi){
            $kondisi_lahir = new KondisiLahir();
            $kondisi_lahir->name = $kondisi;
            $kondisi_lahir->catatan_persalinan_id = $catatanPersalinan->id;
            $kondisi_lahir->save();
        }

        foreach($attr['asupan_lahir'] as $asupan){
            $asupan_lahir = new AsupanLahir();
            $asupan_lahir->name = $asupan;
            $asupan_lahir->catatan_persalinan_id = $catatanPersalinan->id;
            $asupan_lahir->save();
        }

        // dd()
        // $kondisi_lahir = implode(' ', $attr['kondisi_lahir']);
        // $asupan_lahir = implode(' ', $attr['asupan_lahir']);
        // foreach($attr['kondisi_lahir'] as $kondisi){
        //     $kondisi_lahir = $kondisi_lahir.' '.$kondisi;
        // }

        // $attr['kondisi_lahir'] = $kondisi_lahir;
        // $attr['asupan_lahir'] = $asupan_lahir;
        
        // dd($attr);
        // $kondisilahir = array(['Segera menangis', 'Menangis beberapa saat', 'Seluruh tubuh kemerahan', 'Tidak Menangis', 'Anggota kebiruan', 'Seluruh tubuh biru', 'Kelainan bawaan', 'Meninggal']);
        // $asupanlahir = array(['IMD dalam 1 jam', 'Suntikan Vitamin K1', 'Salep mata antibiotika profilaksis', 'Imunisasi Hb0']);
        
        // $attr['kondisi_lahir_id'] = request('kondisi_lahir');
        // $attr['asupan_lahir_id'] = request('asupan_lahir');
        // $catatanPersalinan->kondisiLahir()->attach(request('kondisiLahir'));
        session()->flash('success', 'Catatan persalinan Berhasil di Tambahkan');
        return redirect('/Catatan-persalinan');
    }

    public function edit(CatatanPersalinan $catatanPersalinan)
    {
        $kondisi_lahir = '';
        $asupan_lahir = '';

        foreach($catatanPersalinan->kondisiLahirs as $keyLahir => $lahir){
            if($keyLahir == 0){
                $kondisi_lahir = $kondisi_lahir.''. Str::slug($lahir->name);
            }else{
                $kondisi_lahir = $kondisi_lahir.' '. Str::slug($lahir->name);
            }
        }
        foreach($catatanPersalinan->asupanLahirs as $keyAsupan => $asupan){
            if($keyAsupan == 0){
                $asupan_lahir = $asupan_lahir.''. Str::slug($asupan->name);
            }else{
                $asupan_lahir = $asupan_lahir.' '.Str::slug($asupan->name);
            }
        }
        $catatanPersalinan->kondisi_lahir = $kondisi_lahir;
        $catatanPersalinan->asupan_lahir = $asupan_lahir;

        // dd($catatanPersalinan);
        return view('catatan-persalinan.edit',[
            'catatanPersalinan' => $catatanPersalinan,
            'dataOrtus' => DataOrtu::get(),
            'kondisi_lahir' => $kondisi_lahir,
            'asupan_lahir' => $asupan_lahir
        ]);
    }

    public function update(CatatanPersalinanRequest $request, CatatanPersalinan $catatanPersalinan)
    {
        $attr = $request->all();
        // dd($attr);

        $attr['ortu_id'] = request('nama_ibu');
        $catatanPersalinan->update($attr);

        DB::table('kondisi_lahir')->where('catatan_persalinan_id', $catatanPersalinan->id)->delete();
        DB::table('asupan_lahir')->where('catatan_persalinan_id', $catatanPersalinan->id)->delete();

        foreach($attr['kondisi_lahir'] as $kondisi){
            $kondisi_lahir = new KondisiLahir();
            $kondisi_lahir->name = $kondisi;
            $kondisi_lahir->catatan_persalinan_id = $catatanPersalinan->id;
            $kondisi_lahir->save();
        }

        foreach($attr['asupan_lahir'] as $asupan){
            $asupan_lahir = new AsupanLahir();
            $asupan_lahir->name = $asupan;
            $asupan_lahir->catatan_persalinan_id = $catatanPersalinan->id;
            $asupan_lahir->save();
        }

        session()->flash('success', 'Catatan persalinan Berhasil di Ubah');
        return redirect('/Catatan-persalinan');
    }

    public function destroy(CatatanPersalinan $catatanPersalinan)
    {
        $catatanPersalinan->delete();

        session()->flash('success', 'Data Berhasil di Hapus');
        return redirect('/Catatan-persalinan');
    }
}
