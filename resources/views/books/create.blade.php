@extends('books.layout')

<div class="container mx-auto">
    <div class="pull-left">
        <h2 class="text-3xl font-semibold mb-4 text-center">Registrar Nuevo Libro</h2>
    </div>
    <div class="flex justify-end mt-4">
        <a href="{{ route('books.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Volver</a>
    </div>
</div>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Whoops!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="bg-gray-100 container mx-auto mt-2 p-6 mb-4 gap-4">
        <div class="grid grid-cols-1 gap-1">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Título:</label>
            <input type="text" name="nombre" id="nombre"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                placeholder="Título">
        </div>
        <div class="grid grid-cols-1 gap-1 col-xs-12 col-sm-12 col-md-12">
            <label for="editorial" class="block text-sm font-medium text-gray-700">Editorial:</label>
            <input type="text" name="editorial" id="editorial"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                placeholder="Editorial">
        </div>
        <div class="grid grid-cols-1 gap-1 col-xs-12 col-sm-12 col-md-12">
            <label for="detalle" class="block text-sm font-medium text-gray-700">Detalle:</label>
            <textarea name="detalle" id="detalle"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                rows="3" placeholder="Detalle"></textarea>
        </div>
    </div>
    <div class="mt-8 flex justify-center col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Guardar</button>
    </div>
</form>
