@extends("layouts.template")

@section('contenu')


    @if($errors->any())

    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif

<form action="{{route('Provider.affiche')}}" method="post" enctype="multipart/form-data">

    @csrf

    <label for="Activity_id">activities</label>
    <select name="Activity_id" id="category_id" class="form-control @error('Activity_id') border-danger @enderror" required>
        
            <option value="">--- choisir une activitie ----</option>
            @foreach ($activities as $Activity)
                <option value="{{$Activity->id}}" @if($Activity->id==old('Activity_id')) selected @endif>{{$Activity->nom_activity}}</option>
            @endforeach
    </select>

    @error('Activity_id')
    <div class="text text-danger">{{$message}}</div>
    @enderror



    <label for="Region_id">regions</label>
    <select name="Region_id" id="Region_id" class="form-control @error('Region_id') border-danger @enderror" required>
    
        <option value="">--- choisir une nom_region ----</option>
        @foreach ($regions as $Region)
            <option value="{{$Region->id}}" @if($Region->id==old('Region_id')) selected @endif>{{$Region->nom_region}}</option>
        @endforeach
    </select>

    @error('Region_id')
    <div class="text text-danger">{{$message}}</div>
    @enderror

    <button>Valider</button>

</form>
@endsection
