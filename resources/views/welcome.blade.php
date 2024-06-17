@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


    <div class="col-md-12" id="search-container">
        <h1>Busque um evento</h1>
        <form class="d-flex" action="/" method="get" role="search">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif


        <div id="cards-container" class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/events/{{ $event->image }}" class="card-img-top" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">{{ count($event->users) }}
                                {{ count($event->users) > 1 ? 'Participantes' : 'Participante' }}</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos!</a></p>
            @elseif(count($events) == 0)
                <p>Não há eventos disponíves</p>
            @endif
        </div>
    </div>



@endsection
