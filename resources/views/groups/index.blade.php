<html>
<header>
    <title>GRUPOS</title>
</header>
<body>
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
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        /*background-color: #333;*/
        /*color: #fff;*/
        text-align: center;
        padding: 10px;
    }
    h2 {
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #eee;
    }
</style>
