@extends("layouts.template")

@section('contenu')
   <form method="post" action="{{route('order.save')}}">
        <!-- commm-->
    @csrf
        <label for="sujet">sujet</label>
        <input type="text" name="sujet" id="sujet" required>

        <label for="message">message</label>
        <textarea name="message" id="message" required></textarea>
        
        <button>Envoyer</button>
    
    </form>
@endsection
