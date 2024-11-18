<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mahasantri;
use App\Models\DetailPerizinan;

use PDF;
use Auth;

class SecurityController extends Controller
{
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function security(Request $request)
    {
        $security = Auth::user();
        $infomahasantris = DetailPerizinan::with(['mahasantri'])->get();

        return view('security.first-security')->with([
            'security' => $security,
            'infomahasantris' => $infomahasantris,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function keterangan()
    // {
    //     return view('daftar.register-pmb')->with([
           
    //     ]);
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function done()
    // {
    //     return view('daftar.done-pmb');
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function succes()
    // {
    //     return view('daftar.succes-pmb');
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function notfound()
    // {
    //     return view('daftar.notfound-pmb');
    // }

}
