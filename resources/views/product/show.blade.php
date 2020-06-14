@extends('product.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-xs-8 margin-tb">
        <div class="card text-white bg-primary">
            @foreach ($product as $x)
            <img class="card-img-top" src="/{{ $x->logo }}" alt="logo">
            <div class="card-body">
                <h4 class="card-title">{{ $x->product_name }}</h4>
                <p class="card-text">{{ $x->product_code }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection