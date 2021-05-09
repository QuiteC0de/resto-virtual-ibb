<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pemesanan;
use Session;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Menu::all();
        return view('pesanan.create', ['pesan'=>$pesan]);
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
        // validation
        $validator = Validator::make($request->all(), [
            'jenis' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            $validator->errors()->add('jenis', 'pilih jenis pesanan');
            return redirect('/cart')
                        ->withErrors($validator);
        }

        // get item from cart
        $userId = auth()->user()->id; 
        $item = \Cart::session($userId)->getContent();
        $totalbrg = \Cart::session($userId)->getTotalQuantity();
        $totalbyr = \Cart::session($userId)->getTotal();
        
        // Defining required data
        $kode1 = str_random(6);
        $kode =strtoupper($kode1);
        Session::put('kode', $kode);
        $jenis = request('jenis');
        
        // Create data
        foreach ($item as $item) {
            $id_menu    = $item->id;
            $harga      = $item->price;
            $jumlah     = $item->quantity;
            $ket        = $item->attributes;
            $total      = $jumlah * $harga;

            $data = new Pemesanan;
            $data->kd_pesanan   =$kode;
            $data->id_pelanggan = $userId;
            $data->id_menu      = $id_menu;
            $data->jml_menu     = $jumlah;
            $data->tgl_pesan    = date('Y-m-d');
            $data->ket          = $ket;
            $data->jenis_pesan  = $jenis;
            $data->harga_satuan = $harga;
            $data->total_bayar  = $total;
            $data->save(); 
        }   
            // Clear the cart item
            $items = \Cart::session($userId)->getContent();
            $kd_pesan = Session::get('kode');
            $user = auth()->user()->name;
            $clear = \Cart::session($userId)->clear();
            return view('pesanan.pesanansaya',['items'=>$items])->with('kd_pesan', $kd_pesan)->with('totalbrg', $totalbrg)->with('totalbyr', $totalbyr)->with('user',$user);  
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
