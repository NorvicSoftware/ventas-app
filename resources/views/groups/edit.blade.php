@extends('layout')
@section('content')
<h2>EDITAR GRUPO</h2>
<form action="{{ route('groups.update', $group->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Nombre:</label>
    <input type="text" name="type" value="{{ $group->type }}">
    <input type="submit" value="Guardar">
</form>
@endsection

