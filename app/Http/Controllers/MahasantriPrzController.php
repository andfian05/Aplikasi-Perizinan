<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MahasantriRequest;
use App\Http\Requests\DetailPerizinanRequest;

use App\Models\Mahasantri;
use App\Models\DetailPerizinan;

use DB;
use Auth;
Use Alert;

class MahasantriPrzController extends Controller
{
    /**
     * Show the application dashboard Mahasantri.
     *
     * @return \Illuminate\Http\Response
     */
    public function mahasantri(Request $request)
    {
        $mahasantri = Auth::user();
        $user = Mahasantri::where('email', $mahasantri->email)->first();
        $ket_izin = DetailPerizinan::where('mhs_id', $user->id)->first();
        

        return view('mahasantri.dashboard')->with([
            'mahasantri' => $mahasantri,
            'ket_izin' => $ket_izin,
        ]);
    }

    /**
     * Show the page success for add Mahasantri permit information.
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        $mahasantri = Auth::user();
        $user = Mahasantri::where('email', $mahasantri->email)->first();
        $ket_izin = DetailPerizinan::where('mhs_id', $user->id)->first();

        return view('mahasantri.success')->with([
            'ket_izin' => $ket_izin,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $mahasantri = Auth::user();
        $ket_izin = DetailPerizinan::with(['mahasantri'])->findOrFail($id);

        return view('mahasantri.edit-keterangan')->with([
            'mahasantri' => $mahasantri,
            'ket_izin' => $ket_izin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetailPerizinanRequest $request, $id)
    {
        $data = $request->all();
        $ket_izin = DetailPerizinan::findOrFail($id);

        DetailPerizinan::where('id', $ket_izin->id)
            ->update([
                'keterangan' => $data['keterangan'],
            ]);
        
        return redirect()->route('keterangan-izin.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
