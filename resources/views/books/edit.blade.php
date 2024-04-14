@extends('books.layout')


<div class="container mx-auto">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-3xl text-center font-semibold mb-4">Editar libro</h2>
        </div>
        <div class="mt-4 flex justify-end">
            <a class="bg-yellow-500 text-center text-white py-2 px-4 rounded-lg hover:bg-yellow-600 inline-block" href="{{ route('books.index') }}">Volver</a>
        </div>
    </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('books.update', $book->id) }}" method="POST"
    class="bg-white px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')


    <div class="bg-gray-100 container mx-auto mt-2 -mb-2 p-6 gap-4">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="grid grid-cols-1 gap-1 mt-8">
                <strong>Titulo:</strong>
                <input type="text" name="nombre" value="{{ $book->nombre }}" class="form-control"
                    placeholder="Titulo">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="grid grid-cols-1 gap-1 mt-8">
                <strong>Editorial:</strong>
                <input type="text" name="editorial" value="{{ $book->editorial }}" class="form-control"
                    placeholder="Editorial">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="grid grid-cols-1 gap-1 mt-8">
                <strong>Detalle:</strong>
                <textarea class="form-control" style="height:150px" name="detalle" placeholder="Detalle">{{ $book->detalle }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="bg-green-500 text-center text-white py-2 px-4 rounded-lg hover:bg-green-600 inline-block">Guardar</button>
        </div>
    </div>


</form>
