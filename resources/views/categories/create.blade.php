{{-- <!DOCTYPE html>
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
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 70vh; /* Ajusta la altura al 100% para que ocupe todo el espacio vertical disponible */
        }
        .cta {
            display: block;
        }
        .guardar {
            padding: .5em;
            margin: 0 auto;
            margin-top: 10px;

        }

    </style>
</head>
<body>
    <section class="container">
        <header>
            <h2>Crear Categoria</h2>
        </header>
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
            <label for="">Nombre: 
                <input type="text" name="name" class="cta" minlength="6" required="">
            </label>
            <label for="">Detalle: 
                <input type="text" name="detail" id="" class="cta" minlength="6" required="">
            </label>
            <label for="">Estado: 
                <input type="text" name="status" id="" class="cta" minlength="6" required="">
            </label>
            <input type="submit" value="Guardar" class="cta guardar">
        </form>
    </section>
</body>
</html> --}}
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
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 70vh; /* Ajusta la altura al 100% para que ocupe todo el espacio vertical disponible */
        }
        .cta {
            display: block;
        }
        .guardar {
            padding: .5em;
            margin: 0 auto;
            margin-top: 10px;

        }
    </style>
</head>
<body>
    <section class="container">
        <header>
            @if(isset($category))
            <h2>Editar Categoria</h2>
            @else
            <h2>Crear Categoria</h2>
            @endif
        </header>
        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
            @csrf
            @if(isset($category))
            {{ method_field('PUT') }}
            @endif
            <label for="">Nombre: 
                <input type="text" name="name" value="{{ isset($category) ? $category->name : '' }}" class="cta" minlength="6" required="">
            </label>
            <label for="">Detalle: 
                <input type="text" name="detail" value="{{ isset($category) ? $category->detail : '' }}" class="cta" minlength="6" required="">
            </label>
            <label for="">Estado: 
                <input type="text" name="status" value="{{ isset($category) ? $category->status : '' }}" class="cta" minlength="6" required="">
            </label>
            <input type="submit" value="{{ isset($category) ? 'Actualizar' : 'Guardar' }}" class="cta guardar">
        </form>
    </section>
</body>
</html>
