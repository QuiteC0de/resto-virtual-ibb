<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //harian
        $now = Carbon::now()->format('Y-m-d');
        $untung = DB::table('pemesanan')
                    ->join('menu', 'pemesanan.id_menu', '=', 'menu.id_menu')
                    ->select('nama_menu', DB::raw("SUM(jml_menu) as jml"))
                    ->where('stat', 'dibayar')
                    ->where('tgl_pesan', $now)
                    ->groupBy('nama_menu')
                    ->get();
        $rp = Pemesanan::where('stat', 'dibayar')
                    ->where('tgl_pesan', $now)
                    ->sum('total_bayar');

        //bulanan
        $year = Carbon::now()->format('Y');
        
        $chart  = DB::table('pemesanan')
                    ->select(
                        DB::raw('MONTH(tgl_pesan) AS bulan'), 
                        DB::raw("SUM(total_bayar) AS jumlah")
                    )
                    ->where('stat', 'dibayar')
                    ->whereYear('tgl_pesan', $year)
                    ->groupBy('bulan')
                    ->get();
                    
        return view('statistik.chart',compact('rp'))->with(['untung'=> $untung])->with(['chart'=>$chart]);
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
        //
    }
}
