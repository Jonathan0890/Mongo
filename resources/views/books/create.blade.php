@extends('books.layout')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="flex justify-start lg:col-span-1">
            <h2 class="text-2xl font-bold">Registrar Nuevo Libro</h2>
        </div>
        <div class="flex justify-end lg:col-span-1">
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
        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 md:grid-cols-3">
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Título:</label>
                <input type="text" name="nombre" id="nombre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Título">
            </div>
            <div>
                <label for="editorial" class="block text-sm font-medium text-gray-700">Editorial:</label>
                <input type="text" name="editorial" id="editorial" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Editorial">
            </div>
            <div>
                <label for="detalle" class="block text-sm font-medium text-gray-700">Detalle:</label>
                <textarea name="detalle" id="detalle" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" rows="3" placeholder="Detalle"></textarea>
            </div>
        </div>
        <div class="mt-4 flex justify-center">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Guardar</button>
        </div>
    </form>
@endsection
