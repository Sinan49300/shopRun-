@extends('layout.main')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns shipping">
        <h3 class="title-tag">Information pour la livraison</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('addressline', 'Address compléte') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'Ville') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Code Postal') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Pays') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Téléphone') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Procéder au paiement', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>


</div>


@endsection