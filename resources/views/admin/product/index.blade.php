@extends('admin.layout.admin')

@section('content')

    <h3>Produits</h3>

<ul class="container">
    @forelse($products as $product)
    <li class="row">


       <div class="col-md-8">
           <div class="main-product col-md-12">
        <img src="{{url('images',$product->image)}}"/>
        <h4>Nom du produit:{{$product->name}}</h4>
        <h4>Catégorie:{{count($product->category)?$product->category->name:"N/A"}}</h4>

      <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ">Modifier le produit</a>

        <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Supprimer">
         </form>
         </div>

         <div class="col-md-4">
            
            <form action="/admin/product/image-upload/{{$product->id}}" method="POST" class="dropzone" id="my-awesome-dropzone-{{$product->id}}">
              {{csrf_field()}}

             </form>

        </div>

    </li>

        @empty

        <h3>No products</h3>

    @endforelse
</ul>


@endsection