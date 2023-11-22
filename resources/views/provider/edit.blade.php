@extends('layouts.app')

@section('content')


<section class="bg-light">
    <div class="container">
        
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                       
                        <div>



    
@if($errors->any())

<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>

@endif

<div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
    <h1>Modifier</h1>

</div>

<br />

<form action="{{route('Provider.update', $provider->id)}}" method="post" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <br />     <br />
    <label for="nom_provider">Nom</label> <br />     
    <input type="text" name="nom_provider" id="nom_provider" value="{{$provider->nom_provider}}" class="form-control @error('nom_provider') border-danger @enderror" required>
    <br />    
    @error('nom_provider')
    <div class="text text-danger">{{$message}}</div>
    @enderror

    <label for="prenom_provider">Prenom</label><br />    
    <input type="text" name="prenom_provider" id="prenom_provider" value="{{$provider->prenom_provider}}" class="form-control @error('prenom_provider') border-danger @enderror" required>
    <br />    
    @error('prenom_provider')
    <div class="text text-danger">{{$message}}</div>
    @enderror

    <label for="description">Description</label><br />    
    <input type="text" name="description" value="{{$provider->description}}" class="form-control @error('description') border-danger @enderror" id="description" required>
    <br />    
    @error('description')
    <div class="text text-danger">{{$message}}</div>
    @enderror


    <label for="photo">Photo</label><br />    
    <input type="file" name="photo" value="{{old('photo')}}" class="form-control @error('photo') border-danger @enderror" id="photo" required>
    <br />    
    @error('photo')
    <div class="text text-danger">{{$message}}</div>
    @enderror



    <label for="phone_number">Numero telephone</label><br />    
    <input type="number" name="phone_number" id="phone_number" value="{{$provider->phone_number}}" class="form-control @error('phone_number') border-danger @enderror" required>
    <br />    
    @error('phone_number')
    <div class="text text-danger">{{$message}}</div>
    @enderror



    <label for="Region_id">Region</label><br />    
    <select name="Region_id" id="Region_id" class="form-control @error('Region_id') border-danger @enderror" required>
        
            <option value="">--- choisir une region ----</option>
            @foreach ($Regions as $Region)
                <option value="{{$Region->id}}" @if($Region->id==$provider->Region_id) selected @endif>{{$Region->nom_region}}</option>
            @endforeach
    </select><br />    

    @error('Region_id')
    <div class="text text-danger">{{$message}}</div>
    @enderror


    <label for="Activity_id">Activite</label><br />    
    <select name="Activity_id" id="Region_id" class="form-control @error('Activity_id') border-danger @enderror" required>
        
            <option value="">--- choisir une activite ----</option>
            @foreach ($Activitys as $Activity)
                <option value="{{$Activity->id}}" @if($Activity->id==$provider->Activity_id) selected @endif>{{$Activity->nom_activity}}</option>
            @endforeach
    </select><br />    

    @error('Activity_id')
    <div class="text text-danger">{{$message}}</div>
    @enderror





    
    <label for="User_id">Adresse mail</label><br />    
    <select name="User_id" id="User_id" class="form-control @error('User_id') border-danger @enderror" disabled>
        
            <option value="{{ Auth::user()->id  }}">{{ Auth::user()->email }}</option>
          
    </select><br />    <br />    

    <button type="submit" class="btn btn-outline-info">Valider</button>

</form>


</div>
</div>
</div>
</div>
</div>
</div>
</section>




@endsection






