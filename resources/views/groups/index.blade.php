<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas-App</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;

        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .btn_create {
            display: inline-block;
            padding: .8em;
            background-color: green;
            font-weight: 700;
            color: white;
            border-radius: .5em;
            text-decoration: none;
        }
        h2 {
            text-align: center;
            font-size: 4rem;
        }
        .acciones {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .links {
            text-decoration: none;
            display: inline-block;
            padding: 3px;
            margin-top: 3px;
            background-color: green;
            border-radius: 5px;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h2>Grupos de Cliente</h2>
        <a href="groups/create" class="btn_create">Nuevo Grupo</a>
    </header>
    <table border="1" width="50%">
        <tr>
            <th>Tipo</th>
            <th>Accion</th>
        </tr>
        @foreach ($groups as $group)
            <tr>
                <td>{{$group->type}}</td>
                <td class="acciones">
                    <a class="links" href="/groups/{{$group->id}}/edit">Editar</a>
                    <a class="links" href="/groups/{{$group->id}}/view">Ver</a>
                </td>
            </tr>
        @endforeach
        {{-- <tr>
            <td>{{$group->type}}</td>
            <td>
                @foreach($groups as $client)
                {{$client->name}}<br>
                @endforeach()
            </td>
        </tr> --}}
    </table>
</body>
</html>