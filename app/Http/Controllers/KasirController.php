<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use DB;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tgl = date('Y-m-d');
        //$psn = Pemesanan::where('tgl_pesan', $tgl)->orderBy('tgl_pesan', 'ASC')->get();
        $data = DB::Table('pemesanan')
            ->where('stat', 'dikerjakan')
            // ->join('menu', 'pemesanan.id_menu', '=', 'menu.id_menu')
            ->join('users', 'pemesanan.id_pelanggan', '=', 'users.id')
            ->select('name', 'kd_pesanan', 'jenis_pesan', 'tgl_pesan', DB::raw('sum(total_bayar) as total'))
            ->orderBy('tgl_pesan', 'ASC')
            ->groupBy('kd_pesanan')
            ->get();
        return view('kasir.index', ['data'=>$data]);
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
        $tgl = date('Y-m-d');
        $kode = request('kd_pesanan');
        $pembeli = Pemesanan::where('kd_pesanan', $kode)
            ->join('users', 'pemesanan.id_pelanggan', '=', 'users.id')
            ->where('stat', 'dikerjakan')
            ->first();

        $bayar = Pemesanan::query()
            ->where('kd_pesanan', $kode)
            ->where('stat', 'dikerjakan')
            ->sum('total_bayar');

        $data = Pemesanan::query()
            ->where('kd_pesanan', $kode)
            ->join('menu', 'pemesanan.id_menu', '=', 'menu.id_menu')
            ->join('users', 'pemesanan.id_pelanggan', '=', 'users.id')
            ->orderBy('tgl_pesan', 'ASC')
            ->where('stat', 'dikerjakan')
            ->get();

        if (count($data)>0) {
            return view('kasir.bayar', ['data'=>$data])->with('bayar', $bayar)->with('pembeli', $pembeli);
        }else{
            return redirect('kasir')->with('pesan', "Tidak Ada Pesanan Dengan Kode tersebut");
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tgl = date('Y-m-d');
        $kode = $id;
        $pembeli = Pemesanan::query()
            ->where('kd_pesanan',$kode)
            ->join('users', 'pemesanan.id_pelanggan', '=', 'users.id')
            ->where('stat', 'dikerjakan')
            ->first();

        $bayar = Pemesanan::query()
            ->where('kd_pesanan', $kode)
            ->where('stat', 'dikerjakan')
            ->sum('total_bayar');

        $data = Pemesanan::query()
            ->where('kd_pesanan', $kode)
            ->where('stat', 'dikerjakan')
            ->join('menu', 'pemesanan.id_menu', '=', 'menu.id_menu')
            ->join('users', 'pemesanan.id_pelanggan', '=', 'users.id')
            ->orderBy('tgl_pesan', 'ASC')
            ->get();

        if (count($data)>0) {
            return view('kasir.bayar', ['data'=>$data])->with('bayar', $bayar)->with('pembeli', $pembeli);
        }else{
            return redirect('kasir')->with('pesan', "Tidak Ada Pesanan Dengan Kode tersebut");
        }
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

    public function bayar(Request $request)
    {
        $kode = request('kd_pesanan');
        $upd = Pemesanan::where('kd_pesanan', $kode)->update(['stat' => 'dibayar']);
        
        // hitung kembalian
        $byr = request('bayar');
        $hrg = request('harga');
        $kembali = $byr - $hrg;
        if ($kembali>0) {
            $pesan = "Kembalian Rp.".$kembali;
        }elseif($kembali<0){
            $pesan = "Pesanan Di Bayar";
        }else{
            $pesan = "Uang Pas, tidak Ada Kembalian";
        }

        return redirect('kasir')->with('pesan', $pesan);
    }
}
