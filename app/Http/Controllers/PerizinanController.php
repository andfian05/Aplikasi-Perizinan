<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PerizinanRequest;

use App\Models\Perizinan;
use App\Models\Mahasantri;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perizinans = Perizinan::sortable()->paginate(10)->onEachSide(1)->fragment('Perizinan');

        return view('admin.perizinan.data-perizinan')->with([
            'perizinans' => $perizinans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $perizinans = Perizinan::all();

        return view('admin.perizinan.add-perizinan')->with([
            'perizinans' => $perizinans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerizinanRequest $request)
    {
        $data = $request->all();

        Perizinan::create($data);

        return redirect()->route('perizinan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perizinan = Perizinan::findOrFail($id);

        return view('admin.perizinan.detail-perizinan')->with([
            'perizinan' => $perizinan
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
        $perizinan = Perizinan::findOrFail($id);
       
        return view('admin.perizinan.edit-perizinan')->with([
            'perizinan' => $perizinan,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerizinanRequest $request, $id)
    {
        $data = $request->all();
        $perizinan = Perizinan::findOrFail($id);

        Perizinan::where('id', $perizinan->id)->update([
            'tgl_keluar' => $data['tgl_keluar'], 
            'jam_keluar' => $data['jam_keluar'], 
            'tgl_masuk' => $data['tgl_masuk'], 
            'jam_masuk' => $data['jam_masuk'], 
        ]);

        return redirect()->route('perizinan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perizinan = Perizinan::findOrFail($id);
        $perizinan->delete();

        return redirect()->route('perizinan.index');
    }

    /**
     * Activate the perizinan resource in storage.
     */
    public function activePerizinan(Request $request)
    {
        $data = $request->all();
        try {

            if($data > 1) {
                $item = Perizinan::where('status_perizinan', 1)->get();
                Perizinan::where('id', $item[0]->id)
                ->update([
                    'status_perizinan' => 0,
                ]);
            }


        } catch (\Throwable $th) {
            //throw $th;
        }
        // update status perizinan menjadi 1
        // $data = $request->all();
        Perizinan::where('id', $data['id'])
        ->update([
            'status_perizinan' => 1,
        ]);

        return redirect()->route('perizinan.index')->with('success', 'Status Perizinan berhasil Diaktifkan!');
    }

}
