@extends("layouts2.template")

@section('contenu')
<table class="table table-striped table-dark">
    <thead>
        <th>Nom</th>
        <th>Action</th>
    </thead>

    <tbody>
@forelse ($categories as $category)
        <tr>
            <td>{{$category->nom}}</td>
            <td>


                <form action="{{route('category.destroy',$category->id)}}" method="post">
                @csrf
                @method('DELETE')
                 <a href="{{route('category.edit',$category->id)}}"><button class="btn btn-success" type="button">modifier</button></a>
                 <button class="btn btn-danger" onclick="return confirm('etes vous sure de supprimer?')">supprimer</button>
            </form>
            </td>
        </tr>
@empty
<tr><th colspan="2">aucun enregistrement trouvé</th></tr>
@endforelse


    </tbody>
</table>
@endsection
