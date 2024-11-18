<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\Models\User;
use App\Models\Mahasantri;

use Illuminate\Support\Facades\Hash;

use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();

        $users = User::sortable()->paginate(20)->onEachSide(1)->fragment('mahasantri');

        return view('admin.manage-user.data-user')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['Administrator', 'Security', 'Mahasantri'];
        
        return view('admin.manage-user.add-user')->with([
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        // dd($data);
        // exit();

        $photoName = $data['username'] . '-' . time(). '.' . $data['photo']->extension();
        $data['photo']->move(public_path('img/profile'), $photoName);

        if ($data['role'] != "Mahasantri") {
            User::create([
                'nama' => $data['nama'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],
                'photo' => $photoName,
            ]);
        } else {
            Mahasantri::create([
                'nama' => $data['nama'], 
                'email' => $data['email'], 
                'password' => $data['password'], 
                'kelas' => $data['kelas'], 
                'angkatan' => $data['angkatan'], 
                'kamar' => $data['kamar'], 
                'photo' => $photoName,
            ]);

            User::create([
                'nama' => $data['nama'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],
                'photo' => $photoName,
            ]);
        }

        return redirect()->route('manage-user.index')->with('success', 'Data Management User Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $mahasantri = Mahasantri::where('email', $user->email)->first();

        return view('admin.manage-user.detail-user')->with([
            'user' => $user,
            'mahasantri' => $mahasantri
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
        $user = User::findOrFail($id);
        if ($user->role == 'Mahasantri') {
            $mahasantri = Mahasantri::where('email', $user->email)->first();
            if ($mahasantri->kamar == 1) {
                $kmhs = "Satu (1)";
                $kamars = [
                            ['val' => 2, 'ket' => "Dua (2)"], ['val' => 3, 'ket' => "Tiga (3)"], ['val' => 4, 'ket' => "Empat (4)"], 
                            ['val' => 5, 'ket' => "Lima (5)"], ['val' => 6, 'ket' => "Enam (6)"]
                        ];
            } elseif ($mahasantri->kamar == 2) {
                $kmhs = "Dua (2)";
                $kamars = [
                            ['val' => 1, 'ket' => "Satu (1)"], ['val' => 3, 'ket' => "Tiga (3)"], ['val' => 4, 'ket' => "Empat (4)"], 
                            ['val' => 5, 'ket' => "Lima (5)"], ['val' => 6, 'ket' => "Enam (6)"]
                        ];
            } elseif ($mahasantri->kamar == 3) {
                $kmhs = "Tiga (3)";
                $kamars = [
                            ['val' => 1, 'ket' => "Satu (1)"], ['val' => 2, 'ket' => "Dua (2)"], ['val' => 4, 'ket' => "Empat (4)"], 
                            ['val' => 5, 'ket' => "Lima (5)"], ['val' => 6, 'ket' => "Enam (6)"]
                        ];
            } elseif ($mahasantri->kamar == 4) {
                $kmhs = "Empat (4)";
                $kamars = [
                            ['val' => 1, 'ket' => "Satu (1)"], ['val' => 2, 'ket' => "Dua (2)"], ['val' => 3, 'ket' => "Tiga (3)"], 
                            ['val' => 5, 'ket' => "Lima (5)"], ['val' => 6, 'ket' => "Enam (6)"]
                        ];
            } elseif ($mahasantri->kamar == 5) {
                $kmhs = "Lima (5)";
                $kamars = [
                            ['val' => 1, 'ket' => "Satu (1)"], ['val' => 2, 'ket' => "Dua (2)"], ['val' => 3, 'ket' => "Tiga (3)"], 
                            ['val' => 4, 'ket' => "Empat (4)"], ['val' => 6, 'ket' => "Enam (6)"]
                        ];
            } elseif ($mahasantri->kamar == 6) {
                $kmhs = "Enam (6)";
                $kamars = [
                            ['val' => 1, 'ket' => "Satu (1)"], ['val' => 2, 'ket' => "Dua (2)"], ['val' => 3, 'ket' => "Tiga (3)"], 
                            ['val' => 4, 'ket' => "Empat (4)"], ['val' => 5, 'ket' => "Lima (5)"]
                        ];
            } else {
                $kamars = [
                            ['val' => 1, 'ket' => "Satu (1)"], ['val' => 2, 'ket' => "Dua (2)"], ['val' => 3, 'ket' => "Tiga (3)"], 
                            ['val' => 4, 'ket' => "Empat (4)"], ['val' => 5, 'ket' => "Lima (5)"], ['val' => 6, 'ket' => "Enam (6)"]
                        ];
            }
        }
        $roles = ['Administrator', 'Security', 'Mahasantri'];

        if ($user->role == 'Mahasantri') {
            return view('admin.manage-user.edit-user')->with([
                'user' => $user,
                'mahasantri' => $mahasantri,
                'roles' => $roles,
                'kmhs' => $kmhs,
                'kamars' => $kamars
            ]);
        } else {
            return view('admin.manage-user.edit-user')->with([
                'user' => $user,
                'roles' => $roles
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        // dd($data);
        // exit();

        $user = User::findOrFail($id);
        $mahasantri = Mahasantri::where('email', $user->email)->first();

        if($request->photo == ""){
            $photoName = $user->photo;
        }else{
            $photoName = $data['username'] . '-' . time(). '.' . $data['photo']->extension();
            $data['photo']->move(public_path('img/profile'), $photoName);
            if($user->photo == NULL){

            }else{
                unlink(public_path('img')."/profile/".$user->photo);
            }
        }

        if($request->password == ""){
            $password = $user->password;
            $passwordmhs = $mahasantri->password;
        }else{
            $password = Hash::make($data['password']);
            $passwordmhs = $data['password'];
        }
        
        if ($user->role != "Mahasantri") {
            User::where('id', $user->id)
            ->update([
              'nama' => $data['nama'],
              'username' => $data['username'],
              'email' => $data['email'],
              'password' => $password,
              'role' => $data['role'],
              'photo' => $photoName,
            ]);
        } else {
            User::where('id', $user->id)
            ->update([
              'nama' => $data['nama'],
              'username' => $data['username'],
              'email' => $data['email'],
              'password' => $password,
              'role' => $data['role'],
              'photo' => $photoName,
            ]);

            Mahasantri::where('id', $mahasantri->id)
            ->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'password' => $passwordmhs,
                'angkatan' => $data['angkatan'], 
                'kelas' => $data['kelas'], 
                'kamar' => $data['kamar'], 
                'photo' => $photoName,
            ]);
        }
        


        return redirect()->route('manage-user.index')->with('success', 'Data Management User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->role != "Mahasantri") {
            if(!empty($user->photo)) unlink(public_path('img')."/profile/".$user->photo);
            $user->delete();
        } else {
            if(!empty($user->photo)) unlink(public_path('img')."/profile/".$user->photo);
            $user->delete();

            $mahasantri = Mahasantri::where('email', $user->email)->first();
            Mahasantri::where('id', $mahasantri['id'])->delete();
        }
        
        return redirect()->route('manage-user.index')->with('success', 'Data Management User Berhasil Dihapus!');
    }

    /**
     * Export list user to PDF of the resource User.
     */
    public function exportPDF()
    {
        $users = User::all();
        $data = [
            'users' => $users
        ];

        $pdf = PDF::loadView('admin.manage-user.pdf-user', $data);
        return $pdf->download('Data-Account-Users-Perizinan-Mahasantri.pdf');
    }
}


