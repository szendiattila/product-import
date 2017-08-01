@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                        <div class="form-group"><a class="btn btn-primary" href="{{ url('home/products/create')
                        }}">Add new
                                product</a></div>
                        @if($products->count())
                            <ul class="list-group">
                                @foreach($products as $product)
                                    <li class="list-group-item">{{ $product->name }} - {{ $product->price }}
                                        <div class="pull-right">
                                            <a class="btn btn-primary btn-xs" href="{{ url("home/products/$product->id/edit") }}">Modify</a>

                                            {!! Form::open(['method' => 'DELETE', 'url' => ['home/products', $product->id]]) !!}
                                                <button type="submit" class='btn btn-danger btn-xs'>Delete</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection