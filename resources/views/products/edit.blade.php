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
            <h2>Editar Producto</h2>
        </header>
        <form action="{{route('products.update', $product->id)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
            <label for="">Codigo: 
                <input type="text" name="code" value="{{$product->code}}" class="cta" minlength="6" required="">
            </label>
            <label for="">Nombre: 
                <input type="text" name="name" value="{{$product->name}}" id="" class="cta" minlength="6" required="">
            </label>
            <label for="">Fecha de vencimiento: 
                <input type="text" name="expiration_date" value="{{$product->expiration_date}}" id="" class="cta" required="">
            </label>
            <label for="">Descripcion:
                <input type="text" name="description" value="{{$product->description}}" id="" class="cta" minlength="6" required="">
            </label>
            <label for="">Precio:
                <input type="number" name="price" id="" value="{{$product->price}}" class="cta" required="">
            </label>
            <label for="">Categoria:
                {{-- <input type="text" name="category_id" id="" class="cta" required=""> --}}
                {{--<select name="category_id" id="category_id" class="cta">
                    @foreach($categories as $category)
                        @if ($category->id === $product->category_id)
                            <option selected="" value="{{$category->id}}">{{$category->name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                    @endforeach
                </select>
            </label>
            <input type="submit" value="Guardar" class="cta guardar">
        </form>
    </section>
    <a href=""></a>
    
</body>
</html> --}}