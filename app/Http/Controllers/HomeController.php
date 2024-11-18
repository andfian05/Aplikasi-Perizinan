<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mahasantri;

use App\Models\Perizinan;
use App\Models\DetailPerizinan;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Show the application dashboard Administrator.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardAdmin()
    {
        $detail_perizinan = DetailPerizinan::count();
        $perizinan = Perizinan::count();    
        $user = User::count();

      
        return view('admin.dashboard')->with([
            'detail_perizinan' => $detail_perizinan,
            'perizinan' => $perizinan,
            'user' => $user,
            
        ]);
    }

    /** 
     * Show page form update password account Administrstor.
     */
    public function editPassAdmin(Request $request)
    {
        $admin = Auth::user();

        return view('admin.ubah-sandi-admin')->with([
            'admin' => $admin,
        ]);
    }
    
    /** 
     * Update password account Administrator.
     */
    public function updatePassAdmin(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // exit();

        $admin = Auth::user();
        $user = User::findOrFail($admin->id);

        if($request->password_baru == ""){
            $password = $user->password;
        }else{
            $password = Hash::make($data['password_baru']);
        }

        User::where('id', $user->id)
        ->update([
            'password' => $password,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Password berhasil diubah!');
    }

    /**
     * Show the application dashboard Security.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardSecurity()
    {
        $perizinans = DetailPerizinan::where('status', 1)->with(['mahasantri'])->get();

        return view('satpam.data-lapor')->with([
            'perizinans' => $perizinans,
        ]);
    }

    /** 
     * Update for status perizinan mahasantri by security.
     */
    public function report($id)
    {
        $report = DetailPerizinan::findOrFail($id);
        $report->status = 2;
        $report->save();

        return back()->with('success', 'Data Mahasantri berhasil diteruskan ke Administrator');
    }

    /**
     * Show page form update password account Security.
     */
    public function editPassSecurity(Request $request)
    {
        $security = Auth::user();

        return view('satpam.ubah-sandi')->with([
            'security' => $security,
        ]);
    }

    /** 
     * Update password account Security.
     */
    public function updatePassSecurity(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // exit();

        $security = Auth::user();
        $user = User::findOrFail($security->id);

        if($request->password_baru == ""){
            $password = $user->password;
        }else{
            $password = Hash::make($data['password_baru']);
        }

        User::where('id', $user->id)
        ->update([
            'password' => $password,
        ]);

        return redirect()->route('security.pelaporan')->with('success', 'Password berhasil diubah!');
    }
   
    /**
     * Show the application dashboard Mahasantri.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardMahasantri()
    {
        $status = Perizinan::where('status_perizinan', 1)->first();
        // dd($status);
        // exit();

        return view('mahasantri.perizinan-mahasantri')->with([
            'status' => $status,
        ]);
    }

    /** 
     * Show page form update password account Mahasantri.
     */
    public function editPassMahasantri(Request $request)
    {
        $mahasantri = Auth::user();

        return view('mahasantri.ubah-sandi-mahasantri')->with([
            'mahasantri' => $mahasantri,
        ]);
    }

    /** 
     * Update password account Mahasantri.
     */
    public function updatePassMahasantri(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // exit();

        $mahasantri = Auth::user();
        $mhs = Mahasantri::where('email', $mahasantri->email)->first();
        $user = User::findOrFail($mahasantri->id);
        
        if($request->password_baru == ""){
            $password = $user->password;
        }else{
            $password = Hash::make($data['password_baru']);
        }

        User::where('id', $user->id)
        ->update([
            'password' => $password,
        ]);

        Mahasantri::where('id', $mhs->id)
        ->update([
            'password' => $data['password_baru'],
        ]);

        return redirect()->route('mahasantri.perizinan')->with('success', 'Password berhasil diubah!');

    }

}
