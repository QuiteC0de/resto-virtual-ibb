<!-- Modal -->
<form action="/cart" method="post">	
    <div class="modal fade" id="exampleModal{{$data->id_menu}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row ">
                    <div class="col-md-12 py-3 text-center">
                        <img class="rounded " src="{{asset('/img/'.$data->jenis.'/'.$data->gambar)}}" alt="Menu image" height="300" width="300"><br>
                    </div>
                    <div class="col-md-12 px-4">
                        @csrf
                        <div class="col-md-12">
                            <h4>{{$data->nama_menu}}</h4>
                        </div>
                        <div class="col-md-12">
                            <h4 class="price">Rp.{{$data->harga}}</h4>
                        </div>
                        <div class="col-md-12 px-py-2">
                            <p>{{$data->keterangan}}</p>
                        </div>
                        <div class="mt-10">
                            <input type="number" min="1" max="20" name="jumlah" placeholder="Jumlah" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required class="form-control">
                        </div>

                        <div class="mt-10">
                            <textarea class="form-control" name="keterangan" placeholder="deskripsikan pesanan anda atau biarkan kosong" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" ></textarea>
                        </div>
                        
                        <input type="hidden" name="id" value="{{$data->id_menu}}" id=""><br>
                        <input type="hidden" name="nama" value="{{$data->nama_menu}}" id=""><br>
                        <input type="hidden" name="harga" value="{{$data->harga}}" id=""><br>
                    
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-around">
                <div class="mt-10">
                    <button type="button" class="genric-btn primary circle" data-dismiss="modal"><span class="lnr lnr-arrow-left"></span>Kembali</button>
                </div>
                <div class="mt-10">
                    <button class="genric-btn primary circle" type="submit">Tambah Ke keranjang<span class="lnr lnr-arrow-right"></span></button>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>	