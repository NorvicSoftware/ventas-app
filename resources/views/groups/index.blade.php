<html>
<header>
    <title>GRUPOS</title>
</header>
<body>
<h2>GRUPOS</h2>

<table>
    <thead>
    <tr>
        <th>Tipo</th>
    </tr>
    </thead>
    <tbody>
{{--    @foreach($groups as $group)--}}
        <tr>
            <td>{{ $groups->type }}</td>
        </tr>
{{--    @endforeach--}}
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