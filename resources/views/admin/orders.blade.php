@extends('admin.layout.admin')
@section('content')
    <h3>Commandes</h3>
    <hr>
    <div class="order-main">
    <ul>
        @foreach($orders as $order)
            <li>
                <h4>Commande de :{{$order->user->name}} <br> Total : {{$order->total}}€</h4>

                <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                    {{csrf_field()}}
                    <label for="delivered">Envoyer</label>
                    <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
                    <input type="submit" value="valider">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Articles</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Nom</th>
                        <th>qty</th>
                        <th>taille</th>
                        <th>prix</th>
                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->size}}</td>
                            <td>{{$item->pivot->total}}€</td>
                        </tr>

                    @endforeach
                </table>
            </li>

        @endforeach

    </ul>
</div>
@endsection

