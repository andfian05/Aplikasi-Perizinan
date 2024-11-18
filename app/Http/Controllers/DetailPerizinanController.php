<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailPerizinan;
use App\Models\Mahasantri;

use PDF;

class DetailPerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_perizinans = DetailPerizinan::with(['mahasantri'])->get();

        $detail_perizinans = DetailPerizinan::sortable()->paginate(10)->onEachSide(1)->fragment('detail_perizinan');

        return view('admin.detail-perizinan.data-info-izin')->with([
            'detail_perizinans' => $detail_perizinans,
        ]);
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
        $detail_perizinan = DetailPerizinan::with(['mahasantri'])->findOrFail($id);

        return view('admin.detail-perizinan.detail-info-izin')->with([
            'detail_perizinan' => $detail_perizinan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail_perizinan = DetailPerizinan::findOrFail($id);
        $detail_perizinan->delete();

        return redirect()->route('detail-perizinan.index');
    }

    public function exportPDF()
    {
        $detail_perizinans = DetailPerizinan::with(['mahasantri'])->get();
        $data = [
            'detail_perizinans' => $detail_perizinans
        ];

        $pdf = PDF::loadView('admin.detail-perizinan.pdf-izin', $data);
        return $pdf->download('Data-Detail-Perizinan-Mahasantri.pdf');
    }
}