<?php

namespace App\Http\Controllers;

use App\DataOrtu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user= DB::table('users')->count();
        $ortu= DB::table('data_ortu')->count();
        $anak= DB::table('data_anak')->count();
        
        return view('index', compact('user', 'ortu', 'anak'));
    }
}
