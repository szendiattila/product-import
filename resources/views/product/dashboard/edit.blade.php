@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new product</div>
                    <div class="panel-body">
                        {{ Form::model($product,['url' => ['home/products', $product], 'method' => 'patch']) }}

                        @include('product.dashboard.partials._form', ['submitButton' => 'Módosítás'])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection