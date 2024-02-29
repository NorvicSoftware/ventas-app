<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupos</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .btn_volver {
            display: inline-block;
            padding: .8em;
            background-color: green;
            font-weight: 700;
            color: white;
            border-radius: .5em;
            text-decoration: none;
            margin: 0 auto;
        }
        .btn_container {
            display: flex;
            justify-content: center;
        }
        h2 {
            text-align: center;
            font-size: 4rem;
        }
    </style>
</head>
<body>
    <header><h2>Información del Grupo<br>{{$group->type}}</h2></header>
    <table>
        <tbody>
            <tr>
                <th>Tipo de Grupo</th>
                <td>{{$group->type}}</td>
            </tr>
        </tbody>
    </table>
    <div class="btn_container">
        <a href="/groups" class="btn_volver">Volver</a>
    </div>
    
</body>
</html>