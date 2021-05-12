<div class="col-sm-6 col-12 mb-2">
    <div class="card">
    <div class="card-header d-flex justify-content-between">
        <b>{{$data->kd_pesanan}}</b>
        {{$data->jenis_pesan}}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$data->nama_menu}}({{$data->jml_menu}})</h5>
        @if($data->ket!="[]")
        <div class="accordion mb-1" id="accordionExample">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$data->id_pesanan}}" aria-expanded="false" aria-controls="collapseOne">
                        deskripsi
                    </button>
                </h5>

                <div id="collapseOne{{$data->id_pesanan}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    {{$data->ket}}
                </div>
        </div>
        @endif	
        <form action="/dapur/{{$data->id_pesanan}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="kd" value="{{$data->kd_pesanan}}">
            <button class="btn btn-outline-danger" type="submit">Done</button>	
        </form>	
    </div>
    </div>
</div>