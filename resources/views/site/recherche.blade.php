@extends('layouts.template')

@section('contenu')



@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif



<section class="bg-light">
    <div class="container">
        
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                       
                        <div>
                            
<div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
    <h1>  Bienvenue </h1>

</div>
                          
                        

                                <form action="{{route('order.search')}}" method="post">

                                    @csrf
                                    <br />
                                    
                                

                                    <label for="Activity_id">Activites</label>
                                    <br />
                                    <select name="Activity_id" id="Activity_id" class="form-control @error('Activity_id') border-danger @enderror" class="form-control     btn btn-info dropdown-toggle"
                                        required>

                                        <option value="">--- choisir une activite ----</option>
                                        @foreach ($activities as $Activity)
                                            <option value="{{ $Activity->id }}" @if ($Activity->id == old('Activity_id')) selected @endif>
                                                {{ $Activity->nom_activity }}</option>
                                        @endforeach
                                    </select>

                                    @error('Activity_id')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror


                                    <br />
                                    <label for="Region_id">Regions</label>
                                    <br />
                                    <select name="Region_id" id="Region_id" class="form-control @error('Region_id') border-danger @enderror" class="form-control     btn btn-info dropdown-toggle" required>

                                        <option value="">--- choisir une region ----</option>
                                        @foreach ($regions as $Region)
                                            <option value="{{ $Region->id }}" @if ($Region->id == old('Region_id')) selected @endif>
                                                {{ $Region->nom_region }}</option>
                                        @endforeach
                                    </select>

                                    @error('Activity_id')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <br />
                                   
                                
                                    <button type="submit" class="btn btn-outline-info">Rechercher</button>
                                </form>
                     
                                <br />
                   
                                <br />
                            
                                <table class="table table-striped table-dark">
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Telephone</th>
                                        <th>Description</th>
                                    </tr>
                                    @forelse ($providers as $Provider)
                                    <tr>
                                        <td><img src="{{asset('images/'.$Provider->photo)}}" width="100"></td>
                                        <td>{{$Provider->nom_provider}}</td>
                                        <td>{{$Provider->prenom_provider}}</td>
                                        <td>{{$Provider->phone_number}}</td>
                                        <td>{{$Provider->description}}</td>
                                    </tr>
                                    @empty
                                    <tr><th colspan="5">Aucune résultat trouvé</th></tr>
                                    @endforelse
                                </table>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  



@endsection
