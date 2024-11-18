<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\Auth;

use Redirect; 

use Illuminate\Http\Request;

use App\Models\User;
use DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('login/masuk');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $account = DB::table('users')->where('email', $request->email)->first();
  
            if ($account->role == 'Administrator') {
                Auth::guard('administrator')->LoginUsingId($account->id);
                return redirect('admin');
            } elseif ($account->role == 'Security') {
                Auth::guard('security')->LoginUsingId($account->id);
                return redirect('security/pelaporan');
            } elseif ($account->role == 'Mahasantri') {
                Auth::guard('mahasantri')->LoginUsingId($account->id);
                $akun_mhs = DB::table('users')->where('id', $account->id)->first();
                $mahasantri = DB::table('mahasantri')->where('email', $akun_mhs->email)->first();
                if ($mahasantri->status_akun == 1) {
                    $status_izin = DB::table('detail_perizinan')->where('mhs_id', $mahasantri->id)->first();
                    if ($status_izin != []) {
                        if ($status_izin->keterangan != "") {
                            if ($status_izin->status == 0) {
                                return redirect('mahasantri/keterangan-izin/berhasil');
                            } elseif ($status_izin->status == 1) {
                                return redirect('mahasantri/keterangan-izin/report/berhasil');
                            }
                            return redirect('mahasantri/perizinan');
                        } 
                    }
                    return redirect('mahasantri/perizinan');
                } else {
                    return back()->with('status', 'Status akun anda belum mendapatkan izin.');
                }                
            } 
        }

        return redirect('/login')->with('status', 'Username atau Password Anda Salah');
    }

    public function logout()
    {
        if (Auth::guard('administrator')->check()) {
            Auth::guard('administrator')->logout();
        
        } elseif (Auth::guard('security')->check()) {
            Auth::guard('security')->logout();
        } elseif (Auth::guard('mahasantri')->check()) {
            Auth::guard('mahasantri')->logout();
        } 

        return view('welcome');
    }
}
