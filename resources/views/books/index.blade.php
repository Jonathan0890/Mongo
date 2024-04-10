@extends('books.layout')

@section('content')
    <div class="container flex flex-col w-full p-6 mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl">Librería Mongodb-Laravel</h2>
            <a href="{{ route('books.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Nuevo libro</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif

        <table class="w-full border-collapse border border-gray-400">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">No</th>
                    <th class="border border-gray-400 px-4 py-2">Titulo</th>
                    <th class="border border-gray-400 px-4 py-2">Editorial</th>
                    <th class="border border-gray-400 px-4 py-2">Detalle</th>
                    <th class="border border-gray-400 px-4 py-2">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $book)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ ++$i }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->nombre }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->editorial }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->detalle }}</td>
                        <td class="border border-gray-400 px-4 py-2">
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                <a href="{{ route('books.show', $book->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                                <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
