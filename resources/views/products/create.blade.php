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
            height: 100vh; /* Ajusta la altura al 100% para que ocupe todo el espacio vertical disponible */
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
            <h2>Crear Producto</h2>
        </header>
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <label for="">Codigo: 
                <input type="text" name="code" class="cta" minlength="6" required="">
            </label>
            <label for="">Nombre: 
                <input type="text" name="name" id="" class="cta" minlength="6" required="">
            </label>
            <label for="">Fecha de vencimiento: 
                <input type="text" name="expiration_date" id="" class="cta" required="">
            </label>
            <label for="">Descripcion:
                <input type="text" name="description" id="" class="cta" minlength="6" required="">
            </label>
            <label for="">Precio:
                <input type="number" name="price" id="" class="cta" required="">
            </label>
            <label for="">Categoria:
                {{-- <input type="text" name="category_id" id="" class="cta" required=""> --}}
                {{--<select name="category_id" id="category_id" class="cta">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </label>
            <input type="submit" value="Guardar" class="cta guardar">
        </form>
    </section>
    <a href=""></a>
    
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
            height: 100vh; /* Ajusta la altura al 100% para que ocupe todo el espacio vertical disponible */
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
            @if(isset($product))
            <h2>Editar Producto</h2>
            @else
            <h2>Crear Producto</h2>
            @endif
        </header>
        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
            @csrf
            @if(isset($product))
            {{ method_field('PUT') }}
            @endif
            <label for="">Codigo: 
                <input type="text" name="code" value="{{ isset($product) ? $product->code : '' }}" class="cta" minlength="6" required="">
            </label>
            <label for="">Nombre: 
                <input type="text" name="name" value="{{ isset($product) ? $product->name : '' }}" class="cta" minlength="6" required="">
            </label>
            <label for="">Fecha de vencimiento: 
                <input type="text" name="expiration_date" value="{{ isset($product) ? $product->expiration_date : '' }}" class="cta" required="">
            </label>
            <label for="">Descripcion:
                <input type="text" name="description" value="{{ isset($product) ? $product->description : '' }}" class="cta" minlength="6" required="">
            </label>
            <label for="">Precio:
                <input type="number" name="price" value="{{ isset($product) ? $product->price : '' }}" class="cta" required="">
            </label>
            <label for="">Categoria:
                <select name="category_id" id="category_id" class="cta">
                    @foreach($categories as $category)
                        @if(isset($product) && $category->id === $product->category_id)
                            <option selected value="{{$category->id}}">{{$category->name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                    @endforeach
                </select>
            </label>
            <input type="submit" value="{{ isset($product) ? 'Actualizar' : 'Guardar' }}" class="cta guardar">
        </form>
    </section>
</body>
</html>
