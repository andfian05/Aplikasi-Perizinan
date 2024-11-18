<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasantri;
use App\Models\Perizinan;
use App\Models\DetailPerizinan;

use DB;
use Auth;

class IzinMahasantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $mahasantri = Mahasantri::where('email', $user->email)->first();

        return view('mahasantri.edit-keterangan')->with([
            'mahasantri' => $mahasantri,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // exit();

        $user = Auth::user();
        $mahasantri = Mahasantri::where('email', $user->email)->first();
        $perizinan = Perizinan::where('status_perizinan', 1)->first();

        $coba = DetailPerizinan::create([
            'mhs_id' => $mahasantri->id,
            'tanggal_keluar' => $perizinan->tgl_keluar,
            'waktu_keluar' => $perizinan->jam_keluar,
            'tanggal_masuk' => $perizinan->tgl_masuk,
            'waktu_masuk' => $perizinan->jam_masuk,
            'keterangan' => $data['keterangan']
        ]);

        // dd($coba);
        // exit();

        return redirect()->route('mahasantri.izinSukses');
    }

    /** 
     * Show notification for success
    */
    public function success()
    {
        return view('mahasantri.notifsuccess');
    }

    /** 
     * Show notification success for arrival report.
     */
    public function successArrival()
    {
        $user = Auth::user();
        $mahasantri = Mahasantri::where('email', $user->email)->first();
        $perizinan = DetailPerizinan::where('mhs_id', $mahasantri->id)->first();

        $report = DetailPerizinan::findOrFail($perizinan->id);
        $report->status = 1;
        $report->save();
        
        return view('mahasantri.sukseslapor');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
