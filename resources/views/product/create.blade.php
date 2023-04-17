@extends("layouts2.template")

@section('contenu')

@if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
@endif
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf

<label for="nom">Nom produit</label>
<input type="text" name="nom" value="{{old('nom')}}" class="form-control @error('nom') border-danger @enderror" id="nom" required>
@error('nom')
<div class="text text-danger">{{$message}}</div>
@enderror

<label for="photo">photo</label>
<input type="file" name="photo" value="{{old('photo')}}" class="form-control @error('photo') border-danger @enderror" id="photo" required>
@error('photo')
<div class="text text-danger">{{$message}}</div>
@enderror

<label for="description">Description</label>
<input type="text" name="description" value="{{old('description')}}" class="form-control @error('description') border-danger @enderror" id="description" required>
@error('description')
<div class="text text-danger">{{$message}}</div>
@enderror

<label for="prix">Prix</label>
<input type="number" name="prix" id="prix" value="{{old('prix')}}" class="form-control @error('prix') border-danger @enderror" required>
@error('prix')
<div class="text text-danger">{{$message}}</div>
@enderror

<label for="category_id">Categorie</label>
<select name="category_id" id="category_id" class="form-control @error('category_id') border-danger @enderror" required>
    <option value="">--- choisir un categorie ----</option>
@foreach ($categories as $category)
     <option value="{{$category->id}}" @if($category->id==old('category_id')) selected @endif>{{$category->nom}}</option>
@endforeach
</select>
@error('category_id')
<div class="text text-danger">{{$message}}</div>
@enderror

<button>Valider</button>
</form>
@endsection

