@extends('layouts.app')

@section('title', 'Produtos')
    
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">O evento é privado ?</label>
<select name="private" id="private" class="form-control">
  <option value="0">Não</option>
  <option value="1">Sim</option>
</select>
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Descrição do evento:</label>
     <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento ?"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection