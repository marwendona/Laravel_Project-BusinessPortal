@extends("layouts2.template")

@section('contenu')
@if(Session::has('success'))
<div class="alert alert-success">
    <p>{{Session::get('success')}}</p>
</div>
@endif

<table class="table table-striped table-dark">
    <thead>
        <th>Nom</th>
        <th>photo</th>
        <th>description</th>
        <th>prix</th>
        <th>categorie</th>
        <th>Action</th>
    </thead>

    <tbody>
@forelse ($products as $product)
        <tr>
            <td>{{$product->nom}}</td>
            <td><img src="{{asset('images/'.$product->photo)}}" width="100"></td>
            <td>{{$product->description}}</td>
            <td>{{$product->prix}}</td>
            <td>{{$product->category->nom}}</td>
            <td>


                <form action="{{route('product.destroy',$product->id)}}" method="post">
                @csrf
                @method('DELETE')
                 <a href="{{route('product.edit',$product->id)}}"><button class="btn btn-success" type="button">modifier</button></a>
                 <button class="btn btn-danger" onclick="return confirm('etes vous sure de supprimer?')">supprimer</button>
            </form>
            </td>
        </tr>
@empty
<tr><th colspan="6">aucun enregistrement trouvé</th></tr>
@endforelse


    </tbody>
</table>
@endsection
