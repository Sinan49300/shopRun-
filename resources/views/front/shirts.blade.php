@extends('layout.main')

@section('title','Shoes')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shirts as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper shoes">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Ajouter au panier
                        </a>
                        <a href="{{route('shoe',$shirt->id)}}">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shoe',$shirt->id)}}">
                        <h3 class="title-tag">
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        {{$shirt->price}}€

                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>

        @empty
        <h3>Pas d'articles</h3>
       @endforelse
    </div>
@endsection