<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DetailPerizinanRequest;

use App\Models\DetailPerizinan;
use App\Models\Mahasantri;
use Auth;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasantris = Mahasantri::all();
        $admin = Auth::user();
        return view('admin.approval.data-approval')->with([
            'mahasantris' => $mahasantris,
        ]);
    }

    /**
     * Approve Mahasantri account resource in storage.
     */
    public function approveAcc($id)
    {
        $approve = Mahasantri::findOrFail($id);
        $approve->status_akun = 1;
        $approve->save();

        return back()->with('success', 'Hak izin mahasantri berhasil di approve');
    }

    /**
     * Non approve Mahasantri account resource in storage.
     */
    public function nonApproveAcc($id)
    {
        $approve = Mahasantri::findOrFail($id);
        $approve->status_akun = 0;
        $approve->save();

        return back()->with('success', 'Hak izin mahasantri berhasil di no approve');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
