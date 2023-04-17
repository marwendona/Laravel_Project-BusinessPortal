@extends("layouts2.template")

@section('contenu')
<form action="{{route('product.update',$product->id)}}" method="post">
    @csrf
@method('PUT')
<label for="nom">Nom produit</label>
<input type="text" name="nom" value="{{$product->nom}}" class="form-control" id="nom" required>

<label for="photo">photo</label>
<input type="text" name="photo"  value="{{$product->photo}}" class="form-control" id="photo" required>

<label for="description">Description</label>
<input type="text" name="description" value="{{$product->description}}" class="form-control" id="description" required>

<label for="prix">Prix</label>
<input type="text" name="prix" id="prix" value="{{$product->prix}}" class="form-control" required>

<label for="category_id">Categorie</label>
<select name="category_id" id="category_id" class="form-control" required>
@foreach ($categories as $category)
     <option value="{{$category->id}}" @if($category->id==$product->category_id) selected @endif>{{$category->nom}}</option>
@endforeach
</select>

<button>Valider</button>
</form>
@endsection

