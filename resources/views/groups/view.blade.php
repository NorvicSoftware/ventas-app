@extends('layout')
@section('content')
<body>
<h2>VER GRUPO</h2>
<a href="/groups">Volver</a>
<br>
<label>Tipo del grupo: {{ $group->type }}</label><br>
@endsection
