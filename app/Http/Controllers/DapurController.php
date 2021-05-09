<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\Menu;
use DB;
use Carbon\Carbon;

class DapurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tgl = Carbon::now()->format('Y-m-d');
        //$psn = Pemesanan::where('tgl_pesan', $tgl)->orderBy('tgl_pesan', 'ASC')->get();
        $menu = DB::table('pemesanan')
            ->where('tgl_pesan', $tgl)
            ->join('menu', 'pemesanan.id_menu', '=', 'menu.id_menu')
            ->orderBy('id_pesanan', 'ASC')
            ->where('stat', 'mengantri')
            ->get();
        return view('dapur.index', ['menu'=>$menu]);
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
        $data = Pemesanan::find($id);
        $data->stat = "dikerjakan";
        $data->save();
        return redirect('dapur');
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
