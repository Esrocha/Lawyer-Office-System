<h1>Proceso:</h1>

@if(session('msg'))
<p>{{ session('msg') }}</p>
@endif
@foreach($data as $lawsuit)
    <p><a href="{{ route('lawsuits.show', $lawsuit->id)}}">{{$lawsuit->number}}</a></p>

@endforeach
