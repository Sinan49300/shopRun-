@extends('admin.layout.admin')

@section('content')

    <h3>Modifier un produit</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::model($product,['route' => ['product.update',$product->id], 'method' => 'PUT', 'files' => true]) !!}
            <div class="form-group">
                {{ Form::label('name', 'Nom') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Déscription') }}
                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Prix') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Taille') }}
                {{ Form::select('size', [ '40' => '40', '41' => '41','42'=>'42','43' => '43', '44' => '44','45'=>'45'], null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Catégoris') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Choisir une catégorie']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Modifier', array('class' => 'btn btn-primary')) }}
            {!! Form::close() !!}


        </div>
    </div>



@endsection