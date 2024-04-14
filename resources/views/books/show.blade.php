@extends('books.layout')

<div class="container mx-auto">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-3xl text-center font-semibold mb-4"> Ver Libro</h2>
        </div>
        <div class="mt-4 flex justify-end">
            <a class="bg-indigo-500 text-center text-white py-2 px-4 rounded-lg hover:bg-indigo-600 inline-block" href="{{ route('books.index') }}"> Volver</a>
        </div>
    </div>
</div>


<div class="bg-gray-100 container mx-auto mt-2 -mb-2 p-6 gap-4">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="grid grid-cols-1 gap-1 mt-8">
            <strong>Titulo:</strong>
            {{ $book->nombre }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="grid grid-cols-1 gap-1 mt-8">
            <strong>Editorial:</strong>
            {{ $book->editorial }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="grid grid-cols-1 gap-1 mt-8">
            <strong>Detalle:</strong>
            {{ $book->detalle }}
        </div>
    </div>
</div>
