<?php

namespace App\Http\Controllers;

use App\{CatatanAnak, CatatanKehamilan, CatatanPersalinan, DataAnak, DataOrtu};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class CatatanController extends Controller
{
    public function catatan_anak(){
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu_id = DataOrtu::where('user_id', Auth::id())->get()[0]->id;
            $anak = DataAnak::where('ortu_id', $ortu_id)->latest()->get();
        }else{
            $anak = CatatanAnak::orderBy('anak_id','desc')->latest()->get();
        };
        // dd($anak);
        return view('hasil_pemeriksaan.ctt_anak', [
            'catatanAnaks' => $anak,
        ]);
    }

    public function catatan_kehamilan(){
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu = DataOrtu::where('user_id', Auth::id())->get()[0];
            $kehamilan = CatatanKehamilan::where('ortu_id', $ortu->id)->orderBy('created_at', 'desc')->latest()->get();
        }else{
            $kehamilan = CatatanKehamilan::orderBy('ortu_id', 'desc')->latest()->get();
        };
        // dd($kehamilan);
        return view('hasil_pemeriksaan.ctt_kehamilan', [
            'catatanKehamilans' => $kehamilan,
        ]);
    }
    
    public function catatan_persalinan(){
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu = DataOrtu::where('user_id', Auth::id())->get()[0];
            $Persalinan = CatatanPersalinan::where('ortu_id', $ortu->id)->orderBy('created_at', 'desc')->get();
        }else{
            $Persalinan = CatatanPersalinan::orderBy('ortu_id', 'desc')->latest()->get();
        };

        // dd(Auth::user());

        foreach( $Persalinan as $key => $kondisi){
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
            $Persalinan[$key]->kondisi_lahir = $kondisi_lahir;
            $Persalinan[$key]->asupan_lahir = $asupan_lahir;
        }
        // dd($Persalinan);
        return view('hasil_pemeriksaan.ctt_Persalinan', [
            'catatanPersalinans' => $Persalinan,
        ]);
    }

    public function print_catatan_anak()
    {
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu_id = DataOrtu::where('user_id', Auth::id())->get()[0]->id;
            $cttanak = DataAnak::where('ortu_id', $ortu_id)->latest()->get();
        }else{
            $cttanak = CatatanAnak::orderBy('anak_id','desc')->latest()->get();
        };
        $pdf = PDF::loadview('hasil_pemeriksaan.print-ctt-anak',[
            'catatanAnaks' => $cttanak,
        ])
        ->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
    public function print_catatan_kehamilan()
    {
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu = DataOrtu::where('user_id', Auth::id())->get()[0];
            $cttkehamilan = CatatanKehamilan::where('ortu_id', $ortu->id)->orderBy('created_at', 'desc')->get();
        }else{
            $cttkehamilan = CatatanKehamilan::orderBy('ortu_id', 'desc')->latest()->get();
        };
        $pdf = PDF::loadview('hasil_pemeriksaan.print-ctt-kehamilan',[
            'catatanKehamilans' => $cttkehamilan,
        ])
        ->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
    public function print_catatan_persalinan()
    {
        if(Auth::user()->roles->pluck('name')[0] == 'User'){
            $ortu = DataOrtu::where('user_id', Auth::id())->get()[0];
            $cttPersalinan = CatatanPersalinan::where('ortu_id', $ortu->id)->orderBy('created_at', 'desc')->get();
        }else{
            $cttPersalinan = CatatanPersalinan::orderBy('ortu_id', 'desc')->latest()->get();
        };

        // dd(Auth::user());

        foreach( $cttPersalinan as $key => $kondisi){
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
            $cttPersalinan[$key]->kondisi_lahir = $kondisi_lahir;
            $cttPersalinan[$key]->asupan_lahir = $asupan_lahir;
        }
        $pdf = PDF::loadview('hasil_pemeriksaan.print-ctt-persalinan',[
            'catatanPersalinans' => $cttPersalinan,
        ])
        ->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}
