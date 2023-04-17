@php
$sujet=$contact['sujet'];
$message=$contact['message'];
$tab=[];
@endphp
le sujet est {{$sujet}}
<br>
le sujet est {{$message}}


@forelse($tab as $ind=>$val)
    <p><b>{{$ind}}</b> : {{$val}}</p>
    @empty
    aucune donnée!
@endforelse
