<div class="col-md-3">
<div class="card border-success mb-3" style="max-width: 18rem;">
    <a href="/kasir/{{$data->kd_pesanan}}">
        <div class="card-header d-flex justify-content-between align-items-center border-success">
            <h5>{{$data->kd_pesanan}}</h5> 
            {{$data->jenis_pesan}}
        </div>
        <div class="card-body text-success">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">
                Total <span class="badge badge-success badge-pill">Rp. {{$data->total}}</span>
            </p>
        </div>
        <div class="card-footer bg-transparent border-success text-center">{{$data->tgl_pesan}}</div>
    </a>
</div>
</div>