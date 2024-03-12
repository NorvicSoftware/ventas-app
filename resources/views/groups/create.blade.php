@extends('layout')
@section('content')
<h2>CREAR GRUPO</h2>

<form action="{{ route('groups.store') }}" method="POST">
    @csrf
    <label>Tipo:</label>
    <input type="text" name="type" >
    <input type="submit" value="Guardar">

</form>
@endsection
