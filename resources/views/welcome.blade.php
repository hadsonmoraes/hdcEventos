@extends('layouts.main')

@section('title', 'HDC Events')
    
@section('content')

<h1>Hello World</h1>
    <img src="img/banner.jpg" alt="Banner">
    @if(10 > 15)
    <p>A condição é true</p>
    @endif

    <p> {{$nome}} </p>

    @if($nome == "Pedro")
    <p>O nome é Pedro</p>
    @elseif($nome == "Hadson")
    <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos</p>
    @else
    <p>O nome não é Pedro</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
    <p> {{$arr[$i]}} - {{$i}} </p>
    @if ($i == 2 )
        <p>O I é 2</p>
    @endif
    @endfor

    @foreach ($nomes as $nome)
    <p>{{$loop->index}}  </p>
        <p> {{$nome}} </p>
    @endforeach

{{-- *textando extensão do comentario --}}
    @php
        $name = "João"; 
        echo $name;
    @endphp

@endsection