<div class="col-md-6 all {{$data->jenis}}">								
    <div class="single-menu">
        <div class="row">
            <div class="col-12 col-md-3 py-2 text-center">
                <img class="rounded-circle" width="75px" height="75px" src="{{asset('/img/'.$data->jenis.'/'.$data->gambar)}}" alt="Menu image">
            </div>
            <div class="col-12 col-md-6 py-2">
                <div class="title-wrap d-flex justify-content-between">
                    <h6>{{$data->nama_menu}}</h6>
                    <h7 class="price">Rp.{{$data->harga}}</h7>
                </div>
                <div class="title-wrap d-flex justify-content-between">	
                    <a class="link-primary" data-toggle="collapse" href="#collapseExample{{$data->id_menu}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                        detail
                    </a>
                </div>	
                <div class="collapse col-md-12" id="collapseExample{{$data->id_menu}}">
                    <p>{{$data->keterangan}}</p>
                </div>		
            </div>
            @if(Auth::user()->role == 'user')
            <div class="col-md-2 text-center">
                <button data-toggle="modal" data-target="#exampleModal{{$data->id_menu}}" class="genric-btn primary circle arrow">Pesan</button>
            </div>
                @include('component.menu-modals-create')
            @endif
        </div>
    </div>					                               
</div> 

