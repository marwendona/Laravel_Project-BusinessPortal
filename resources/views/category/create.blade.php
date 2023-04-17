@extends("layouts2.template")

@section('contenu')
<form action="{{route('category.store')}}" method="post">
    @csrf
<label for="nom">Nom categorie</label>
<input type="text" name="nom" id="nom" required>
<button>Valider</button>
</form>
@endsection

