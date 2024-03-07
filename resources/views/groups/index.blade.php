@extends('layout')
@section('content')
<h2>GRUPOS</h2>
<a href="groups/create" class="button">NUEVA GRUPO</a>
<table>
    <thead>
    <tr>
        <th>Tipo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($groups as $group)
        <tr>
            <td>{{ $group->type }}</td>
            <td>
                <a href="groups/{{ $group->id }}/edit">Editar</a>
                <a href="groups/{{ $group->id }}/view">Ver</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
