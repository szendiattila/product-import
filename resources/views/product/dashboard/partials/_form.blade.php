<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name...', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Price...', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control tinymce-control', 'placeholder' => 'Description...']) }}
</div>

<div class="form-group">
    {{ Form::submit($submitButton, ['class' => 'form-control btn btn-primary']) }}
    <a class="btn btn-danger form-control" href="{{ url('home/products') }}">Cancel</a>
</div>

{{ Form::close() }}

@include('dashboard.partials._form_errors')