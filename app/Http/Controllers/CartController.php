<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id; 
        $item = \Cart::session($userId)->getContent();
        $jumlah = $item->count();
        $totalbrg = \Cart::session($userId)->getTotalQuantity();
        $totalbyr = \Cart::session($userId)->getTotal();
        return view('keranjang', ['item'=>$item])->with('totalbyr',$totalbyr)->with('totalbrg',$totalbrg)->with('jumlah',$jumlah);
    }
    
    public function store(Request $request)
    {
        // validate
        $validator = Validator::make($request->all(), [
            'jumlah' => ['required', 'int', 'min:1'],
        ]);

        if ($validator->fails()) {
            $validator->errors()->add('jumlah', 'masukan jumlah dengan benar (min 1)');
            return redirect('/pesan#menu')
                        ->withErrors($validator)
                        ->withInput();
        }

        // insert into cart
        $userId = auth()->user()->id; 
        $id = request('id');
        $nama = request('nama');
        $harga = request('harga');
        $jml = request('jumlah');
        $ket = request ('keterangan');
        $item = \Cart::session($userId)->add($id, $nama, $harga, $jml, $ket );
        return redirect('pesan#menu')->with('add', "success");
    }
    
	public function show($id)
    {
        $data = Menu::find($id);
        return view('pesanan.show')->with('data',$data);
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
        $userId = auth()->user()->id; 
		\Cart::session($userId)->remove($id);
		return redirect('cart');
    }
}
