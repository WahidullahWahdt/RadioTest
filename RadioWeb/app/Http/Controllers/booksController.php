<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class booksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return view('project.book.croud',compact("book"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.book.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->name=$request->name;

        $bfile = $request->book;
        $bookName = time().'.'.$bfile->getClientOriginalExtension();
        $request->book->move(public_path('books'),$bookName);
        $book->bookURL = $bookName;

        $ifile = $request->image;
        $imgName = time().'.'.$ifile->getClientOriginalExtension();
        $request->image->move(public_path('books'),$imgName);
        $book->url = $imgName;

        $book->save();
        return redirect("addBook");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('project.book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->name=$request->name;

        $bfile = $request->book;
        $bookName = time().'.'.$bfile->getClientOriginalExtension();
        $request->book->move(public_path('books'),$bookName);
        $book->bookURL = $bookName;

        $ifile = $request->image;
        $imgName = time().'.'.$ifile->getClientOriginalExtension();
        $request->image->move(public_path('books'),$imgName);
        $book->url = $imgName;

        $book->save();
        return redirect("addBook");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect("addBook");
    }
}
