@extends('product.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel products</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('product.create') }}" class="btn btn-primary">create new product</a>
            </div>
            
            @if ($msg = Session::get('success'))
                <div class="alert alert-success m-5">{{ $msg }}</div>
            @endif

            <div class="mt-5"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Details</th>
                        <th>Product logo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        {{-- $x is a json array. --}}
                        @foreach ($x as $item) 
                        <tr>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->product_code }}</td>
                            <td>{{ $item->details }}</td>
                            <td>
                                <img src="{{ $item->logo }}" width="50px" height="50px" alt="product img">
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('product.edit',['id'=>$item->id]) }}">edit</a>
                                <a class="btn btn-warning" href="products/{{ $item->id }}">delete</a>
                            </td>
                        </tr>
                        @endforeach 
                </tbody>
            </table>

        </div>
    </div>
@endsection