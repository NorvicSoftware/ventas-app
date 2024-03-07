<x-layout>
    <h2>CREAR CATEGORIA</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        <label>Detalle:</label>
        <input type="text" name="detail" value="{{ old('detail') }}">
        @error('detail')
        <p>{{ $message }}</p>
        @enderror
        <label>Estado:</label>
        <input type="text" name="status" value="{{ old('status') }}">
        @error('status')
        <p>{{ $message }}</p>
        @enderror
        <input type="submit" value="Guardar">
    </form>

</x-layout>



