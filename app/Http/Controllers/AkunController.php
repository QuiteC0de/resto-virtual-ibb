<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
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
    public function edit($id)
    {
        $user = User::find($id);

        return view('akun.ubah')
            ->with('user', $user);
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
        if ($request->name) {
            $this->validate($request,[
                'name' => 'required|string',
                'email' => 'required|string',
            ]);


            $user = User::find($id);
            $user->name = request('name');
            $user->email = request('email');
            $user->save();
            return redirect('pesan')->with('pesan', "Profil Berhasil Diubah");
        }else{
            $this->validate($request,[
                'oldpass' => 'required|string',
                'newpass' => 'required|string|min:6',
            ]);

            $user = User::find($id);
            $oldpass = request('oldpass');
            $newpass = request('newpass');
            if (Hash::check($oldpass, $user->password)) {
                $user->password = Hash::make($newpass);
                $user->save();
                return redirect('pesan')->with('pesan', "berhasil");
            }else{
                return redirect('pesan')->with('pesan', "gagal");
            }
            
        }
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
