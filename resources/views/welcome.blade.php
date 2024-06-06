@extends('layouts.app')

@section('title', 'HDC Events')

@section('content')


    <div class="col-md-12" id="search-container">
        <h1>Busque um evento</h1>
        <form action="" method="post">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card">
                        <img src="/img/events/{{ $event->image }}" class="card-img-top" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">04/06/2024</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">X Participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
