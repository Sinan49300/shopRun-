@extends('layout.main')

@section('title','shoes')

@section('content')

 <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
        @forelse($shirts as $shirt)
            <div class="small-5 small-offset-1 columns main-column">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns main-column">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="main-title-tag">{{$shirt->name}}</span>
                    </h3>
                    <h3 class="subheader">
                       <span class="price-tag">Prix: {{$shirt->price}}€</span>
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Choisir la taille
                                <select>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    
                                   
                                </select>
                            </label>
                            <a href="{{route('cart.addItem',$shirt->id)}}" class="button cart  expanded">Ajouter au panier</a>
                        </div>

            <div class="medium-12 columns">
                <div class="item-wrapper">
                <h2>Category</h2>
                    <h3 class="subheader">
                       <span>{{$shirt->category->name}}</span>
                    </h3>
                  
                        </div>
                    </div>
                
            <div class="medium-12 columns">
                <div class="item-wrapper">
                <h2>Description</h2>
                    <h3 class="subheader">
                       <span>{{$shirt->description}}</span>
                    </h3>
                  
                        </div>
                    </div>
                
                    </div>
                </div>
            </div>
        </div>
        @empty 
        <h4>Pas d'articles</h4>
        @endforelse
    </div>

@endsection