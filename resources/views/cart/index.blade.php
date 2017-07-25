@extends('layout.main')

@section('content')
    <div class="row">
        <div class="cart">
        <h3 class="title-tag">Votre Panier</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Prix</th>
                <th>Qty</th>
                <th>taille</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}€</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">


                    </td>
                    <td>
                        <div > {!! Form::select('size', [ '40' => '40', '41' => '41','42'=>'42','43' => '43', '44' => '44','45'=>'45'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                           </div>

                    </td>

                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Supprimer">
                         </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    Tax: {{Cart::tax()}}€ <br>
                    SousTotal: {{Cart::subtotal()}}€ <br>
                    Total: {{Cart::total()}}€
                </td>
                <td>Articles: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.shipping')}}" class="button ok">Valider</a>
        </div>
    </div>



@endsection