<li class="media list-group-item">
<div class="mr-2">
    <form action="/cart/{{$data->id}}" method="post">
        <input type="hidden" name="hps" value="" id="">
        <input type="hidden" name="_method" value="delete" id="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </form>
</div>
<div class="media-body">
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h5 class="mt-0 mb-1 title">{{$data->name}}</h5>
        <h7 class="price">
            Rp. {{$data->price}} ({{$data->quantity}})
        </h7>
    </div>
    <p>{{$data->attributes}}</p>
</div>
</li>