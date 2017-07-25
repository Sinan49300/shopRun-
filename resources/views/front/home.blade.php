@extends('layout.main')

@section('content')
    <section class="hero text-center">
        <div class="text-main">
        <h2>Bienvenue chez ShopRun!</h2> 
        <h2>la boutique e-commerce de <a href="https://www.sinan-aktas.fr/Run!/" target="_blank">Run!</a></h2>
        <a href="{{url('/shoes')}}">
            <button class="button large">Consulter nos articles</button>
        </a>
        </div>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2 class="subtitle-tag">
            Nos nouveaux articles
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse($shoes->chunk(4) as $chunk)
            @foreach($chunk as $shirt)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
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
                        {{$shirt->category->name}}
                    </p>
                </div>
            </div>
            @endforeach
        @empty
            <h3>Pas d'articles</h3>
        @endforelse
    </div>

    <!-- Footer -->
    <br>
@endsection