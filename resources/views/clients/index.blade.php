<!-- resources/views/clients/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Clientes</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Clientes</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Frecuentes</h2>
                        <ul class="list-group list-group-flush">
                            @foreach ($frecuentes as $client)
                                <li class="list-group-item">{{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Medio</h2>
                        <ul class="list-group list-group-flush">
                            @foreach ($medio as $client)
                                <li class="list-group-item">{{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Preferenciales</h2>
                        <ul class="list-group list-group-flush">
                            @foreach ($preferenciales as $client)
                                <li class="list-group-item">{{ $client->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
