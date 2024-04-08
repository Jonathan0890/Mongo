<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('books.index', compact('book'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request){

        request()->validate([
            'nombre' => 'required',
            'editorial' => 'required',
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')
            ->with('success', 'Libro creado satisfactoriamente');
    }

    public function show(Book $book){
        return view('books.show', compact('book'));
    }

    public function edit(Book $book){
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book){
        request()->validate([
            'nombre' => 'required',
            'editorial' => 'required',
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')
            ->with('success', 'Libro actualizado satisfactoriamente');
    }

    public function destroy(Book $book){
        $book->delete();
        return redirect()->route('books.index')
            ->with('success', 'Libro eliminado satisfactoriamente');
    }
}
