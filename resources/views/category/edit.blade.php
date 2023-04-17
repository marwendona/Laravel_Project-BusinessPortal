@extends("layouts2.template")

@section('contenu')
<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    @method('PUT')
<label for="nom">Nom categorie</label>
<input type="text" name="nom" value="{{$category->nom}}" id="nom" required>
<button>Modifier</button>
</form>
@endsection

