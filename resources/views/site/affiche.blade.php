@extends("layouts.template")

@section('contenu')
   
@if(Session::has('success'))
<div class="alert alert-success">
    <p>{{Session::get('success')}}</p>
</div>
@endif

<table class="table table-striped table-dark">
<thead>
    <th>photo</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>telephone</th>
    <th>description</th>
    <th>Action</th>
</thead>

<tbody>
@forelse ($providers as $Provider)
    <tr>
        

  

        <td><img src="{{asset('images/'.$Provider->photo)}}" width="100"></td>
        <td>{{$Provider->nom_provider}}</td>
        <td>{{$Provider->prenom_provider}}</td>
        <td>{{$Provider->phone_number}}</td>
        <td>{{$Provider->description}}</td>
        
        <td>
          voire
        </td>
    </tr>
@empty
<tr><th colspan="5">aucun enregistrement trouvé</th></tr>
@endforelse


</tbody>
</table>
@endsection