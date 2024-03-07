<x-layout>
<h2>{{ __('Create Product') }}</h2>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>{{ __('Code') }}</label>
    <input type="text" name="code" value="{{ old('code') }}">
    @error('code')
        <p>{{ $message }}</p>
    @enderror
    <label>{{ __('Name') }}</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
    <p>{{ $message }}</p>
    @enderror
    <label>Fecha de vencimiento:</label>
    <input type="text" name="expiration_date" value="{{ old('expiration_date') }}">
    @error('expiration_date')
    <p>{{ $message }}</p>
    @enderror
    <label>Descripcion:</label>
    <input type="text" name="description" value="{{ old('description') }}">
    @error('description')
    <p>{{ $message }}</p>
    @enderror
    <label>Precio:</label>
    <input type="text" name="price" value="{{ old('price') }}">
    @error('price')
    <p>{{ $message }}</p>
    @enderror
    <label>Categoria:</label>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option  value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
{{--    <input type="text" name="category_id">--}}
    <input type="submit" value="Guardar">
</form>
</x-layout>
