@extends('books.layout')

<div class="h-screen bg-gray-100">
    <div class="container mx-auto max-w-screen-xl p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl">Librería Mongodb-Laravel</h2>
            <a href="{{ route('books.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Nuevo libro</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif

        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-4 py-2 border border-gray-400">No</th>
                    <th class="px-4 py-2 border border-gray-400">Titulo</th>
                    <th class="px-4 py-2 border border-gray-400">Editorial</th>
                    <th class="px-4 py-2 border border-gray-400">Detalle</th>
                    <th class="px-4 py-2 border border-gray-400">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $book)
                    <tr class="hover:bg-gray-200 transition-colors">
                        <td class="px-4 py-2 border border-gray-400">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $book->nombre }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $book->editorial }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $book->detalle }}</td>
                        <td class="px-4 py-2 border border-gray-400">
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                <a href="{{ route('books.show', $book->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver</a>
                                <a href="{{ route('books.edit', $book->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

